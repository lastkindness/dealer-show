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
        $(thisItem).toggleClass('active');
        $(thisItem).find('.dropdown__dropdown').slideToggle();
    }

    function dropdownItem(thisItem) {
        $(thisItem).toggleClass('active');
        $(thisItem).closest('.dropdown').find('.dropdown__header .text').text($(thisItem).find('.dropdown__text').text());
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
            if($(this).scrollTop()>=1){
                $('.header').addClass('sticky');
            } else {
                $('.header').removeClass('sticky');
            }
        } else {
            $('.header').removeClass('sticky');
            if($(this).scrollTop()>=1){
                $('.header__mobile').addClass('sticky');
            } else {
                $('.header__mobile').removeClass('sticky');
            }
        }
    });
    //header sticky start

    //ellipsis
    $('.top-auto .grid__card-description').ellipsis( {lines: 3});
    $('.warranty .grid__card-description').ellipsis( {lines: 10});
    $('.reviews__item-text').ellipsis( {lines: 5});
    $('.stages__text').ellipsis( {lines: 4});
    $('.blog-posts__item-text').ellipsis( {lines: 5});
    $(window).on('load', function () {
        $('.top-auto .grid__card-description').ellipsis({lines: 3});
        $('.warranty .grid__card-description').ellipsis( {lines: 10});
        $('.reviews__item-text').ellipsis( {lines: 5});
        $('.stages__text').ellipsis( {lines: 4});
        $('.blog-posts__item-text').ellipsis( {lines: 5});
    });
    $(document).ajaxComplete(function () {
        $('.top-auto .grid__card-description').ellipsis({lines: 3});
        $('.warranty .grid__card-description').ellipsis( {lines: 10});
        $('.reviews__item-text').ellipsis( {lines: 5});
        $('.stages__text').ellipsis( {lines: 4});
        $('.blog-posts__item-text').ellipsis( {lines: 5});
    });
    $(window).resize(function () {
        $('.top-auto .grid__card-description').ellipsis({lines: 3});
        $('.warranty .grid__card-description').ellipsis( {lines: 10});
        $('.reviews__item-text').ellipsis( {lines: 5});
        $('.stages__text').ellipsis( {lines: 4});
        $('.blog-posts__item-text').ellipsis( {lines: 5});
    });
    //ellipsis

};
