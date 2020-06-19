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

    // active navbar 
    const currentLocation = location.href;
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => {
        link.href === currentLocation ?
            link.classList.add('link-active') :
            link.classList.remove('link-active')
    });

    // animations
    const img = document.querySelectorAll('.display-img');

    img.forEach(el => {
        el.addEventListener('mouseenter', e => {
            if (!e.target.classList.contains('slide_img_right'))
                e.target.classList.add('slide_img_right');
            e.target.previousElementSibling.classList.add('slide_img_left');
        })
    })

    // copy right
    const copyrightYear = document.querySelector('#copyrightYear')
    const dat = new Date().getFullYear();

    copyrightYear.textContent = dat

})

initArrow(pos = 0);
initMap();
// back to top
function initArrow(pos) {
    const arrow = document.querySelector('.back-to-top');

    if (pos >= 300) arrow.classList.remove('hide')

    window.addEventListener('scroll', e => {
        window.pageYOffset >= 300 ?
            arrow.classList.remove('hide') :
            arrow.classList.add('hide')
    })
}

// Google Map 
function initMap() {
    // `AIzaSyCMR0VubGQmvqaWticCn-eAMoaXudxJ9Uc`;
    // The location of Uluru
    const uluru = {
        lat: 24.9107,
        lng: 67.0311
    };
    // The map, centered at Uluru
    const map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 4,
            center: uluru
        });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}