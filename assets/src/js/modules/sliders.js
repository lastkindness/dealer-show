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
        spaceBetween: 0,
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            768: {
                centeredSlides: false,
                spaceBetween: 30,
                slidesPerView: 2
            },
            1280: {
                centeredSlides: false,
                spaceBetween: 30,
                slidesPerView: 3
            },
            1366: {
                centeredSlides: false,
                spaceBetween: 30,
                slidesPerView: 4
            }
        }
    });

    var swiperReviews = undefined;
    function initSwiperReviews() {
        if($( window ).width()<=1024  && swiperReviews == undefined) {
            swiperReviews = new Swiper('.reviews .swiper-container', {
                spaceBetween: 15,
                loop: true,
                slidesPerView: 1,
                centeredSlides: true,
                pagination: {
                    el: '.reviews .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: ".reviews .swiper-button-next",
                    prevEl: ".reviews .swiper-button-prev",
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    }
                }
            });
        } else if ($( window ).width()>1024 && swiperReviews != undefined) {
            swiperReviews.destroy();
            swiperReviews = undefined;
        }
    }
    $( window ).resize(function(){
        if($('.reviews__item').length>0) {
            initSwiperReviews();
        }
    });
    if($('.reviews__item').length>0) {
        initSwiperReviews();
    }

    var swiperWarranty = undefined;
    function initSwiperWarranty() {
        if($( window ).width()<=1024  && swiperWarranty == undefined) {
            swiperWarranty = new Swiper('.warranty .swiper-container', {
                spaceBetween: 15,
                loop: true,
                slidesPerView: 1,
                centeredSlides: true,
                pagination: {
                    el: '.warranty .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: ".warranty .swiper-button-next",
                    prevEl: ".warranty .swiper-button-prev",
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    }
                }
            });
        } else if ($( window ).width()>1024 && swiperWarranty != undefined) {
            swiperWarranty.destroy();
            swiperWarranty = undefined;
        }
    }
    $( window ).resize(function(){
        if($('.warranty .grid__card').length>0) {
            initSwiperWarranty();
        }
    });
    if($('.warranty .grid__card').length>0) {
        initSwiperWarranty();
    }
};
