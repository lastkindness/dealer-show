<?php
/*
 * Template name: Front Catalog
 */

get_header('front'); ?>
<section class="text-content" id="text-content">
    <div class="container">
        <div class="text-content__wrapper">
            <h1 class="h3 text-content__title">Заголовок с названием сео-текста</h1>
            <div class="text-content__container">
                <div class="text-content__item">
                    <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например</p>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.</p>
                    <p>Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker,</p>
                    <ul>
                        <li><strong>Европейский тип</strong>(неширокие агрегаты выше 1,8 метра).</li>
                        <li><strong>Азиатский вариант</strong>средних размеров.</li>
                        <li><strong>Американский тип</strong>Отличается гораздо большими габаритами ширины и высоты, чем обычные модели.</li>
                    </ul>
                    <h4>Стандартными габаритами для таких моделей считаются:</h4>
                    <ol>
                        <li>высота от 170 сантиметров до 1,9 м;</li>
                        <li>ширина до 1 метра;</li>
                        <li>глубина от 60 до 80 сантиметров;</li>
                        <li>объём может варьироваться в рамках от 350 до 800 куб/м.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-title">
    <div class="container">
        <div class="page-title__wrapper">
            <div class="page-title__dropdown">
                <span class="dropdown__title">Cортировать:</span>
                <div class="dropdown js__dropdown">
                    <div class="dropdown__header">
                        <span class="dropdown__header-item">
                            <span class="text" data-value="rating">по рейтингу</span>
                            <span class="icon icon-arr_down2"></span>
                        </span>
                    </div>
                    <ul class="dropdown__dropdown">
                        <li id="price-more" class="dropdown__item">
                            <span class="dropdown__text" data-value="price-more">цена от большего к меньшему</span>
                        </li>
                        <li id="price-less" class="dropdown__item">
                            <span class="dropdown__text" data-value="price-less">цена от меньшего к большему</span>
                        </li>
                        <li id="green" class="dropdown__item disabled">
                            <span class="dropdown__text" data-value="rating">по рейтингу</span>
                        </li>
                        <li id="green" class="dropdown__item">
                            <span class="dropdown__text" data-value="ABC">по алфавиту</span>
                        </li>
                    </ul>
                </div>
            </div>
            <h2 class="title h2">Каталог</h2>
            <ul class="page-title__breadcrumbs breadcrumbs">
                <li class="breadcrumbs__li">
                    <a class="breadcrumbs__link" href="#">Главная</a>
                </li>
                <li class="breadcrumbs__li active">
                    <a class="breadcrumbs__link" href="#">Каталог</a>
                </li>
                <li class="breadcrumbs__li">
                    <a class="breadcrumbs__link" href="#">Карточка товара</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="catalog">
    <div class="container">
        <div class="catalog__wrapper">
            <aside class="catalog__filter">
