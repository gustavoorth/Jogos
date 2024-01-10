const div = document.getElementById('eu')
var arrayGeral;
var indexArray;

async function getPalavras() {
  const res = await fetch('palavras.txt')
  return res.text();
}

async function displayPalavras() {
  const palavras = await getPalavras()
  const palavrasArray = palavras.split(',')
  arrayGeral = palavrasArray
  const randomIndex = Math.floor(Math.random() * palavrasArray.length)
  div.innerText = palavrasArray[randomIndex]
  indexArray = randomIndex
  console.log(palavrasArray.length);
}

displayPalavras()

async function funcao(excluir='') {
  if (excluir != '') {
    const form = new FormData;
    arrayGeral.splice(indexArray,1)
    console.log(arrayGeral.length);
    console.log(arrayGeral[indexArray]);
    form.append('text',arrayGeral.join(','))
    await postFetch('salvartxt.php',form)
  }
  location.reload();
}

async function postFetch(url, form, json = false) {
  try {
      const res = await fetch(url, {
          method: 'POST',
          body: form
      })
      const data = (json) ? res.json() : res.text();
      return data;
  } catch (err) {
      console.log(err);
  }
}