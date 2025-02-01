document.addEventListener("DOMContentLoaded", function() {

    // Initializing the swiper plugin for the slider.
    //from https://swiperjs.com/
    
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination' ,
            clickable: true
        },
        paginationClickable: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    });
    
});