<!--                если ни один из фильтров не выбран - этот блок (catalog__filter-wrapper первый) не выводится-->
                <div class="catalog__filter-wrapper">
                    <div class="catalog__filter-choose">
                        <div class="catalog__filter-choose-head">
                            <div class="catalog__filter-choose-title h3">Вы выбрали:</div>
                        </div>
                        <div class="catalog__filter-choose-items">
                            <div class="btn btn_secondary"><span>Под заказ</span><span class="icon icon-close"></span></div>
                            <div class="btn btn_secondary"><span>Автомобили</span><span class="icon icon-close"></span></div>
                        </div>
                        <div class="catalog__filter-choose-matched">Подобрано 45 из 362</div>
                        <div class="catalog__filter-choose-clear">Очистить всё</div>
                    </div>
                </div>
                <div class="catalog__filter-wrapper">
                    <div class="catalog__filter-head">
                        <div class="catalog__filter-title h3">Фильтры</div>
                    </div>
                    <div class="catalog__filter_item">
                        <div class="catalog__filter_item_title filter-title">
                            <div class="plus icon icon-up"></div>
                            <div class="filter-subtitle"><span>Тип транспортного средства</span></div>
                        </div>
                        <div class="catalog__filter_item_content close">
                            <div class="dropdown js__dropdown">
                                <div class="dropdown__header">
                                    <span class="dropdown__header-item">
                                        <span class="text" data-value="all">Все авто</span>
                                        <span class="icon icon-arr_down2"></span>
                                    </span>
                                </div>
                                <ul class="dropdown__dropdown">
                                    <li id="all-vehicles" class="dropdown__item disabled">
                                        <span class="dropdown__text" data-value="all">Все авто</span>
                                    </li>
                                    <li id="сars-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-value="сars">Легковые автомобили</span>
                                    </li>
                                    <li id="motor-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-value="motor">Мототранспортные средства</span>
                                    </li>
                                    <li id="trucks-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-value="trucks">Грузовые автомобили</span>
                                    </li>
                                    <li id="buses-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-value="buses">Автобусы</span>
                                    </li>
                                    <li id="trailers-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-value="trailers">Автодома</span>
                                    </li>
                                    <li id="hindcarriage-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-value="hindcarriage">Прицепы</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__filter_item">
                        <div class="catalog__filter_item_title filter-title">
                            <div class="plus icon icon-up"></div>
                            <div class="filter-subtitle"><span>Стоимость, $</span></div>
                        </div>
                        <div class="catalog__filter_item_content close">
                            <div class="range">
                                <div class="range-wrapper">
                                    <div class="catalog__filter_item_range_input">
                                        <span>от</span>
                                        <input type="text" data-slider-min="0" data-slider-max="100000" data-value="0"
                                               value="0" readonly
                                               class="catalog__filter_item_range_from">
                                    </div>
                                    <div class="catalog__filter_item_range_input">
                                        <span>до</span>
                                        <input type="text" data-slider-min="0" data-slider-max="100000" data-value="100000" value="100000" readonly
                                               class="catalog__filter_item_range_to">
                                    </div>
                                </div>
                            </div>
                            <div data-from="0" data-to="100000" class="catalog__filter_item_range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__filter_item">
                        <div class="catalog__filter_item_title filter-title">
                            <div class="plus icon icon-up"></div>
                            <div class="filter-subtitle"><span>Год выпуска</span></div>
                        </div>
                        <div class="catalog__filter_item_content close">
                            <div class="range">
                                <div class="range-wrapper">
                                    <div class="catalog__filter_item_range_input">
                                        <span>от</span>
                                        <input type="text" data-slider-min="1990" data-slider-max="2021"
                                               data-value="1990"
                                               value="1990" readonly
                                               class="catalog__filter_item_range_from">
                                    </div>
                                    <div class="catalog__filter_item_range_input">
                                        <span>до</span>
                                        <input type="text" data-slider-min="1990" data-slider-max="2021" data-value="2021" value="2021" readonly
                                               class="catalog__filter_item_range_to">
                                    </div>
                                </div>
                            </div>
                            <div data-from="1990" data-to="2021" class="catalog__filter_item_range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__filter_item">
                        <div class="catalog__filter_item_title filter-title">
                            <div class="plus icon icon-up"></div>
                            <div class="filter-subtitle"><span>Производитель</span></div>
                        </div>
                        <div class="catalog__filter_item_content close">
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="acura" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="acura">Acura<span class="grey">(<span class="number">578</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="alfa-romeo" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="alfa-romeo">Alfa Romeo<span class="grey">(<span
                                                class="number">234</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="aston-martin" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="aston-martin">Aston Martin<span class="grey">(<span
                                                class="number">578</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="bentley" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="bentley">Bentley<span class="grey">(<span class="number">422</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="audi" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="audi">Audi<span class="grey">(<span class="number">124</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="bmw" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="bmw">BMW<span class="grey">(<span class="number">786</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="Volkswagen" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="Volkswagen">Volkswagen<span class="grey">(<span
                                                class="number">2678</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="ford" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="ford">Ford<span class="grey">(<span class="number">458</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="honda" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="honda">Honda<span class="grey">(<span class="number">975</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="hyundai" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="hyundai">Hyundai<span class="grey">(<span class="number">346</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="kia" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="kia">Kia<span class="grey">(<span class="number">2688</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="mazda" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="mazda">Mazda<span class="grey">(<span class="number">579</span>)
                                        </span></label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__filter_item">
                        <div class="catalog__filter_item_title filter-title">
                            <div class="plus icon icon-up"></div>
                            <div class="filter-subtitle"><span>Цвет</span></div>
                        </div>
                        <div class="catalog__filter_item_content color close">
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input type="checkbox" id="black-color">
                                    <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/color2.jpg)" class="checkbox"></div>
                                </div>
                                <label for="black-color">Чёрный<span class="grey">(<span class="number">64</span>)</span></label><a href="#link-for-seo" class="hide"></a>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input type="checkbox" id="white-color">
                                    <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/color3.jpg)" class="checkbox"></div>
                                </div>
                                <label for="white-color">Белый<span class="grey">(<span class="number">33</span>)
                                    </span></label><a href="#link-for-seo" class="hide"></a>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input type="checkbox" id="space-gray-color">
                                    <div style="background-image: url(<?php echo get_template_directory_uri();
                                    ?>/assets/img/color4.jpg)" class="checkbox"></div>
                                </div>
                                <label for="space-gray-color">Хром<span class="grey">(<span class="number">107</span>)
                                    </span></label><a href="#link-for-seo" class="hide"></a>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input type="checkbox" id="blue-color">
                                    <div style="background-image: url(<?php echo get_template_directory_uri();
                                    ?>/assets/img/color5.jpg)" class="checkbox"></div>
                                </div>
                                <label for="blue-color">Голубой<span class="grey">(<span class="number">64</span>)</span></label><a href="#link-for-seo" class="hide"></a>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input type="checkbox" id="green-color">
                                    <div style="background-image: url(<?php echo get_template_directory_uri();
                                    ?>/assets/img/color6.jpg)" class="checkbox"></div>
                                </div>
                                <label for="green-color">Зеленый<span class="grey">(<span class="number">23</span>)
                                    </span></label><a href="#link-for-seo" class="hide"></a>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input type="checkbox" id="indigo-color">
                                    <div style="background-image: url(<?php echo get_template_directory_uri();
                                    ?>/assets/img/color7.jpg)" class="checkbox"></div>
                                </div>
                                <label for="indigo-color">Индиго<span class="grey">(<span class="number">34</span>)
                                    </span></label><a href="#link-for-seo" class="hide"></a>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input type="checkbox" id="pink-color">
                                    <div style="background-image: url(<?php echo get_template_directory_uri();
                                    ?>/assets/img/color8.jpg)" class="checkbox"></div>
                                </div>
                                <label for="pink-color">Розовый<span class="grey">(<span class="number">357</span>)
                                    </span></label><a href="#link-for-seo" class="hide"></a>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input type="checkbox" id="red-color">
                                    <div style="background-image: url(<?php echo get_template_directory_uri();
                                    ?>/assets/img/color9.jpg)" class="checkbox"></div>
                                </div>
                                <label for="red-color">Красный<span class="grey">(<span class="number">34</span>)
                                    </span></label><a href="#link-for-seo" class="hide"></a>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input type="checkbox" id="violet-color">
                                    <div style="background-image: url(<?php echo get_template_directory_uri();
                                    ?>/assets/img/color10.jpg)" class="checkbox"></div>
                                </div>
                                <label for="violet-color">Фиолетовый<span class="grey">(<span
                                            class="number">33</span>)</span></label><a href="#link-for-seo"
                                                                                       class="hide"></a>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input type="checkbox" id="yellow-color">
                                    <div style="background-image: url(<?php echo get_template_directory_uri();
                                    ?>/assets/img/color1.jpg)" class="checkbox"></div>
                                </div>
                                <label for="yellow-color">Желтый<span class="grey">(<span class="number">76</span>)
                                    </span></label><a href="#link-for-seo" class="hide"></a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__filter_item">
                        <div class="catalog__filter_item_title filter-title">
                            <div class="plus icon icon-up"></div>
                            <div class="filter-subtitle"><span>Тип кузова</span></div>
                        </div>
                        <div class="catalog__filter_item_content close">
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="all-body-type" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="all-body-type">Все<span class="grey">(<span class="number">3357</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="sedan-body-type" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="sedan-body-type">Седан<span class="grey">(<span
                                                class="number">785</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="hatchback-body-type" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="hatchback-body-type">Хэтчбек<span class="grey">(<span
                                                class="number">452</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="crossover-body-type" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="crossover-body-type">Кроссовер<span class="grey">(<span
                                                class="number">352</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="station-body-type" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="station-body-type">Универсал<span class="grey">(<span
                                                class="number">876</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="minivan-body-type" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="minivan-body-type">Минивен<span class="grey">(<span
                                                class="number">134</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="pickup-body-type" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="pickup-body-type">Пикап<span class="grey">(<span
                                                class="number">453</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="crossover-body-type" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="crossover-body-type">Kроссовер<span class="grey">(<span
                                                class="number">632</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__filter_item">
                        <div class="catalog__filter_item_title filter-title">
                            <div class="plus icon icon-up"></div>
                            <div class="filter-subtitle"><span>Обьем двигателя</span></div>
                        </div>
                        <div class="catalog__filter_item_content close">
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="extra-small-engine" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="extra-small-engine">до 1,1 л<span class="grey">(<span
                                                class="number">785</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="small-engine" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="small-engine">от 1,1 до 1,8 л<span class="grey">(<span
                                                class="number">452</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="medium-engine" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="medium-engine">от 1,8 до 3,5 л<span class="grey">(<span
                                                class="number">352</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="big-engine" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="big-engine">от 3,5 до 5,0 л<span class="grey">(<span
                                                class="number">876</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                            <div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="supreme-engine" type="checkbox">
                                    <div class="checkbox"></div>
                                    <label for="supreme-engine">выше 5,0 л<span class="grey">(<span
                                                class="number">134</span>)
                                        </span></label><a
                                        href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__filter_button">
                        <button class="btn btn_fullwidth">Применить фильтры</button>
                    </div>
                </div>
            </aside>
            <div class="catalog__grid">
                <div class="grid">
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4.jpg"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">TOYOTA Camry</h4></a>
                                        <p class="grid__card-description">
                                            Автомобиль куплен на аукционе в США.Авто растаможено и находится на территории Украины
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">39 999 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">TOYOTA Camry</h4></a>
                                    <p class="grid__card-description">
                                        Автомобиль куплен на аукционе в США.Авто растаможено и находится на территории Украины
                                    </p>
                                    <span class="grid__card-price">39 999 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5.jpg"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Mercedes-Benz GLA</h4></a>
                                        <p class="grid__card-description">
                                            Куплений в офіційному дилерському центрі Соллі Плюс. Максимальна комплектація. Лакофарбове покриття: полярно-білий. Інтеграція смартфона CarPlay і Android Auto. Система безключового доступу. Електричне регулювання сидіння водія з функцією пам'яті. 8G-DCT коробка передач. Цифровий дисплей приладів. Оббивка стелі тканиною чорного кольору. Панорамний стелю. Світлодіодні фари High Performance. Система обігріву сидінь водія і переднього пасажира. Система утримання полоси.Комфортная підсвічування салону. Паркувальний пакет з відеокамерою 360 градусів. Система контролю за станом водія. Активна система полегшення паркування з системою PARKTRONIC. Лінія виконання Progressive. Система автоторможенія в разі небезпеки. Легкосплавні колісні диски розміром 19. Повний AMG пакет. Night Пакет. В комплекті два види килимків, два комплекти гуми (зимові/літні). Встановлено протиугінна система Привид. Стан нового автомобіля. Машина експлуатувалася виключно по місту.
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">40 000 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Mercedes-Benz GLA</h4></a>
                                    <p class="grid__card-description">
                                        Куплений в офіційному дилерському центрі Соллі Плюс. Максимальна комплектація. Лакофарбове покриття: полярно-білий. Інтеграція смартфона CarPlay і Android Auto. Система безключового доступу. Електричне регулювання сидіння водія з функцією пам'яті. 8G-DCT коробка передач. Цифровий дисплей приладів. Оббивка стелі тканиною чорного кольору. Панорамний стелю. Світлодіодні фари High Performance. Система обігріву сидінь водія і переднього пасажира. Система утримання полоси.Комфортная підсвічування салону. Паркувальний пакет з відеокамерою 360 градусів. Система контролю за станом водія. Активна система полегшення паркування з системою PARKTRONIC. Лінія виконання Progressive. Система автоторможенія в разі небезпеки. Легкосплавні колісні диски розміром 19. Повний AMG пакет. Night Пакет. В комплекті два види килимків, два комплекти гуми (зимові/літні). Встановлено протиугінна система Привид. Стан нового автомобіля. Машина експлуатувалася виключно по місту.
                                    </p>
                                    <span class="grid__card-price">40 000 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6.jpg"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Tiguan 2.0 TSI DSG</h4></a>
                                        <p class="grid__card-description">
                                            Новий Tiguan демонструє, що означає продовжувати винаходити себе. Це те, що визначає його прогресивний дизайн. Від потужних пропорцій до динамічної передньої частини із акцентованими чіткими лініями до яскраво виражених крил, динамічний та збалансований силует загострює погляд на його сильних сторонах: потужності інновацій, незалежності від обставин та безкомпромісній функціональності.
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">50 129 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Tiguan 2.0 TSI DSG</h4></a>
                                    <p class="grid__card-description">
                                        Новий Tiguan демонструє, що означає продовжувати винаходити себе. Це те, що визначає його прогресивний дизайн. Від потужних пропорцій до динамічної передньої частини із акцентованими чіткими лініями до яскраво виражених крил, динамічний та збалансований силует загострює погляд на його сильних сторонах: потужності інновацій, незалежності від обставин та безкомпромісній функціональності.
                                    </p>
                                    <span class="grid__card-price">50 129 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/7.jpg"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Touareg</h4></a>
                                        <p class="grid__card-description">
                                            Машина в ідеальному стані гаражне зберігання працює все пневмопідвіска працює ідеально всі питання по телефону є вентиляція сидінь передніх
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">42 500 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Touareg</h4></a>
                                    <p class="grid__card-description">
                                        Машина в ідеальному стані гаражне зберігання працює все пневмопідвіска працює ідеально всі питання по телефону є вентиляція сидінь передніх
                                    </p>
                                    <span class="grid__card-price">42 500 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/14.jpg"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">TOYOTA Camry</h4></a>
                                        <p class="grid__card-description">
                                            Автомобиль куплен на аукционе в США.Авто растаможено и находится на территории Украины
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">39 999 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">TOYOTA Camry</h4></a>
                                    <p class="grid__card-description">
                                        Автомобиль куплен на аукционе в США.Авто растаможено и находится на территории Украины
                                    </p>
                                    <span class="grid__card-price">39 999 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/15.webp"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Ford Ranger Wildtrack</h4></a>
                                        <p class="grid__card-description">
                                            Офіційний автомобіль в ідеальному стані. Максимальна комплектація Wildtrack. Машина в дорогий бронеплівкою. Новий, покращений світло. Машина на гарантії до 2023 року.
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">52 400 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Ford Ranger Wildtrack</h4></a>
                                    <p class="grid__card-description">
                                        Офіційний автомобіль в ідеальному стані. Максимальна комплектація Wildtrack. Машина в дорогий бронеплівкою. Новий, покращений світло. Машина на гарантії до 2023 року.
                                    </p>
                                    <span class="grid__card-price">52 400 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/16.webp"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Lexus RX 350</h4></a>
                                        <p class="grid__card-description">
                                            Автомобіль Lexus RX 350 в ідеальному стані.Весь у рідній фарбі, без осколів, подряпин, вмятин.Фарбувався тільки передній бампер.Нержавійка порогів салону ще у заводській плівці, про що свідчить малий пробіг.Ще рідні шини, в салоні запах нового авто.Присутні такі основні опції, як підігрів руля, вентиляція і підігрів передніх сидінь, дзеркала з мертвими зонами, утримання полоси та багато ін.Плавність руху і економічність дуже приємно вражають
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">36 300 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Lexus RX 350</h4></a>
                                    <p class="grid__card-description">
                                        Автомобіль Lexus RX 350 в ідеальному стані.Весь у рідній фарбі, без осколів, подряпин, вмятин.Фарбувався тільки передній бампер.Нержавійка порогів салону ще у заводській плівці, про що свідчить малий пробіг.Ще рідні шини, в салоні запах нового авто.Присутні такі основні опції, як підігрів руля, вентиляція і підігрів передніх сидінь, дзеркала з мертвими зонами, утримання полоси та багато ін.Плавність руху і економічність дуже приємно вражають
                                    </p>
                                    <span class="grid__card-price">36 300 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/17.webp"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Multivan</h4></a>
                                        <p class="grid__card-description">
                                            Предлагаем вашему вниманию автомобиль в идеальном внешнем и техническом состоянии. Без повреждений и нюансов по кузову. Детали комплектации, способы оплаты и другие детали - уточняйте у продавцов по указанному номеру.
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">42 100 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Multivan</h4></a>
                                    <p class="grid__card-description">
                                        Предлагаем вашему вниманию автомобиль в идеальном внешнем и техническом состоянии. Без повреждений и нюансов по кузову. Детали комплектации, способы оплаты и другие детали - уточняйте у продавцов по указанному номеру.
                                    </p>
                                    <span class="grid__card-price">42 100 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4.jpg"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">TOYOTA Camry</h4></a>
                                        <p class="grid__card-description">
                                            Автомобиль куплен на аукционе в США.Авто растаможено и находится на территории Украины
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">39 999 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">TOYOTA Camry</h4></a>
                                    <p class="grid__card-description">
                                        Автомобиль куплен на аукционе в США.Авто растаможено и находится на территории Украины
                                    </p>
                                    <span class="grid__card-price">39 999 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5.jpg"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Mercedes-Benz GLA</h4></a>
                                        <p class="grid__card-description">
                                            Куплений в офіційному дилерському центрі Соллі Плюс. Максимальна комплектація. Лакофарбове покриття: полярно-білий. Інтеграція смартфона CarPlay і Android Auto. Система безключового доступу. Електричне регулювання сидіння водія з функцією пам'яті. 8G-DCT коробка передач. Цифровий дисплей приладів. Оббивка стелі тканиною чорного кольору. Панорамний стелю. Світлодіодні фари High Performance. Система обігріву сидінь водія і переднього пасажира. Система утримання полоси.Комфортная підсвічування салону. Паркувальний пакет з відеокамерою 360 градусів. Система контролю за станом водія. Активна система полегшення паркування з системою PARKTRONIC. Лінія виконання Progressive. Система автоторможенія в разі небезпеки. Легкосплавні колісні диски розміром 19. Повний AMG пакет. Night Пакет. В комплекті два види килимків, два комплекти гуми (зимові/літні). Встановлено протиугінна система Привид. Стан нового автомобіля. Машина експлуатувалася виключно по місту.
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">40 000 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Mercedes-Benz GLA</h4></a>
                                    <p class="grid__card-description">
                                        Куплений в офіційному дилерському центрі Соллі Плюс. Максимальна комплектація. Лакофарбове покриття: полярно-білий. Інтеграція смартфона CarPlay і Android Auto. Система безключового доступу. Електричне регулювання сидіння водія з функцією пам'яті. 8G-DCT коробка передач. Цифровий дисплей приладів. Оббивка стелі тканиною чорного кольору. Панорамний стелю. Світлодіодні фари High Performance. Система обігріву сидінь водія і переднього пасажира. Система утримання полоси.Комфортная підсвічування салону. Паркувальний пакет з відеокамерою 360 градусів. Система контролю за станом водія. Активна система полегшення паркування з системою PARKTRONIC. Лінія виконання Progressive. Система автоторможенія в разі небезпеки. Легкосплавні колісні диски розміром 19. Повний AMG пакет. Night Пакет. В комплекті два види килимків, два комплекти гуми (зимові/літні). Встановлено протиугінна система Привид. Стан нового автомобіля. Машина експлуатувалася виключно по місту.
                                    </p>
                                    <span class="grid__card-price">40 000 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6.jpg"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Tiguan 2.0 TSI DSG</h4></a>
                                        <p class="grid__card-description">
                                            Новий Tiguan демонструє, що означає продовжувати винаходити себе. Це те, що визначає його прогресивний дизайн. Від потужних пропорцій до динамічної передньої частини із акцентованими чіткими лініями до яскраво виражених крил, динамічний та збалансований силует загострює погляд на його сильних сторонах: потужності інновацій, незалежності від обставин та безкомпромісній функціональності.
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">50 129 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Tiguan 2.0 TSI DSG</h4></a>
                                    <p class="grid__card-description">
                                        Новий Tiguan демонструє, що означає продовжувати винаходити себе. Це те, що визначає його прогресивний дизайн. Від потужних пропорцій до динамічної передньої частини із акцентованими чіткими лініями до яскраво виражених крил, динамічний та збалансований силует загострює погляд на його сильних сторонах: потужності інновацій, незалежності від обставин та безкомпромісній функціональності.
                                    </p>
                                    <span class="grid__card-price">50 129 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/7.jpg"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Touareg</h4></a>
                                        <p class="grid__card-description">
                                            Машина в ідеальному стані гаражне зберігання працює все пневмопідвіска працює ідеально всі питання по телефону є вентиляція сидінь передніх
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">42 500 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Touareg</h4></a>
                                    <p class="grid__card-description">
                                        Машина в ідеальному стані гаражне зберігання працює все пневмопідвіска працює ідеально всі питання по телефону є вентиляція сидінь передніх
                                    </p>
                                    <span class="grid__card-price">42 500 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/14.jpg"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">TOYOTA Camry</h4></a>
                                        <p class="grid__card-description">
                                            Автомобиль куплен на аукционе в США.Авто растаможено и находится на территории Украины
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">39 999 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">TOYOTA Camry</h4></a>
                                    <p class="grid__card-description">
                                        Автомобиль куплен на аукционе в США.Авто растаможено и находится на территории Украины
                                    </p>
                                    <span class="grid__card-price">39 999 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/15.webp"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Ford Ranger Wildtrack</h4></a>
                                        <p class="grid__card-description">
                                            Офіційний автомобіль в ідеальному стані. Максимальна комплектація Wildtrack. Машина в дорогий бронеплівкою. Новий, покращений світло. Машина на гарантії до 2023 року.
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">52 400 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Ford Ranger Wildtrack</h4></a>
                                    <p class="grid__card-description">
                                        Офіційний автомобіль в ідеальному стані. Максимальна комплектація Wildtrack. Машина в дорогий бронеплівкою. Новий, покращений світло. Машина на гарантії до 2023 року.
                                    </p>
                                    <span class="grid__card-price">52 400 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/16.webp"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Lexus RX 350</h4></a>
                                        <p class="grid__card-description">
                                            Автомобіль Lexus RX 350 в ідеальному стані.Весь у рідній фарбі, без осколів, подряпин, вмятин.Фарбувався тільки передній бампер.Нержавійка порогів салону ще у заводській плівці, про що свідчить малий пробіг.Ще рідні шини, в салоні запах нового авто.Присутні такі основні опції, як підігрів руля, вентиляція і підігрів передніх сидінь, дзеркала з мертвими зонами, утримання полоси та багато ін.Плавність руху і економічність дуже приємно вражають
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">36 300 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Lexus RX 350</h4></a>
                                    <p class="grid__card-description">
                                        Автомобіль Lexus RX 350 в ідеальному стані.Весь у рідній фарбі, без осколів, подряпин, вмятин.Фарбувався тільки передній бампер.Нержавійка порогів салону ще у заводській плівці, про що свідчить малий пробіг.Ще рідні шини, в салоні запах нового авто.Присутні такі основні опції, як підігрів руля, вентиляція і підігрів передніх сидінь, дзеркала з мертвими зонами, утримання полоси та багато ін.Плавність руху і економічність дуже приємно вражають
                                    </p>
                                    <span class="grid__card-price">36 300 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/17.webp"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Multivan</h4></a>
                                        <p class="grid__card-description">
                                            Предлагаем вашему вниманию автомобиль в идеальном внешнем и техническом состоянии. Без повреждений и нюансов по кузову. Детали комплектации, способы оплаты и другие детали - уточняйте у продавцов по указанному номеру.
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">42 100 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volkswagen Multivan</h4></a>
                                    <p class="grid__card-description">
                                        Предлагаем вашему вниманию автомобиль в идеальном внешнем и техническом состоянии. Без повреждений и нюансов по кузову. Детали комплектации, способы оплаты и другие детали - уточняйте у продавцов по указанному номеру.
                                    </p>
                                    <span class="grid__card-price">42 100 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/15.webp"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Ford Ranger Wildtrack</h4></a>
                                        <p class="grid__card-description">
                                            Офіційний автомобіль в ідеальному стані. Максимальна комплектація Wildtrack. Машина в дорогий бронеплівкою. Новий, покращений світло. Машина на гарантії до 2023 року.
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">52 400 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Ford Ranger Wildtrack</h4></a>
                                    <p class="grid__card-description">
                                        Офіційний автомобіль в ідеальному стані. Максимальна комплектація Wildtrack. Машина в дорогий бронеплівкою. Новий, покращений світло. Машина на гарантії до 2023 року.
                                    </p>
                                    <span class="grid__card-price">52 400 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/16.webp"
                                             alt="grid card img">
                                    </a>
                                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Lexus RX 350</h4></a>
                                        <p class="grid__card-description">
                                            Автомобіль Lexus RX 350 в ідеальному стані.Весь у рідній фарбі, без осколів, подряпин, вмятин.Фарбувався тільки передній бампер.Нержавійка порогів салону ще у заводській плівці, про що свідчить малий пробіг.Ще рідні шини, в салоні запах нового авто.Присутні такі основні опції, як підігрів руля, вентиляція і підігрів передніх сидінь, дзеркала з мертвими зонами, утримання полоси та багато ін.Плавність руху і економічність дуже приємно вражають
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">36 300 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Lexus RX 350</h4></a>
                                    <p class="grid__card-description">
                                        Автомобіль Lexus RX 350 в ідеальному стані.Весь у рідній фарбі, без осколів, подряпин, вмятин.Фарбувався тільки передній бампер.Нержавійка порогів салону ще у заводській плівці, про що свідчить малий пробіг.Ще рідні шини, в салоні запах нового авто.Присутні такі основні опції, як підігрів руля, вентиляція і підігрів передніх сидінь, дзеркала з мертвими зонами, утримання полоси та багато ін.Плавність руху і економічність дуже приємно вражають
                                    </p>
                                    <span class="grid__card-price">36 300 $</span>
                                    <ul class="grid__card-characteristics">
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">БЕнзин</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2012 год</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">2.5 литра</span>
                                        </li>
                                        <li class="grid__card-characteristic">
                                        <span class="img">
                                            <span class="icon"
                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
                                            ></span>
                                        </span>
                                            <span class="text">217 000 КМ</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
                                    <a href="#" class="btn btn_white">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <button class="btn btn_secondary">Browse Products</button>
                    <ul class="pagination__list">
                        <li class="prev">
                            <span class="icon icon-arr"></span>
                        </li>
                        <li>
                            <span>1</span>
                        </li>
                        <li class="active">
                            <span>2</span>
                        </li>
                        <li>
                            <span>3</span>
                        </li>
                        <li>
                            <span>4</span>
                        </li>
                        <li>
                            <span>5</span>
                        </li>
                        <li>
                            <span>...</span>
                        </li>
                        <li>
                            <span>24</span>
                        </li>
                        <li class="next">
                            <span class="icon icon-arr"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map-section" id="map-section">
    <div class="container">
        <div class="map-section__wrapper">
            <div class="map" id="map">

            </div>
            <ul class="map__info">
                <li class="map__info-item">
                    <span class="icon icon-phone"></span>
                    <a href="tel:+380936164441">+38 (093) 616-44-41</a>
                </li>
                <li class="map__info-item">
                    <span class="icon icon-phone"></span>
                    <a href="tel:+380936164442">+38 (093) 616-44-42</a>
                </li>
                <li class="map__info-item">
                    <span class="icon icon-mail"></span>
                    <a href="mailto:dealer@gmail.com">dealer@gmail.com</a>
                </li>
                <li class="map__info-item">
                    <span class="icon icon-map"></span>
                    <address>г. Киев, Улица, Номер дома</address>
                </li>
                <li class="map__info-item">
                    <span class="text">Мессенджеры:</span>
                    <ul class="social-list">
                        <li class="social-item">
                            <a href="https://telegram.me/groupe_name" class="icon icon-telegram" target="_blank"></a>
                        </li>
                        <li class="social-item">
                            <a href="viber://chat/?number=%2B380966771503" class="icon icon-viber" target="_blank"></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>
<?php
get_footer('front'); ?>
