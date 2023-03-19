let input = document.querySelector('.inputSearch')
let cards = document.querySelectorAll('.containerProducts .card')

input.addEventListener('input', function () {
    const searchTerm = input.value.toLowerCase()

    for (let i = 0; i < cards.length; i++) {
        const card = cards[i]
        const name = card.getAttribute('id').toLowerCase()

        if (name.includes(searchTerm) || name + " " == searchTerm) {
            card.style.display = ''
        } else {
            card.style.display = 'none'
        }
    }
})
