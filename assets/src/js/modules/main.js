export default () => {
    if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 )
    {
        jQuery('body').addClass('bs-opera');
    }
    else if(navigator.userAgent.indexOf("Chrome") != -1 )
    {
        jQuery('body').addClass('bs-chrome');
    }
    else if(navigator.userAgent.indexOf("Safari") != -1)
    {
        jQuery('body').addClass('bs-safari');
    }
    else if(navigator.userAgent.indexOf("Firefox") != -1 )
    {
        jQuery('body').addClass('bs-firefox');
    }
    else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
    {
        jQuery('body').addClass('bs-ie');
    }
    else
    {
        jQuery('body').addClass('bs-unknown');
    }


    //burger, open close
    if($('.burger').length) {
        $('.burger').click(function () {
            $('.burger').toggleClass('clicked');
            $('.header').toggleClass('nav-active');
        });
    }
    //burger, open close

    //dropdown select start

    function dropdownToggle(thisItem) {
        $(thisItem).siblings().removeClass('disabled');
        $(thisItem).addClass('disabled');
        $(thisItem).find('.dropdown__dropdown').slideToggle();
    }

    function dropdownItem(thisItem) {
        $(thisItem).siblings().removeClass('disabled');
        $(thisItem).addClass('disabled');
        $(thisItem).closest('.dropdown').find('.dropdown__header .text').text($(thisItem).find('.dropdown__text').text());
        $(thisItem).closest('.dropdown').find('.dropdown__header .text').data("value", $(thisItem).find('.dropdown__text').data("value"));
        console.log($(thisItem).closest('.dropdown').find('.dropdown__header .text').data("value"));
        $(thisItem).find('.dropdown__dropdown').slideToggle();
    }

    $('.js__dropdown').on('click', function (e) {
        var thisItem = $(this);
        dropdownToggle(thisItem);
    });

    $('.dropdown__item').on('click', function (e) {
        var thisItem = $(this);
        dropdownItem(thisItem);
    });
    //dropdown select end

    //select2 start
    if ($("select").length) {
        setTimeout(function () {
            $("select").each(function (index, item) {
                var text = $(item).data("placeholder");
                $(item).select2({
                    placeholder: text,
                    minimumResultsForSearch: -1
                });
            });
        }, 100);
    }
    //select2 end

    //header sticky start
    $(window).scroll(function(){
        if($(window).width()>1024) {
            $('.header__mobile').removeClass('sticky');
            if($(this).scrollTop()>=250){
                $('.header').addClass('sticky');
            } else {
                $('.header').removeClass('sticky');
            }
        } else {
            $('.header').removeClass('sticky');
            if($(this).scrollTop()>=250){
                $('.header__mobile').addClass('sticky');
            } else {
                $('.header__mobile').removeClass('sticky');
            }
        }
    });
    //header sticky start

    //ellipsis
    $('.grid__card-description').ellipsis( {lines: 5});
    $('.warranty .grid__card-description').ellipsis( {lines: 9});
    $('.warranty .grid__card-front .grid__card-description').ellipsis( {lines: 3});
    $('.reviews__item-text').ellipsis( {lines: 5});
    $('.promotions__text').ellipsis( {lines: 2});
    ellipsisStages();
    $('.blog-posts__item-text').ellipsis( {lines: 5});
    $(window).on('load', function () {
        $('.grid__card-description').ellipsis({lines: 5});
        $('.warranty .grid__card-description').ellipsis( {lines: 9});
        $('.warranty .grid__card-front .grid__card-description').ellipsis( {lines: 3});
        $('.reviews__item-text').ellipsis( {lines: 5});
        $('.promotions__text').ellipsis( {lines: 2});
        ellipsisStages();
        $('.blog-posts__item-text').ellipsis( {lines: 5});
    });
    $(document).ajaxComplete(function () {
        $('.grid__card-description').ellipsis({lines: 5});
        $('.warranty .grid__card-description').ellipsis( {lines: 9});
        $('.warranty .grid__card-front .grid__card-description').ellipsis( {lines: 3});
        $('.reviews__item-text').ellipsis( {lines: 5});
        $('.promotions__text').ellipsis( {lines: 2});
        ellipsisStages();
        $('.blog-posts__item-text').ellipsis( {lines: 5});
    });
    $(window).resize(function () {
        $('.grid__card-description').ellipsis({lines: 5});
        $('.warranty .grid__card-description').ellipsis( {lines: 9});
        $('.warranty .grid__card-front .grid__card-description').ellipsis( {lines: 3});
        $('.reviews__item-text').ellipsis( {lines: 5});
        $('.promotions__text').ellipsis( {lines: 2});
        ellipsisStages();
        $('.blog-posts__item-text').ellipsis( {lines: 5});
    });
    function ellipsisStages() {
        if($( window ).width()>540) {
            $('.stages__text').ellipsis( {lines: 4});
        }
    }
    //ellipsis

    $('.stages__item .plus').on('click', function () {
        $(this).closest('.stages__item').toggleClass('active');
    });

    //body onclick start
    $('body').on('click', function () {
        $("body" ).removeClass('mobile-filter');
        $(".catalog__filter" ).removeClass('mobile-active');
    });
    //body onclick end

    $('.grid__card').on('mouseenter', function (e) {
        e.stopPropagation();
        var thisItem = $(this);
        setTimeout(function () {
            thisItem.addClass('hover');
        }, 200);
    });

    $('.grid__card').on('mouseleave', function (e) {
        e.stopPropagation();
        var thisItem = $(this);
        setTimeout(function () {
            thisItem.removeClass('hover');
        }, 200);
    });

};
