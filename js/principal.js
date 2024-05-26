const filterElement = document.querySelector('#toolbar input')
const cards = document.querySelectorAll('.cards li')
const cardInfo = document.querySelector('.card')

filterElement.addEventListener('input', filterCards)

function filterCards() {
    if(filterElement.value != ''){
        for(let card of cards){
            let title = card.querySelector('p')
            title = title.textContent.toLowerCase()
            let filterText = filterElement.value.toLowerCase()
            if(!title.includes(filterText)){
                card.style.display = "none"
                cardInfo.style.display = "none"
            }else{
                card.style.display = "block"
            }
        }
    }else{
        for(let card of cards){
            card.style.display = "block"
            cardInfo.style.display = "block"
        }
    }
}