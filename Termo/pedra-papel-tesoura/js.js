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
    choice.addEventListener('mouseover', () => {
        choice.classList.add('background-on-hover')
        textInfo.classList.remove("textContainerAnim")
        textInfo.offsetWidth
        textInfo.classList.add("textContainerAnim")
        textInfo.innerText = textOnHover
    })
    choice.addEventListener('mouseout', () => {
        textInfo.innerText = originalTextInfo
        textInfo.classList.remove("textContainerAnim")
        textInfo.offsetWidth
        textInfo.classList.add("textContainerAnim")
        choice.classList.remove('background-on-hover')
    })
    choice.addEventListener("click", startGame(choice.id))
}

function startGame(option) {
const optionChosen = document.getElementById(option);
const optionsContainer = document.getElementById("options");
const childElements = optionsContainer.children;

    for (const child of childElements) {
      // Check if the child element has the id specified in the "option" variable
      if (childElements[i].id !== option) {
        // If not, add the "d-none" class to the child element
        childElements[i].classList.add("d-none");
      }
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