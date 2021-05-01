export default () => {
    var swiperCasesImg = new Swiper('.hero-slider__wrapper', {
        spaceBetween: 0,
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        centeredSlides: true,
        navigation: {
            nextEl: '.hero-slider__nav .swiper-button-next',
            prevEl: '.hero-slider__nav .swiper-button-prev',
        },
        pagination: {
            el: '.hero-slider__controls.swiper-pagination',
            type: 'fraction',
            formatFractionCurrent: addZero,
            formatFractionTotal: addZero
        }
    });

    function addZero(num){
        return (num > 9) ? num : '0' + num;
    };

    var swiperAuctionsImg = new Swiper('.auctions__wrapper', {
        spaceBetween: 30,
        slidesPerView: 4,
        loop: true,
        autoplay: {
            delay: 3000,
        },
    });
};
