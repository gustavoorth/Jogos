const rockContainer = document.getElementById('rockContainer');
const paperContainer = document.getElementById('paperContainer');
const scissorsContainer = document.getElementById('scissorsContainer');
const textContainer = document.getElementById('textContainer');
const textInfo = document.getElementById('textInfo');
const statsButton = document.getElementById('statsButton');

statsButton.addEventListener('click', () => {
    location.href = 'stats.html';
});

function addListeners() {
    const choices = document.querySelectorAll('.option:not(.notMe)');
    for (const choice of choices) {
        let textOnHover;
        switch (choice.id) {
            case 'rock':
                textOnHover = document.getElementById('selectRockText').innerText
                break;
            case 'paper':
                textOnHover = document.getElementById('selectPaperText').innerText
                break;
            case 'scissors':
                textOnHover = document.getElementById('selectScissorsText').innerText
                break;
        }
        const textInfo = document.getElementById('textInfo')
        const originalTextInfo = textInfo.innerText

        function mouseOverEvent() {
            choice.classList.add('background-on-hover')
            textInfo.classList.remove("textContainerAnim")
            textInfo.offsetWidth
            textInfo.classList.add("textContainerAnim")
            textInfo.innerText = textOnHover
        }

        function mouseOutEvent() {
            textInfo.innerText = originalTextInfo
            textInfo.classList.remove("textContainerAnim")
            textInfo.offsetWidth
            textInfo.classList.add("textContainerAnim")
            choice.classList.remove('background-on-hover')
        }

        choice.addEventListener('mouseover', mouseOverEvent)
        choice.addEventListener('mouseout', mouseOutEvent)
        choice.addEventListener("click", () => {
            choice.removeEventListener('mouseover', mouseOverEvent)
            choice.removeEventListener('mouseout', mouseOutEvent)
            mouseOutEvent()
            startGame(choice.id)
        }, { once: true })
    }
}

addListeners();

function startGame(option) {
    const optionChosen = document.getElementById(option);
    const optionsContainer = document.getElementById("options");
    const childElements = optionsContainer.children;

    for (const child of childElements) {
        if (child.querySelector("button") !== optionChosen) {
            child.classList.add("d-none");
        }
    }

    textContainer.classList.add('d-none');

    const versusContainer = document.getElementById('versusContainer')
    versusContainer.classList.remove("d-none");

    const enemyContainer = document.getElementById('enemyContainer')
    enemyContainer.classList.remove('d-none');
    rollEnemyAnimation()
    let intervalId = setInterval(rollEnemyAnimation, 800);

    setTimeout(() => {
        clearInterval(intervalId);
        const enemyChoice = rollEnemy()
        const result = checkWinner(option, enemyChoice);
        const enemyPre = enemyContainer.querySelector('pre')
        enemyPre.innerText = document.getElementById(enemyChoice + 'Container').innerText;
        enemyPre.classList.remove('gameAnimation')
        enemyPre.offsetWidth
        enemyPre.classList.add('gameAnimation')
        showResults(result);
    }, 4000);

    function rollEnemyAnimation() {
        const enemyPre = enemyContainer.querySelector('pre')
        enemyPre.innerText = document.getElementById(rollEnemy() + 'Container').innerText;
        enemyPre.classList.remove('gameAnimation')
        enemyPre.offsetWidth
        enemyPre.classList.add('gameAnimation')
    }
}

function rollEnemy() {
    const number = Math.floor(Math.random() * 3) + 1;
    switch (number) {
        case 1:
            return 'rock';
        case 2:
            return 'paper';
        case 3:
            return 'scissors';
    }
}

function checkWinner(player, enemy) {
    if (player === enemy) {
      return 'Draw';
    }
    if (
      (player === 'rock' && enemy === 'scissors') ||
      (player === 'paper' && enemy === 'rock') ||
      (player === 'scissors' && enemy === 'paper')
    ) {
      return 'Win';
    }
    return 'Lose';
  }

function showResults(result) {
    const replayButton = document.getElementById('replayButton');
    replayButton.classList.remove('v-hidden');
    replayButton.addEventListener('click', () => {
        location.reload()
    })
    textInfo.innerText = document.getElementById('text' + result).innerText
    textContainer.classList.remove('d-none')
}