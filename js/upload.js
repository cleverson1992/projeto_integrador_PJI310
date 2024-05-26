const change = document.querySelector('#file')
const erroNaoPermitido = document.querySelector('.erro-arquivo.msg1')
const erroSelecioarArquivo = document.querySelector('.erro-arquivo.msg2')
const erroUploadRealizado = document.querySelector('.erro-arquivo.msg3')
const btn = document.querySelector('.btn')
const form = document.querySelector('#form')

change.addEventListener('change', () => {

    if(change.files[0].type != "video/mp4"){
        erroNaoPermitido.classList.add('erro-active')
        erroSelecioarArquivo.classList.remove('erro-active')
        change.value = ''
    } else {
        erroNaoPermitido.classList.remove('erro-active')
        erroSelecioarArquivo.classList.remove('erro-active')

        document.querySelector('label > :nth-child(1)').setAttribute('style', 'display: inline-block')
        document.getElementById('select-file').innerHTML = change.files[0].name
    }

})

form.addEventListener('submit', (event) => {
    if(!change.files[0]){
        event.preventDefault()
        erroNaoPermitido.classList.remove('erro-active')
        erroSelecioarArquivo.classList.add('erro-active')
        return
    }
});