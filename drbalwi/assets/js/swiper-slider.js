const swiper = new Swiper('.swiper', {
    loop: true,
    autoHeight: true,
    slidesPerView: 1,
    spaceBetween:15,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 15,
        }
    }
});


