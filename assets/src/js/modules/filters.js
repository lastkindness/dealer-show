export default () => {
/*range start*/

jQuery(".catalog__filter_item_range").each(function (index, item) {
    jQuery(item).slider({
        min: jQuery(item).closest('.catalog__filter_item_content').find('[data-slider-min]').data('slider-min'),
        max: jQuery(item).closest('.catalog__filter_item_content').find('[data-slider-max]').data('slider-max'),
        step: 1,
        values: [jQuery(item).data('from'),jQuery(item).data('to')],
        range: true,
        stop: function(event, ui) {
            jQuery(item).closest('.catalog__filter_item_content').find("input.catalog__filter_item_range_from").val(jQuery(item).slider("values",0));
            jQuery(item).closest('.catalog__filter_item_content').find("input.catalog__filter_item_range_to").val(jQuery(item).slider("values",1));
            generateFilterUrl('price=' + jQuery(item).slider("values",0) + '-' + jQuery(item).slider("values",1));
        },
        slide: function(event, ui){
            jQuery(item).closest('.catalog__filter_item_content').find("input.catalog__filter_item_range_from").val(jQuery(item).slider("values",0));
            jQuery(item).closest('.catalog__filter_item_content').find("input.catalog__filter_item_range_to").val(jQuery(item).slider("values",1));
        }
    });
});
/*range end*/

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

/*---------------- Инициализация фильтра -----------------*/
// $(document).on("click", "[data-filter]", function () {
//     generateFilterUrl($(this).attr("data-filter"), $(this).attr("type"));
//     return false;
// });
$(document).on("click", "[data-price]", function () {
    var priceMin = parseFloat($("[name*='min']").val());
    var priceMax = parseFloat($("[name*='max']").val());
    generateFilterUrl('price='+priceMin+'-'+priceMax);
    return false;
});
/*---------------- Инициализация фильтра -----------------*/

/*---------------- Генератор URL фильтра -----------------*/
function generateFilterUrl(filter, type) {
    if (type === undefined) {
        type = 'checkbox';
    }
    var newFilters = [];
    var searchFilter = true;
    // Текущий урл
    var _url   = window.location.pathname;
    var _get   = window.location.search;
    var regex  = /\/f\/(.*)/i;
    // Текущие фильтры
    var _filterUrl = _url.match(regex);
    if (_filterUrl) {
        // Переданный фильтр
        var filter = filter.split("=");
        var filterArr = _filterUrl[0].split('/');
        // Список текущих фильтров
        var _filters   = _filterArr[2].split(';');
        for (var i = 0; i < _filters.length; i++) {
            // Если текущий фильтр совпал с переданным, добавляем или заменяем значение
            var _filter = _filters[i].split("=");
            if (filter[0] == _filter[0]) {
                searchFilter = false;
                var _values = _filter[1].split(',');
                // Проверить существует ли значение в массиве
                var _index = _values.indexOf(filter[1]);
                if (_index != -1) {
                    _values.splice(_index, 1);
                } else {
                    _values.push(filter[1]);
                }
                // Если тип радио, всё равно удаляем значение
                if (type == 'radio') {
                    _values = [];
                    _values.push(filter[1]);
                }
                // Если цена, всё равно удаляем значение
                if (filter[0] == 'price') {
                    _values = [];
                    _values.push(filter[1]);
                }
                // Если в массиве что то осталось
                if (_values.length > 0) {
                    _values.sort();
                    _filter[1]  = $.unique(_values).join(',');
                    _filters[i] = _filter.join('=');
                    newFilters.push(_filters[i]);
                }
            } else {
                newFilters.push(_filters[i]);
            }
        }
        // Если текущий фильтр не совпал ни с одним из существующих
        if (searchFilter) {
            newFilters.push(filter.join('='));
        }
        // Если есть хоть какие то фильтры
        if (newFilters.length > 0) {
            newFilters.sort();
            var _newUrl = _url.slice(0, -_filterUrl[0].length)+'/f/'+newFilters.join(';')+'/';
        } else {
            var _newUrl = _url.slice(0, -_filterUrl[0].length)+'/';
        }
    } else {
        var _newUrl = _url+'f/'+filter+'/';
    }
    if($(window).width() > 1030) {
        if (_get.length > 0) {
            //window.location.href = _newUrl+_get;
        } else {
            //window.location.href = _newUrl;
        }
    } else {
        if (_get.length > 0) {
            history.pushState(null, null, _newUrl+_get);
        } else {
            history.pushState(null, null, _newUrl);
        }
        return false;
    }

}
/*---------------- Генератор URL фильтра -----------------*/


/*----------------- Форматирование цены ------------------*///
function priceFormat(n) {

    /* Фикс округления в JS */
    n = n * 100;
    n = n.toFixed(2);
    n = Math.round(n);
    n = n / 100;
    /* Фикс округления в JS */
    //console.log(n);
    return n.toFixed(0).replace(/./g, function (c, i, a) {
        return i && c !== "." && ((a.length - i) % 3 === 0) ? "&nbsp;" + c : c;
    });
}
/*----------------- Форматирование цены ------------------*///



};
