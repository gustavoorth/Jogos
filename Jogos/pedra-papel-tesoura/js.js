const rock = document.getElementById('rockContainer').innerText;
const paper = document.getElementById('paperContainer').innerText;
const scissors = document.getElementById('scissorsContainer').innerText;
const textContainer = document.getElementById('textContainer');
const textInfo = document.getElementById('textInfo')

const choices = document.querySelectorAll('.option');
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
        startGame(choice.id)
    })
}

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

    console.log(option);
    console.log(document.getElementById(option + 'Container'));
    const enemyContainer = document.getElementById('enemyContainer')
    enemyContainer.classList.remove('d-none');

    const enemyChoice = rollEnemy();

    enemyContainer.querySelector('pre').innerText = (enemyChoice == 'rock') ? rock : (enemyChoice == 'paper') ? paper : scissors;

    //animacao pra rodar as opcoes do inimigo e contador

    const result = checkWinner(option, enemyChoice);
    showResults(result);
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
    switch (player) {
        case 'rock':
            switch (enemy) {
                case 'rock':
                    return 'Draw';
                case 'paper':
                    return 'Lose';
                case 'scissors':
                    return 'Win';
            }
        case 'paper':
            switch (enemy) {
                case 'rock':
                    return 'Win';
                case 'paper':
                    return 'Draw';
                case 'scissors':
                    return 'Lose';
            }
        case 'scissors':
            switch (enemy) {
                case 'rock':
                    return 'Lose';
                case 'paper':
                    return 'Win';
                case 'scissors':
                    return 'Draw';
            }
            break;
    }
}

function showResults(result) {

    textInfo.innerText = document.getElementById('text' + result).innerText
    textContainer.classList.remove('d-none')
}