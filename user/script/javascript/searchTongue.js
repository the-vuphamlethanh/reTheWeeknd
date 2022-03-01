let search = document.getElementById('search')
search.addEventListener(
    'click',
    () => {
        let searchTongue = document.querySelector('.search__wrap')
        searchTongue.style.transform = "translateY(0)"
    }
)
let close = document.querySelector('.btn--close')
close.addEventListener(
    'click',
    () => {
        let searchTongue = document.querySelector('.search__wrap')
        searchTongue.style.transform = "translateY(-100%)"
    }
)