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

})