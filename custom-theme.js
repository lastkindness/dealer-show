(function ($) {

    initCarSelectManufacturer() ;
    initCarSelectModel() ;
    setTimeout(initCatalogType, 1000) ;
    runFilter() ;
    initLangSwitch() ;
    filterPaginationNews() ;
    filterPaginationReviews() ;
    filterPaginationPromotions() ;
    cartForms() ;
    cartTopForms() ;
    cartCalalogForms() ;
    cartSameCarForms() ;
    filterDropInput() ;

    setTimeout(initLangSwitch, 2000) ;

    function filterDropInput(){

        $('.catalog__filter_item_content .range-wrapper input').each(function() {

            $(this).focus(function() {

                $(this).val('') ;

            })

        })

    }

    function cartSameCarForms(){

        $('.top-auto .swiper-wrapper .grid__card .btn_light').each( function(){

            $(this).on('click', function(){

                var same_auto_link = $(this).attr('data-form-link') ;

                $('#modal-phone-cart-price form input[type="hidden"]').val(same_auto_link) ;

            })

        } )

    }

    function cartForms(){

        var url = window.location.href;

        $('.product__buttons .btn_light--price').on('click', function(){

            $('#modal-phone-cart-price form input[type="hidden"]').val(url) ;

        }) ;

        $('.product__buttons .btn_light--call').on('click', function(){

            $('#modal-phone-cart-call form input[type="hidden"]').val(url) ;

        }) ;

    }

    function cartTopForms(){

        $('.top-auto__grid .grid__card .grid__card-footer .btn_light').each( function(){

            $(this).on('click', function(){

                var top_auto_link = $(this).attr('data-form-link') ;

                $('#modal-phone-cart-price form input[type="hidden"]').val(top_auto_link) ;

            })

        } )

    }

    function cartCalalogForms(){

        $('.catalog__grid .grid .grid__card .btn_light').each( function(){

            $(this).on('click', function(){

                var catalog_auto_link = $(this).attr('data-form-link') ;

                $('#modal-phone-cart-price form input[type="hidden"]').val(catalog_auto_link) ;

            })

        } )

    }

    function initLangSwitch(){

        let langs = $('html').attr('lang') ;

        if( langs == 'uk' ){
            $('.header__lang .is-active-ru').removeClass('active') ;
            $('.header__lang .is-active-uk').addClass('active') ;
        }

        if( langs == 'ru_RU' ){
            $('.header__lang .is-active-ru').addClass('active') ;
            $('.header__lang .is-active-uk').removeClass('active') ;
        }

        $('.header__lang li').each( function(){
            $(this).on('click' , function(){

                $('.header__lang li').removeClass('active') ;

                $(this).addClass('active') ;

            })
        } )
    }

    function initCatalogType(){

        let defaultCatalogType = $('.catalog__filter_item_content .dropdown__header-item .text').data('value');

        let getVars = getUrlVars() ;

        catalogFilterByType( defaultCatalogType, getVars['location'], getVars['type'], getVars['car-brand'], getVars['car-model'], getVars['body-type'] ) ;

        $( '.catalog__filter_item_content .dropdown__dropdown .dropdown__item' ).on( 'click', function(){

            let catalogType = $(this).find('.dropdown__text').data("value");

            catalogFilterByType( catalogType ) ;

            $('.ajax-choose-holder .catalog__filter-wrapper').remove() ;

        } );

        $( '.page-title__dropdown .dropdown__dropdown .dropdown__item' ).on( 'click', function(){

            let scroll = false ;
            let paged = 1 ;
            showFilterResult( scroll, paged ) ;

        } );

    }

    function catalogFilterByType( type, inUkraine = '', typeGet = '', carBrand = '', carModel = '', bodyType = '' ){

        let ifBudgetpage = $('.page-title').attr('data-budget-car') ;

        var filterData = {
            'action' : 'catalogfiterbytype',
            'security': filter_params.ajax_nonce,
            'type' : type,
            'budget' : ifBudgetpage,
            'inUkraine': inUkraine,
            'carBrand': carBrand,
            'carModel': carModel,
            'typeGet': typeGet,
            'bodyType': bodyType
        }

        $.ajax({
            url: filter_params.ajaxurl,
            data: filterData,
            type: 'POST',
            success: function(data) {
                if (data) {

                    $('.filter-manufacturer-by-type .catalog__filter_item').remove() ;
                    $('.filter-model-by-manufacturer .catalog__filter_item').remove() ;
                    $('.filter-manufacturer-by-type').append($(data).filter('.manufacturer-insert-holder').html()) ;
                    $('.filters-by-type .catalog__filter_item').remove() ;
                    $('.filters-by-type').append($(data).filter('.filter-insert-holder').html()) ;
                    $('.catalog__grid .grid').remove() ;
                    $('.catalog__grid .pagination').remove() ;
                    $('.catalog__grid').append($(data).filter('.insert-cards').html()) ;

                    reInitCatalogDrops() ;
                    reInitCatalogCheckbox() ;
                    catalogModel() ;
                    filterPagination() ;
                    runFilterFromGet() ;

                    if( carBrand !== '' && typeGet !== '' ){
                        catalogModelGet( typeGet, carBrand, carModel ) ;
                    }

                }
            }
        });

    }

    function catalogModel(){

        $('.filter-manufacturer-by-type .catalog__filter_item .catalog__filter_item_content .catalog__filter_item_input').each( function(){

            $(this).on("click", function(){

                let ifBudgetpage = $('.page-title').attr('data-budget-car') ;

                $('.filter-manufacturer-by-type .catalog__filter_item .catalog__filter_item_content .catalog__filter_item_input input').removeClass('active') ;

                let singleCheckbox = $(this).find('input') ;

                singleCheckbox.addClass('active') ;

                let type = $('.catalog__filter_item_content .dropdown__header-item .text').data('value');

                if( !singleCheckbox.hasClass('active') ){

                    let selectedVal = singleCheckbox.val() ;

                    $('.filter-model-by-manufacturer .catalog__filter_item[data-model-parrent="'+selectedVal+'"]').remove() ;

                }else{

                    let selectedVal = singleCheckbox.val() ;

                    var filterData = {
                        'action' : 'catalogmodel',
                        'security': filter_params.ajax_nonce,
                        'manufacturer' : selectedVal,
                        'type' : type,
                        'budget' : ifBudgetpage
                    }

                    $.ajax({
                        url: filter_params.ajaxurl,
                        data: filterData,
                        type: 'POST',
                        success: function(data) {
                            if (data) {

                                $('.filter-model-by-manufacturer .catalog__filter_item').remove() ;
                                $('.filter-model-by-manufacturer').append(data) ;

                                reInitCatalogDropsModel() ;
                                reInitCatalogCheckboxModel() ;

                            }
                        }
                    })

                }

            })

        } )

    }

    function catalogModelGet( getType = '', getBrand = '', getModel = '' ){

        console.log( getType ) ;
        console.log( getBrand ) ;

        var filterData = {
            'action' : 'catalogmodel',
            'security': filter_params.ajax_nonce,
            'manufacturer' : getBrand,
            'type' : getType,
            'getModel' : getModel,
        }

        $.ajax({
            url: filter_params.ajaxurl,
            data: filterData,
            type: 'POST',
            success: function(data) {
                if (data) {

                    $('.filter-model-by-manufacturer .catalog__filter_item').remove() ;
                    $('.filter-model-by-manufacturer').append(data) ;

                    console.log( data ) ;

                    reInitCatalogDropsModel() ;
                    reInitCatalogCheckboxModel() ;
                    runFilterFromGet() ;

                }
            }
        })

    }

    function reInitCatalogCheckboxModel(){

        $('.filter-model-by-manufacturer .catalog__filter_item_content .catalog__filter_item_checkbox input[type=checkbox]').each( function(){

            $(this).on('click', function(){

                $(this).toggleClass("active");

            } );

        } )

    }

    function reInitCatalogDropsModel(){

        $(".filter-model-by-manufacturer .catalog__filter_item_title").each(function(){

            $(this).on('click', function (e) {
                $(this).closest(".catalog__filter_item").toggleClass("open");
                $(this).siblings(".catalog__filter_item_content").toggleClass("close");
                e.stopPropagation();
            });

        })

    }

    function reInitCatalogCheckbox(){
        //checkbox checked
        if ($(".checkbox-wrapper").length) {
            $(".checkbox-wrapper input[type=checkbox]").on('click', function(){
                $(this).toggleClass("active");
            });
        }
        $(".catalog__filter_item_content .catalog__filter_item_checkbox input[type=checkbox]").on('click', function(){
            $(this).toggleClass("active");
        });
        //checkbox checked

        // card__info range
        if ($(".catalog__filter_item_content").length) {
            var rangeFirst = $(".catalog__filter_item_range span:first-of-type").css("left");
            var rangeLast = $(".catalog__filter_item_range span:last-of-type").css("left");
        }
        // card__info range

        // card__info-color checked
        if ($(".card__info-color .catalog__filter_item_checkbox").length) {
            $(".card__info-color .catalog__filter_item_checkbox input[type=checkbox]").on('click', function(){
                if($(this).is(":checked")) {
                    $(".card__info-color .catalog__filter_item_checkbox input[type=checkbox]").prop('checked', false);
                    $(".card__info-color .catalog__filter_item_input").removeClass("checked");
                    $(this).prop('checked', true);
                    $(this).closest(".catalog__filter_item_input").addClass("checked");
                }
            });
        }
        // card__info-color checked
        if ($("a.catalog__filter_item_checkbox").length) {
            $("a.catalog__filter_item_checkbox").on('click', function(){
                // location.href = $(this).attr("href");
                window.open($(this).attr("href"));
            });
        }
        // catalog__info-color checked
        if ($(".catalog__filter .catalog__filter_item_content.color .catalog__filter_item_input input").length) {
            $(".catalog__filter .catalog__filter_item_content.color .catalog__filter_item_input input[type=checkbox]").on('click', function(){
                if($(this).is(":checked")) {
                    $(this).closest(".catalog__filter_item_input").addClass("checked");
                } else {
                    $(this).closest(".catalog__filter_item_input").removeClass("checked");
                }
            });
        }
        // catalog__info-color checked
        //mobile filters open
        $('.catalog .btn.sort').click(function() {
            $(".catalog__sort" ).toggleClass('mobile-active');
        });
        $('.catalog .btn.filter').click(function(e) {
            e.stopPropagation();
            e.preventDefault();
            $("body" ).addClass('mobile-filter');
            $(".catalog__filter" ).addClass('mobile-active');
            $("body").addClass('overflow');
        });
        $('.catalog__filter .back').click(function(e) {
            e.stopPropagation();
            e.preventDefault();
            $("body" ).removeClass('mobile-filter');
            $(".catalog__filter" ).removeClass('mobile-active');
            $("body").removeClass('overflow');
        });
        //mobile filters open
    }

    function reInitCatalogDrops(){
        /*filter close-open start*/
        if ($(window).width() <= 768) {
            $(".catalog__filter").removeClass("open");
            $(".main-item > .catalog__filter_item").removeClass("open");
            $(".catalog__filter .catalog__filter_item > .catalog__filter_item_content").addClass("close");
        }
        if ($(".catalog__filter_item").length) {
            if ($(window).width() <= 768) {
                $(".catalog__filter_item_title").on('click', function (e) {
                    $(this).closest(".catalog__filter_item").toggleClass("open");
                    $(this).siblings(".catalog__filter_item_content").toggleClass("close");
                    e.stopPropagation();
                });
                $(".catalog__filter .main_title").on('click', function (e) {
                    if ($(window).width() <= 768) {
                        $(".catalog__filter").toggleClass("open");
                        e.stopPropagation();
                    }
                });
            } else {
                $(".catalog__filter_item_title:not(.main_title)").on('click', function (e) {
                    //console.log(e.target);
                    $(this).closest(".catalog__filter_item").toggleClass("open");
                    $(this).siblings(".catalog__filter_item_content").toggleClass("close");
                    e.stopPropagation();
                });
            }
        }
        if ($(".card__sidebar-item").length) {
            $(".card__sidebar-item_title").on('click', function () {
                $(this).closest(".card__sidebar-item").toggleClass("open");
                $(this).siblings(".card__sidebar-item_content").toggleClass("close");
            });
        }
        /*filter close-open end*/
    }

    function runFilter( ){
        $('.catalog__filter_button .btn').on('click', function(){

            let selectedValues = [] ;

            $('.catalog__filter_item_content .catalog__filter_item_input .active').each(function(){
                let activeCheckBox = $(this).val();

                selectedValues.push(activeCheckBox);

            });

            var filterData = {
                'action' : 'runcatalogfilter',
                'security': filter_params.ajax_nonce,
                'selectedvalues' : selectedValues
            }

            $.ajax({
                url: filter_params.ajaxurl,
                data: filterData,
                type: 'POST',
                success: function(data) {
                    if (data) {

                        $('.ajax-choose-holder .catalog__filter-wrapper').remove() ;
                        $('.ajax-choose-holder').append($(data).filter('.insert-choose-filter').html()) ;
                        removeFilter() ;

                    }
                }
            });

            let scroll = true ;
            let paged = 1 ;
            showFilterResult( scroll, paged ) ;

        });
    }

    function runFilterFromGet(){

        let selectedValues = [] ;

        $('.catalog__filter_item_content .catalog__filter_item_input .active').each(function(){
            let activeCheckBox = $(this).val();

            selectedValues.push(activeCheckBox);

        });

        var filterData = {
            'action' : 'runcatalogfilter',
            'security': filter_params.ajax_nonce,
            'selectedvalues' : selectedValues
        }

        $.ajax({
            url: filter_params.ajaxurl,
            data: filterData,
            type: 'POST',
            success: function(data) {
                if (data) {

                    $('.ajax-choose-holder .catalog__filter-wrapper').remove() ;
                    $('.ajax-choose-holder').append($(data).filter('.insert-choose-filter').html()) ;
                    removeFilter() ;

                }
            }
        });

        let scroll = false ;
        let paged = 1 ;
        showFilterResult( scroll, paged ) ;

    }

    function removeFilter(){

        $('.catalog__filter-choose-items .btn .icon-close').each(function(){

            $(this).on('click', function (e) {

                if( $(this).hasClass("parrent-man") ){

                    let removeTermId = $(this).attr("data-attr-term") ;
                    $(this).parent().remove() ;

                    $('.catalog__filter-choose-items .btn .icon-close[data-attr-term-parrent="'+removeTermId+'"]').each(function(){
                        $(this).parent().remove() ;
                    });

                    $('.catalog__filter_item_checkbox').each(function(){

                        $(this).find('.catalog__filter_item_input input[value="'+removeTermId+'"]').removeClass('active') ;

                    }) ;

                    $('.filter-model-by-manufacturer .catalog__filter_item[data-model-parrent="'+removeTermId+'"]').remove() ;

                }else{

                    let removeTermId = $(this).attr("data-attr-term") ;
                    $(this).parent().remove() ;

                    $('.catalog__filter_item_checkbox').each(function(){

                        $(this).find('.catalog__filter_item_input input[value="'+removeTermId+'"]').removeClass('active') ;

                    }) ;

                }

                if( $('.ajax-choose-holder .catalog__filter-choose-items .btn').length == 0 ){
                    $('.ajax-choose-holder .catalog__filter-wrapper').remove() ;
                }

                let scroll = false ;
                let paged = 1 ;
                showFilterResult( scroll, paged ) ;

            });

        });

    }

    function showFilterResult( scroll, paged ){

        let typeTransport = $('.catalog__filter_item_content .dropdown__header-item .text').data('value');

        let priceFrom = $( '.catalog__filter_item_range_from_price' ).val() ;
        let priceTo = $( '.catalog__filter_item_range_to_price' ).val() ;

        let yearFrom = $( '.catalog__filter_item_range_from_year' ).val() ;
        let yearTo = $( '.catalog__filter_item_range_to_year' ).val() ;

        console.log( yearFrom ) ;
        console.log( yearTo ) ;

        let ifBudgetpage = $('.page-title').attr('data-budget-car') ;

        let topSort = $('.page-title__dropdown .dropdown__header-item .text').data('value');

        if( typeTransport == 'cars' ){

            let manufacturerCars = [] ;

            $('.checkbox-manufacturer-cars .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                manufacturerCars.push(selectedVal);

            } );

            let modelCars = [] ;

            $('.checkbox-model-cars .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                modelCars.push(selectedVal);

            } );

            let cuzovCars = [] ;

            $('.checkbox-car-cuzov .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                cuzovCars.push(selectedVal);

            } );

            let locationCars = [] ;

            $('.checkbox-car-location .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                locationCars.push(selectedVal);

            } );

            let fuelCars = [] ;

            $('.checkbox-car-fuel .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                fuelCars.push(selectedVal);

            } );

            let volumeCars = [] ;

            $('.checkbox-car-volume .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                volumeCars.push(selectedVal);

            } );

            let transmissionCars = [] ;

            $('.checkbox-car-transmission .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                transmissionCars.push(selectedVal);

            } );

            let driveCars = [] ;

            $('.checkbox-car-drive .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                driveCars.push(selectedVal);

            } );

            var filterData = {
                'action' : 'showfilterresult',
                'security': filter_params.ajax_nonce,
                'typetransport' : typeTransport,
                'pricefrom' : priceFrom,
                'priceto' : priceTo,
                'yearfrom' : yearFrom,
                'yearto' : yearTo,
                'manufacturercars' : manufacturerCars,
                'modelrcars' : modelCars,
                'cuzovcars' : cuzovCars,
                'locationcars' : locationCars,
                'fuelcars' : fuelCars,
                'volumecars' : volumeCars,
                'transmissioncars' : transmissionCars,
                'drivecars' : driveCars,
                'topsort' : topSort,
                'currpage' : paged,
                'budget' : ifBudgetpage
            }

        }

        if( typeTransport == 'mototechnics' ){

            let manufacturerCars = [] ;

            $('.checkbox-manufacturer-mototechnics .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                manufacturerCars.push(selectedVal);

            } );

            let modelCars = [] ;

            $('.checkbox-model-mototechnics .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                modelCars.push(selectedVal);

            } );

            let locationCars = [] ;

            $('.checkbox-mototechnics-location .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                locationCars.push(selectedVal);

            } );

            var filterData = {
                'action' : 'showfilterresult',
                'security': filter_params.ajax_nonce,
                'typetransport' : typeTransport,
                'pricefrom' : priceFrom,
                'priceto' : priceTo,
                'yearfrom' : yearFrom,
                'yearto' : yearTo,
                'manufacturercars' : manufacturerCars,
                'modelrcars' : modelCars,
                'locationcars' : locationCars,
                'topsort' : topSort,
                'currpage' : paged
            }

        }

        if( typeTransport == 'electrocars' ){

            let manufacturerCars = [] ;

            $('.checkbox-manufacturer-electrocars .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                manufacturerCars.push(selectedVal);

            } );

            let modelCars = [] ;

            $('.checkbox-model-electrocars .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                modelCars.push(selectedVal);

            } );

            let cuzovCars = [] ;

            $('.checkbox-electrocars-cuzov .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                cuzovCars.push(selectedVal);

            } );

            let locationCars = [] ;

            $('.checkbox-electrocars-location .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                locationCars.push(selectedVal);

            } );

            let driveCars = [] ;

            $('.checkbox-electrocars-drive .catalog__filter_item_input').find('.active').each( function(){

                let selectedVal = $(this).val() ;

                driveCars.push(selectedVal);

            } );

            var filterData = {
                'action' : 'showfilterresult',
                'security': filter_params.ajax_nonce,
                'typetransport' : typeTransport,
                'pricefrom' : priceFrom,
                'priceto' : priceTo,
                'yearfrom' : yearFrom,
                'yearto' : yearTo,
                'manufacturercars' : manufacturerCars,
                'modelrcars' : modelCars,
                'cuzovcars' : cuzovCars,
                'locationcars' : locationCars,
                'drivecars' : driveCars,
                'topsort' : topSort,
                'currpage' : paged
            }

        }

        $.ajax({
            url: filter_params.ajaxurl,
            data: filterData,
            type: 'POST',
            success: function(data) {
                if (data) {

                    $('.catalog__grid .grid').remove() ;
                    $('.catalog__grid .pagination').remove() ;
                    $('.catalog__grid').append($(data).filter('.insert-cards').html()) ;
                    $('.catalog__filter-choose-matched').empty() ;
                    $('.catalog__filter-choose-matched').append($(data).filter('.choose-number').text()) ;

                    if( scroll ){

                        $('html, body').animate({
                            scrollTop: $("#page-title-scroll").offset().top
                        }, 1000);

                    }

                    cartCalalogForms() ;
                    filterPagination() ;

                }
            }
        });

    }

    function filterPagination(){

        let scroll = true ;

        $('.pagination-cars .pagination__list li').not('.next', '.prev', '.dots-not-click').each( function(){

            $(this).on('click', function(){

                let goPage = $(this).find('span').attr('data-attr-page');

                let paged = goPage ;
                showFilterResult( scroll, paged ) ;

            });

        });

        $('.pagination-cars .pagination__list li.next').on('click', function(){

            let goPage = $('.pagination-cars .pagination__list li .active').attr('data-attr-page');
            let goNextPage = parseInt( goPage ) + 1 ;

            let paged = goNextPage ;
            showFilterResult( scroll, paged ) ;

        });

        $('.pagination-cars .pagination__list li.prev').on('click', function(){

            let goPage = $('.pagination-cars .pagination__list li .active').attr('data-attr-page');
            let goPrevPage = parseInt( goPage ) - 1 ;

            let paged = goPrevPage ;
            showFilterResult( scroll, paged ) ;

        });

    }

    function filterPaginationNews(){

        $('.pagination-news .pagination__list li').not('.next', '.prev', '.dots-not-click').each( function(){

            $(this).on('click', function(){

                let goPage = $(this).find('span').attr('data-attr-page');

                let paged = goPage ;
                showNewsPage( paged ) ;

            });

        });

        $('.pagination-news .pagination__list li.next').on('click', function(){

            let goPage = $('.pagination-news .pagination__list li .active').attr('data-attr-page');
            let goNextPage = parseInt( goPage ) + 1 ;

            let paged = goNextPage ;
            showNewsPage( paged ) ;

        });

        $('.pagination-news .pagination__list li.prev').on('click', function(){

            let goPage = $('.pagination-news .pagination__list li .active').attr('data-attr-page');
            let goPrevPage = parseInt( goPage ) - 1 ;

            let paged = goPrevPage ;

            showNewsPage( paged ) ;

        });

    }

    function showNewsPage( paged ){

        var filterData = {
            'action' : 'newspaged',
            'security': filter_params.ajax_nonce,
            'page' : paged
        }

        $.ajax({
            url: filter_params.ajaxurl,
            data: filterData,
            type: 'POST',
            success: function(data) {
                if (data) {

                    $('.blog-posts__wrapper .blog-posts__grid').remove() ;
                    $('.blog-posts__wrapper').append(data) ;

                    filterPaginationNews() ;

                }
            }
        });

    }

    function filterPaginationReviews(){

        $('.pagination-reviews .pagination__list li').not('.next', '.prev', '.dots-not-click').each( function(){

            $(this).on('click', function(){

                let goPage = $(this).find('span').attr('data-attr-page');

                let paged = goPage ;
                showReviewsPage( paged ) ;

            });

        });

        $('.pagination-reviews .pagination__list li.next').on('click', function(){

            let goPage = $('.pagination-reviews .pagination__list li .active').attr('data-attr-page');
            let goNextPage = parseInt( goPage ) + 1 ;

            let paged = goNextPage ;
            showReviewsPage( paged ) ;

        });

        $('.pagination-reviews .pagination__list li.prev').on('click', function(){

            let goPage = $('.pagination-reviews .pagination__list li .active').attr('data-attr-page');
            let goPrevPage = parseInt( goPage ) - 1 ;

            let paged = goPrevPage ;

            showReviewsPage( paged ) ;

        });

    }

    function showReviewsPage( paged ){

        var filterData = {
            'action' : 'reviewspaged',
            'security': filter_params.ajax_nonce,
            'page' : paged
        }

        $.ajax({
            url: filter_params.ajaxurl,
            data: filterData,
            type: 'POST',
            success: function(data) {
                if (data) {

                    $('.reviews_list .container .reviews__wrapper').remove() ;
                    $('.reviews_list .container').append(data) ;

                    filterPaginationReviews() ;

                }
            }
        });

    }

    function filterPaginationPromotions(){

        $('.pagination-promotion .pagination__list li').not('.next', '.prev', '.dots-not-click').each( function(){

            $(this).on('click', function(){

                let goPage = $(this).find('span').attr('data-attr-page');

                let paged = goPage ;
                showPromotionsPage( paged ) ;

            });

        });

        $('.pagination-promotion .pagination__list li.next').on('click', function(){

            let goPage = $('.pagination-promotion .pagination__list li .active').attr('data-attr-page');
            let goNextPage = parseInt( goPage ) + 1 ;

            let paged = goNextPage ;
            showPromotionsPage( paged ) ;

        });

        $('.pagination-promotion .pagination__list li.prev').on('click', function(){

            let goPage = $('.pagination-promotion .pagination__list li .active').attr('data-attr-page');
            let goPrevPage = parseInt( goPage ) - 1 ;

            let paged = goPrevPage ;

            showPromotionsPage( paged ) ;

        });

    }

    function showPromotionsPage( paged ){

        var filterData = {
            'action' : 'promotionpaged',
            'security': filter_params.ajax_nonce,
            'page' : paged
        }

        $.ajax({
            url: filter_params.ajaxurl,
            data: filterData,
            type: 'POST',
            success: function(data) {
                if (data) {

                    $('.promotions .container .promotions__wrapper').remove() ;
                    $('.promotions .container').append(data) ;

                    filterPaginationPromotions() ;

                }
            }
        });

    }

    function getUrlVars(){
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    /*Home JS*/

    function initCarSelectManufacturer(){

        $('.car-selection__form #car-type').change( function(){

            let type = $(this).val() ;

            var filterData = {
                'action' : 'homegetcar',
                'security': filter_params.ajax_nonce,
                'type' : type
            }

            $.ajax({
                url: filter_params.ajaxurl,
                data: filterData,
                type: 'POST',
                success: function(data) {
                    if (data) {

                        $('.column__find-cars .input-container__car-brand').remove() ;
                        $('.column__find-cars .input-container__car-model').remove() ;
                        $('.column__find-cars').append(data) ;

                        $(".column__find-cars select").each(function (index, item) {
                            var text = $(item).data("placeholder");
                            $(item).select2({
                                placeholder: text,
                                minimumResultsForSearch: -1
                            });
                        });

                        initCarSelectModel() ;

                    }
                }
            });

        } )

    }

    function initCarSelectModel(){

        $('.car-selection__form #car-brand').change( function(){

            let type = $('.car-selection__form #car-type').val() ;
            let brand = $(this).val() ;

            var filterData = {
                'action' : 'homegetmodel',
                'security': filter_params.ajax_nonce,
                'brand' : brand,
                'type' : type
            }

            $.ajax({
                url: filter_params.ajaxurl,
                data: filterData,
                type: 'POST',
                success: function(data) {
                    if (data) {

                        $('.column__find-cars .input-container__car-model .car-model-ajax').remove() ;
                        $('.column__find-cars .input-container__car-model').append(data) ;

                        $(".column__find-cars select").each(function (index, item) {
                            var text = $(item).data("placeholder");
                            $(item).select2({
                                placeholder: text,
                                minimumResultsForSearch: -1
                            });
                        });

                    }
                }
            });

        } )

    }

})(jQuery);
