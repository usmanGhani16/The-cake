window.addEventListener('load', () => {
    // swip slider 
    const swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {

            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
})

// active navbar 
const currentLocation = location.href;
const links = document.querySelectorAll('.nav-link');
Array.from(links).forEach(link => {
    link.href === currentLocation ?
        link.classList.add('link-active') :
        link.classList.remove('link-active')
});