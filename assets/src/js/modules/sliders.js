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
                autoplay: {
                    delay: 3000,
                },
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
                autoplay: {
                    delay: 3000,
                },
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

    function topAuto() {
        var lengthAuto = 4;
        if($(window).width()<=1680) {
            lengthAuto = 3;
        } else if ($(window).width()<=1024) {
            lengthAuto = 2;
        }
        if($('.product + .top-auto .grid__card').length>lengthAuto) {
            swiperWarranty = new Swiper('.product + .top-auto .swiper-container', {
                spaceBetween: 15,
                loop: true,
                slidesPerView: 2,
                centeredSlides: true,
                // autoplay: {
                //     delay: 3000,
                // },
                breakpoints: {
                    1024: {
                        slidesPerView: 3
                    },
                    1680: {
                        slidesPerView: 4
                    }
                }
            });
        }
    };

    $( window ).resize(function(){
        topAuto();
    });
    topAuto();



    function sliderBig() {
        $('.product__image_slider-big').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            arrows: false,
            infinite: false,
            fade: true,
            asNavFor: '.product__image_slider-small',
            swipe: false,
            responsive: [
                {
                    breakpoint: 1030,
                    settings: {
                        swipe: true
                    }
                }, {
                    breakpoint: 690,
                    settings: {
                        swipe: true
                    }
                }
            ]
        });
        $('.product__image_slider-small').slick({
            asNavFor: '.product__image_slider-big',
            dots: false,
            swipe: true,
            centerMode: false,
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            vertical: false,
            verticalSwiping: false,
            arrows: false,
            centerPadding: '0',
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 690,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });
    }



    if ($('.product__image_slider-big').length) {
        sliderBig();
    }

// elevateZoom start
    function elevateZoom () {
        if ($(window).width() > 1030) {
            setTimeout(function () {
                $('.gallery-images .slick-active img').elevateZoom({
                    scrollZoom: "true",
                    zoomType: "inner",
                    cursor: "crosshair",
                    zoomLevel: 1,
                    constrainType: 'width'
                });
            }, 300);
        }
    }

    if($('.product__image_loupe').length) {
        elevateZoom ();
        $('.product__image_slider-small-slide').on('click', function(event){
            event.preventDefault();
            $('.gallery-images .slick-active img').removeData('elevateZoom');
            $('.zoomContainer').remove();
            elevateZoom ();
        });

        $('.product__image_loupe .slick-arrow').on('click', function(event){
            event.preventDefault();
            $('.gallery-images .slick-active img').removeData('elevateZoom');
            $('.zoomContainer').remove();
            elevateZoom ();
        });
    }
    // elevateZoom end
};
