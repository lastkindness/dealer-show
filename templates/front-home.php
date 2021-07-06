<?php
/*
 * Template name: Front Home
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
<section class="hero-slider" id="hero-slider">
    <div class="container">
        <div class="hero-slider__wrapper swiper-container">
            <ul class="hero-slider__list swiper-wrapper">
                <li class="hero-slider__item swiper-slide">
                    <div class="hero-slider__content">
<!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
<!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                        <h2 class="hero-slider__title h1">
                            <span class="red">Заголовок слайдера</span>
                            <br>
                            <span class="white">возможно в 2 строки</span>
                        </h2>
                        <div class="hero-slider__text">
                            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный</p>
                        </div>
                        <a href="#" class="btn">подробнее</a>
                    </div>
                    <picture class="hero-slider__img">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/27.jpg" media="
                        (max-width: 1024px)">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" alt="hero-slider">
                    </picture>
                </li>
                <li class="hero-slider__item swiper-slide">
                    <div class="hero-slider__content">
                        <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                        <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                        <h2 class="hero-slider__title h1">
                            <span class="red">Заголовок слайдера 2</span>
                            <br>
                            <span class="white">возможно в 2 строки 2</span>
                        </h2>
                        <div class="hero-slider__text">
                            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный</p>
                        </div>
                        <a href="#" class="btn">подробнее</a>
                    </div>
                    <picture class="hero-slider__img">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/28.jpg" media="
                        (max-width: 1024px)">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/8.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/8.jpg" alt="hero-slider">
                    </picture>
                </li>
                <li class="hero-slider__item swiper-slide">
                    <div class="hero-slider__content">
                        <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                        <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                        <h2 class="hero-slider__title h1">
                            <span class="red">Заголовок слайдера 3</span>
                            <br>
                            <span class="white">возможно в 2 строки 3</span>
                        </h2>
                        <div class="hero-slider__text">
                            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный</p>
                        </div>
                        <a href="#" class="btn">подробнее</a>
                    </div>
                    <picture class="hero-slider__img">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/29.jpg" media="
                        (max-width: 1024px)">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/13.jpg">s
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/13.jpg" alt="hero-slider">
                    </picture>
                </li>
            </ul>
            <div class="hero-slider__nav">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="hero-slider__controls swiper-pagination"></div>
        </div>
    </div>
</section>
<section class="car-selection" id="car-selection">
    <div class="container">
        <div class="car-selection__wrapper">
            <div class="car-selection__title">
                <h2 class="title h1">Подобрать авто</h2>
                <h2 class="subtitle h2">Выгода до 40% от рынка Украины</h2>
            </div>
            <div class="car-selection__content">
                <form action="#" class="car-selection__form">
                    <div class="column">
                        <div class="input-container">
                            <label for="car-type">Тип транспортного средства</label>
                            <select id="car-type" name="car-type">
                                <option value="Car">Автомобиль</option>
                                <option value="Moto">Mото-техника</option>
                                <option value="Electric-cars">Электрокары</option>
                            </select>
                        </div>
                        <div class="input-container">
                            <label for="car-brand">Марка</label>
                            <select id="car-brand" name="car-brand">
                                <option value="All">Все</option>
                                <option value="Volkswagen">Volkswagen</option>
                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                <option value="Opel">Opel</option>
                                <option value="Renault">Renault</option>
                                <option value="BMW">BMW</option>
                                <option value="Ford">Ford</option>
                                <option value="Audi">Audi</option>
                                <option value="Toyota">Toyota</option>
                            </select>
                        </div>
                        <div class="input-container">
                            <label for="car-model">Модель</label>
                            <select id="car-model" name="car-model">
                                <option value="All">Все</option>
                                <option value="Sedan">Седан</option>
                                <option value="Hatchback">Хэтчбек</option>
                                <option value="Wagon">Универсал</option>
                                <option value="Liftback">Лифтбэк</option>
                                <option value="Coupe">Купе</option>
                                <option value="Convertible">Кабриолет</option>
                                <option value="Pickup">Пикап</option>
                                <option value="Crossover">Кроссовер</option>
                            </select>
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-container input-container_dual">
                            <label for="year-of-issue">Год выпуска</label>
                            <select id="year-of-issue" name="year-of-issue" data-placeholder="От">
                                <option></option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                            </select>
                            <select id="year-of-ending" name="year-of-ending" data-placeholder="До">
                                <option></option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div class="input-container input-container_dual">
                            <label for="cost">Стоимость</label>
                            <select id="cost-from" name="cost-from" data-placeholder="От">
                                <option></option>
                                <option value="7000">7000</option>
                                <option value="8000">8000</option>
                                <option value="9000">9000</option>
                            </select>
                            <select id="cost-up-to" name="cost-up-to" data-placeholder="До">
                                <option></option>
                                <option value="20000">20000</option>
                                <option value="25000">25000</option>
                                <option value="30000">30000</option>
                            </select>
                        </div>
                        <button class="btn btn_fullwidth">подобрать</button>
                    </div>
                </form>
                <ul class="car-selection__advantages">
                    <li class="car-selection__advantage">
                        <div class="img-wrap">
                            <span class="img" style="
                                -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/wheel.svg);
                                mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/wheel.svg);">
                            </span>
                        </div>
                        <div class="content">
<!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
<!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                            <h3 class="title h3">Название преимущества</h3>
                            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                        </div>
                    </li>
                    <li class="car-selection__advantage">
                        <div class="img-wrap">
                            <span class="img" style="
                                -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/check-sticker.svg);
                                mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/check-sticker.svg);">
                            </span>
                        </div>
                        <div class="content">
<!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
<!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                            <h3 class="title h3">Название преимущества</h3>
                            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                        </div>
                    </li>
                    <li class="car-selection__advantage">
                        <div class="img-wrap">
                            <span class="img" style="
                                -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/checked.svg);
                                mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/checked.svg);">
                            </span>
                        </div>
                        <div class="content">
<!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
<!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                            <h3 class="title h3">Название преимущества</h3>
                            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="top-auto" id="top-auto">
    <div class="container">
        <div class="top-auto__wrapper">
            <div class="top-auto__title">
<!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
<!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                <h2 class="title h1">Топовые автомобили</h2>
                <a href="#" class="btn btn_secondary">Смотреть все</a>
            </div>
            <div class="top-auto__grid">
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
                    <!--<div class="grid__card">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <a class="grid__card-img" href="/product">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/18.webp"
                                             alt="grid card img">
                                    </a>
                                    <div class="grid__card-content">
                                        <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volvo XC60 Inscription</h4></a>
                                        <p class="grid__card-description">
                                            Volvo XC 60 T5 INSCRIPTION Ремонт автомобиля выполнен у официального дилера Viking Motors, проведено первое ТО, следующее ТО через 20000 км. Большая просьба, площадкам по продаже авто не беспокоить.
                                        </p>
                                        <div class="grid__card-footer">
                                            <span class="grid__card-price">41 999 $</span>
                                            <a href="#" class="btn grid__card-link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__card-back">
                                    <a class="grid__card-link" href="/product"><h4 class="h4 grid__card-title">Volvo XC60 Inscription</h4></a>
                                    <p class="grid__card-description">
                                        Volvo XC 60 T5 INSCRIPTION Ремонт автомобиля выполнен у официального дилера Viking Motors, проведено первое ТО, следующее ТО через 20000 км. Большая просьба, площадкам по продаже авто не беспокоить.
                                    </p>
                                    <span class="grid__card-price">41 999 $</span>
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
                    </div>-->
                </div>
            </div>
            <a href="#" class="btn btn_secondary btn_fullwidth">перейти в каталог</a>
        </div>
    </div>
</section>
<section class="individual-form individual-form_dark" id="individual-form">
    <div class="container">
        <div class="individual-form__wrapper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/42.jpg')">
            <div class="individual-form__content">
                <h2 class="title h2">Наши эксперты сделают для вас индивидуальную подборку абсолютно бесплатно</h2>
                <p class="text">Сайт по продаже автомобилей из Америки. Здесь можно купить Бу автомобили, целые и битые машины с авто аукционов США
                    Копарт, Манхейм, IAAI, CARS.COM ЭКОНОМИЯ при покупке авто под заказ в США до -40%</p>
            </div>
            <form action="#" class="individual-form__form">
                <input id="name" type="text" name="name" required="required" placeholder="Введите ваше имя">
                <input id="phone" name="phone" type="tel" placeholder="Введите ваш номер телефона">
                <button class="btn btn_secondary">Получить консультацию</button>
            </form>
        </div>
    </div>
</section>
<section class="warranty" id="warranty">
    <div class="container">
        <div class="warranty__wrapper">
            <h2 class="h1 warranty__title">Наша компания гарантирует</h2>
            <div class="warranty__grid swiper-container">
                <div class="grid swiper-wrapper">
                    <div class="grid__card swiper-slide">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <div class="grid__card-front-content">
                                        <span class="grid__card-img" >
                                            <span class="img" style="
                                                -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/wallet.svg);
                                                mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/wallet.svg);"></span>
                                        </span>
                                        <h4 class="h4 grid__card-title">Лучшую цену на авто</h4>
                                    </div>
                                    <p class="grid__card-description">
                                        Как известно, автотехцентр начинается… нет не с вешалки (не театр всё ж таки), а с зоны приёмки. Здесь должно быть просторно, число и светло, равно как и в цехах. Форма сотрудников должна быть фирменной, опрятной и, вообще, — она должна просто быть! Порядок свидетельствует, что и бизнес ведётся добросовестно и ответственно.
                                    </p>
                                </div>
                                <div class="grid__card-back">
                                    <h4 class="h4 grid__card-title">Лучшую цену на авто</h4>
                                    <p class="grid__card-description">
                                        Мы озвучиваем вам лучшую цену, сопровождаем оформление сделки, вы сразу же получаете деньги за авто.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card swiper-slide">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <div class="grid__card-front-content">
                                        <span class="grid__card-img" >
                                            <span class="img" style="
                                            -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/car.svg);
                                            mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/car.svg);"></span>
                                        </span>
                                        <h4 class="h4 grid__card-title">Качественную проверку</h4>
                                    </div>
                                    <p class="grid__card-description">
                                        Как известно, автотехцентр начинается… нет не с вешалки (не театр всё ж таки), а с зоны приёмки. Здесь должно быть просторно, число и светло, равно как и в цехах. Форма сотрудников должна быть фирменной, опрятной и, вообще, — она должна просто быть! Порядок свидетельствует, что и бизнес ведётся добросовестно и ответственно.
                                    </p>
                                </div>
                                <div class="grid__card-back">
                                    <h5 class="h5 grid__card-title">Качественную проверку</h5>
                                    <p class="grid__card-description">
                                        Мы используем только надежных перевозчиков по суше на территории США, а также самые быстрые судоходные линии. Среднее время погрузки транспортного средства с момента прибытия на склад в порту отправления составляет 7-10 рабочих дней. Таможенное оформление транспортного средства в портах Украины максимум занимает 2 рабочих дня.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card swiper-slide">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <div class="grid__card-front-content">
                                        <span class="grid__card-img" >
                                            <span class="img" style="
                                                -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/money.svg);
                                                mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/money.svg);"></span>
                                        </span>
                                        <h4 class="h4 grid__card-title">Фиксацию бюджета</h4>
                                    </div>
                                    <p class="grid__card-description">
                                        Как известно, автотехцентр начинается… нет не с вешалки (не театр всё ж таки), а с зоны приёмки. Здесь должно быть просторно, число и светло, равно как и в цехах. Форма сотрудников должна быть фирменной, опрятной и, вообще, — она должна просто быть! Порядок свидетельствует, что и бизнес ведётся добросовестно и ответственно.
                                    </p>
                                </div>
                                <div class="grid__card-back">
                                    <h5 class="h5 grid__card-title">Фиксацию бюджета</h5>
                                    <p class="grid__card-description">
                                        Перед участием в торгах на аукционе США, мы изучаем и проверяем полную историю авто: от даты выхода с конвейера до последнего визита на СТО. В Америке, фиксировать жизнь авто в единой базе - обязательная процедура. Именно поэтому Вы можете быть уверены в полноте и правдивости полученной информации об автомобиле, в отличии от «размытой» истории ТС на украинском рынке.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card swiper-slide">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <div class="grid__card-front-content">
                                        <span class="grid__card-img" >
                                            <span class="img" style="
                                                -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/express.svg);
                                                mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/express.svg);"></span>
                                        </span>
                                        <h4 class="h4 grid__card-title">Быструю доставку</h4>
                                    </div>
                                    <p class="grid__card-description">
                                        Как известно, автотехцентр начинается… нет не с вешалки (не театр всё ж таки), а с зоны приёмки. Здесь должно быть просторно, число и светло, равно как и в цехах. Форма сотрудников должна быть фирменной, опрятной и, вообще, — она должна просто быть! Порядок свидетельствует, что и бизнес ведётся добросовестно и ответственно.
                                    </p>
                                </div>
                                <div class="grid__card-back">
                                    <h5 class="h5 grid__card-title">Быструю доставку</h5>
                                    <p class="grid__card-description">
                                        Компания сделает процесс доставки автомобиля легким и эффективным, оправдав все Ваши ожидания! Многолетний опыт работы в сфере международных транспортно-логистических услуг, поможет решить любые проблемы и вопросы, возникающие в процессе оформления, покупки и доставки автомобиля.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card swiper-slide">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <div class="grid__card-front-content">
                                        <span class="grid__card-img" >
                                            <span class="img" style="
                                                -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/eye.svg);
                                                mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/eye.svg);"></span>
                                        </span>
                                        <h4 class="h4 grid__card-title">Прозрачность</h4>
                                    </div>
                                    <p class="grid__card-description">
                                        Как известно, автотехцентр начинается… нет не с вешалки (не театр всё ж таки), а с зоны приёмки. Здесь должно быть просторно, число и светло, равно как и в цехах. Форма сотрудников должна быть фирменной, опрятной и, вообще, — она должна просто быть! Порядок свидетельствует, что и бизнес ведётся добросовестно и ответственно.
                                    </p>
                                </div>
                                <div class="grid__card-back">
                                    <h5 class="h5 grid__card-title">Прозрачность</h5>
                                    <p class="grid__card-description">
                                        Каждый автопроизводитель дает на свои автомобили гарантию, то есть обязуется бесплатно их ремонтировать в определенный срок. Если, конечно, поломка произошла из-за самого производителя. Гарантия начинает действовать в тот момент, когда покупатель забирает свою новую машину из салона. А вот срок у нее может быть разный: у кого-то она длится год, у кого-то два, три и больше. Большинство производителей ограничивают гарантию не только количеством лет, но и километражом.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card swiper-slide">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <div class="grid__card-front-content">
                                        <span class="grid__card-img" >
                                            <span class="img" style="
                                                -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/nuts.svg);
                                                mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/nuts.svg);"></span>
                                        </span>
                                        <h4 class="h4 grid__card-title">Ремонт с гарантией</h4>
                                    </div>
                                    <p class="grid__card-description">
                                        Как известно, автотехцентр начинается… нет не с вешалки (не театр всё ж таки), а с зоны приёмки. Здесь должно быть просторно, число и светло, равно как и в цехах. Форма сотрудников должна быть фирменной, опрятной и, вообще, — она должна просто быть! Порядок свидетельствует, что и бизнес ведётся добросовестно и ответственно.
                                    </p>
                                </div>
                                <div class="grid__card-back">
                                    <h5 class="h5 grid__card-title">Ремонт с гарантией</h5>
                                    <p class="grid__card-description">
                                        Каждый автопроизводитель дает на свои автомобили гарантию, то есть обязуется бесплатно их ремонтировать в определенный срок. Если, конечно, поломка произошла из-за самого производителя. Гарантия начинает действовать в тот момент, когда покупатель забирает свою новую машину из салона. А вот срок у нее может быть разный: у кого-то она длится год, у кого-то два, три и больше. Большинство производителей ограничивают гарантию не только количеством лет, но и километражом.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card swiper-slide">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <div class="grid__card-front-content">
                                        <span class="grid__card-img" >
                                            <span class="img" style="
                                                -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/qestion.svg);
                                                mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/qestion.svg);"></span>
                                        </span>
                                        <h4 class="h4 grid__card-title">Лучший сервис</h4>
                                    </div>
                                    <p class="grid__card-description">
                                        Как известно, автотехцентр начинается… нет не с вешалки (не театр всё ж таки), а с зоны приёмки. Здесь должно быть просторно, число и светло, равно как и в цехах. Форма сотрудников должна быть фирменной, опрятной и, вообще, — она должна просто быть! Порядок свидетельствует, что и бизнес ведётся добросовестно и ответственно.
                                    </p>
                                </div>
                                <div class="grid__card-back">
                                    <h5 class="h5 grid__card-title">Лучший сервис</h5>
                                    <p class="grid__card-description">
                                        Правила гарантии простые. Ремонт будет бесплатным только тогда, когда поломка произошла из-за производителя. Например, если какая-то деталь вышла из строя из-за ошибки в сборке. А вот расходники под гарантийное обслуживание не подпадают: речь о деталях, которые нужно регулярно менять по регламенту. Это тормозные колодки, лампочки, фильтры, предохранители, технические жидкости и тому подобное.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__card swiper-slide">
                        <div class="grid__card-flip">
                            <div class="grid__card-wrapper">
                                <div class="grid__card-front">
                                    <div class="grid__card-front-content">
                                        <span class="grid__card-img" >
                                            <span class="img" style="
                                                -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/checked.svg);
                                                mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/checked.svg);"></span>
                                        </span>
                                        <h4 class="h4 grid__card-title">Сохранность</h4>
                                    </div>
                                    <p class="grid__card-description">
                                        Как известно, автотехцентр начинается… нет не с вешалки (не театр всё ж таки), а с зоны приёмки. Здесь должно быть просторно, число и светло, равно как и в цехах. Форма сотрудников должна быть фирменной, опрятной и, вообще, — она должна просто быть! Порядок свидетельствует, что и бизнес ведётся добросовестно и ответственно.
                                    </p>
                                </div>
                                <div class="grid__card-back">
                                    <h5 class="h5 grid__card-title">Сохранность</h5>
                                    <p class="grid__card-description">
                                        Автомобили и прицепной состав обычно эксплуатируются в течение первой-второй смен, В ночное время подвижной состав размещают на территории АТП в отапливаемых зданиях или на открытых площадках, в зависимости от климатических и эксплуатационных условий.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="warranty__controls swiper-pagination"></div>
                <div class="warranty__nav swiper-nav">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-form" id="contact-form">
    <div class="container">
        <div class="contact-form__wrapper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/19.jpg')">
            <div class="contact-form__content">
                <h2 class="contact-form__title h1">
                    <span class="red">Получить консультацию</span>
                    <br>
                    <div class="white">со старшим менеджером</div>
                </h2>
                <form action="#" class="contact-form__form">
                    <input id="contact-name" type="text" name="contact-name" required="required" placeholder="Введите ваше имя">
                    <input id="phone" name="phone" type="tel" placeholder="Номер телефона">
                    <textarea id="contact-text" name="contact-text" placeholder="Введите ваш вопрос"></textarea>
                    <button class="btn">Получить консультацию</button>
                </form>
            </div>
            <div class="contact-form__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/11.png" alt="grid card img">
            </div>
        </div>
    </div>
</section>
<section class="reviews" id="reviews">
    <div class="container">
        <div class="reviews__wrapper swiper-container">
            <div class="reviews__title">
                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                <h2 class="title h1">Отзывы клиентов</h2>
                <a href="#" class="btn btn_secondary">Смотреть все</a>
            </div>
            <ul class="reviews__grid swiper-wrapper">
                <li class="reviews__item swiper-slide">
                    <a href="https://youtu.be/0nGw6BmkaW4" data-fancybox="gallery" data-title="Video"
                       class="reviews__video">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/20.jpg" alt="">
                        <div class="reviews__icon"></div>
                    </a>
                    <a href="/review" class="reviews__item-content">
                        <h4 class="h4 reviews__item-title">Маркова Василиса</h4>
                        <p class="reviews__item-text">Ну вот и прошел месяц после покупки кроссовера Чери Тигго 8. Позади уже 2000 км пробега. Общие впечатления от Чери Тигго 8 на данный момент положительные. Никаких нареканий на автомобиль нет. Расход по городу по пробкам с утренними прогревами — 10,7-11,0 литров, по трассе не катались, данных пока нет.</p>
                    </a>
                </li>
                <li class="reviews__item swiper-slide">
                    <a href="https://youtu.be/zft1dwqGIik" data-fancybox="gallery" data-title="Video"
                       class="reviews__video">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/22.jpg" alt="">
                        <div class="reviews__icon"></div>
                    </a>
                    <a href="/review" class="reviews__item-content">
                        <h4 class="h4 reviews__item-title">Калмыков Макар</h4>
                        <p class="reviews__item-text">Купив когда-то Шеви Ниву, полюбил бездорожье и полный привод.
                            Недавно принял решение поменять Хонду Аккорд на настоящий внедорожник. Из доступных был только он — Хавал Н5. А вот Нива осталась как вторая машина. Ничего такого, что бы сильно напрягало, в Хавале Н5 нет. Посмотрим, что интересного будет дальше.</p>
                    </a>
                </li>
                <li class="reviews__item swiper-slide">
                    <a href="https://youtu.be/3Geya5auw-g" data-fancybox="gallery" data-title="Video"
                       class="reviews__video">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/21.jpg" alt="">
                        <div class="reviews__icon"></div>
                    </a>
                    <a href="/review" class="reviews__item-content">
                        <h4 class="h4 reviews__item-title">Воробьев Артём</h4>
                        <p class="reviews__item-text">Пробег уже перевалил за 10 тысяч км — самое время описать впечатления от Мерседеса А-класса после полугода владения. Отличная динамика и управляемость. Хотя я и так себе водитель, чувствую себя очень уверенно, входя в повороты на высокой скорости. В режиме спорт+ можно даже немножко отправить автомобиль в управляемый занос.</p>
                    </a>
                </li>
                <li class="reviews__item swiper-slide">
                    <a href="https://youtu.be/5YTvETWXxu8" data-fancybox="gallery" data-title="Video"
                       class="reviews__video">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/23.jpg" alt="">
                        <div class="reviews__icon"></div>
                    </a>
                    <a href="/review" class="reviews__item-content">
                        <h4 class="h4 reviews__item-title">Константин Пирогов</h4>
                        <p class="reviews__item-text">Купил эту машину на замену Шевроле Ланос 2006 года, так как старая начала уже цвести по низу дверей и кромке капота, ну и так 8 лет машине бюджетной – срок весьма большой. Мне 24, стаж вождения 2 полных года. Заказал авто 11 декабря. Брать стоит не выше второй комплектации с расширенным пакетом.</p>
                    </a>
                </li>
            </ul>
            <div class="reviews__controls swiper-pagination"></div>
            <div class="reviews__nav swiper-nav">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
<section class="stages" id="stages">
    <div class="container">
        <div class="stages__wrapper">
            <h2 class="h1 stages__title">Этапы покупки автомобиля в США</h2>
            <ul class="stages__grid">
                <li class="stages__item">
                    <span class="stages__img">
                        <span class="stages__value">
                            <span>1</span>
                        </span>
                        <h5 class="h5 stages__subtitle">Покупка</h5>
                        <span class="plus"></span>
                    </span>
                    <p class="stages__text">Автомобиль куплен на аукционе в США.Авто растаможено и находится на территории Украины</p>
                </li>
                <li class="stages__item">
                    <span class="stages__img">
                        <span class="stages__value">
                            <span>2</span>
                        </span>
                        <h5 class="h5 stages__subtitle">Перерегистрация авто</h5>
                        <span class="plus"></span>
                    </span>
                    <p class="stages__text">Переоформление прав собственности на автомобиль в 2020 году производится непосредственно в сервисном центре МВД (ранее МРЭО).</p>
                </li>
                <li class="stages__item">
                    <span class="stages__img">
                        <span class="stages__value">
                            <span>3</span>
                        </span>
                        <h5 class="h5 stages__subtitle">Договор купли-продажи автомобиля</h5>
                        <span class="plus"></span>
                    </span>
                    <p class="stages__text">Для оформления продажи авто в СЦ МВД представитель собственника должен иметь на руках нотариальную доверенность и её заверенную копию. </p>
                </li>
                <li class="stages__item">
                    <span class="stages__img">
                        <span class="stages__value">
                            <span>4</span>
                        </span>
                        <h5 class="h5 stages__subtitle">Налоги при покупке-продаже авто</h5>
                        <span class="plus"></span>
                    </span>
                    <p class="stages__text">Сбор в пенсионный фонд 3-5% (исключительно при первой регистрации автомобиля на территории Украины). Зависит от стоимости автомобиля и размера прожиточного минимума для трудоспособных лиц (на момент покупки).</p>
                </li>
                <li class="stages__item">
                    <span class="stages__img">
                        <span class="stages__value">
                            <span>5</span>
                        </span>
                        <h5 class="h5 stages__subtitle">Название пятого шага</h5>
                        <span class="plus"></span>
                    </span>
                    <p class="stages__text">Закажите экспертизу ТС экспертом в сервисном центре МВД, до момента передачи денег и заключения договора купли-продажи.</p>
                </li>
                <li class="stages__item">
                    <span class="stages__img">
                        <span class="stages__value">
                            <span>6</span>
                        </span>
                        <h5 class="h5 stages__subtitle">Название шестого шага</h5>
                        <span class="plus"></span>
                    </span>
                    <p class="stages__text">Внимательно читайте все что написано в документах, которые подписываете.</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="viber-form" id="viber-form">
    <div class="container">
        <div class="viber-form__wrapper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/9.jpg')">
            <span class="viber-form__icon">
                <span class="icon icon-viber"></span>
            </span>
            <div class="viber-form__content">
                <h2 class="title h1">Получить готовую подборку на Viber</h2>
                <p class="text">Отправим прямо сейчас </p>
            </div>
            <form action="#" class="viber-form__form">
                <input id="name" type="text" name="name" required="required" placeholder="Введите ваше имя">
                <input id="phone" name="phone" type="tel" placeholder="Ваш Viber">
                <div class="button-wrap">
                    <button class="btn btn_white btn_fullwidth">Получить подборку</button>
                    <span class="text">10 авто в вашем бюджете</span>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="auctions" id="auctions">
    <div class="container">
        <div class="auctions__wrapper swiper-container">
            <h2 class="h1 auctions__title">Аукционы с которыми работаем</h2>
            <ul class="auctions__grid swiper-wrapper">
                <li class="auctions__item swiper-slide">
                    <a href="/auction" class="auctions__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/EBay-logo.png"
                             alt="auction-img">
                    </a>
                    <div class="auctions__content">
                        <p class="auctions__item-text">Название аукциона</p>
                        <a href="/auction" class="auctions__link">Подробнее <span class="icon icon-play"></span></a>
                    </div>
                </li>
                <li class="auctions__item swiper-slide">
                    <a href="/auction" class="auctions__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/adesa-vector-logo.png"
                             alt="auction-img">
                    </a>
                    <div class="auctions__content">
                        <p class="auctions__item-text">Название аукциона</p>
                        <a href="/auction" class="auctions__link">Подробнее <span class="icon icon-play"></span></a>
                    </div>
                </li>
                <li class="auctions__item swiper-slide">
                    <a href="/auction" class="auctions__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1200px-Copart_logo.png"
                             alt="auction-img">
                    </a>
                    <div class="auctions__content">
                        <p class="auctions__item-text">Название аукциона</p>
                        <a href="/auction" class="auctions__link">Подробнее <span class="icon icon-play"></span></a>
                    </div>
                </li>
                <li class="auctions__item swiper-slide">
                    <a href="/auction" class="auctions__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/manheim.png"
                             alt="auction-img">
                    </a>
                    <div class="auctions__content">
                        <p class="auctions__item-text">Название аукциона</p>
                        <a href="/auction" class="auctions__link">Подробнее <span class="icon icon-play"></span></a>
                    </div>
                </li>
                <li class="auctions__item swiper-slide">
                    <a href="/auction" class="auctions__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/NPA.png"
                             alt="auction-img">
                    </a>
                    <div class="auctions__content">
                        <p class="auctions__item-text">Название аукциона</p>
                        <a href="/auction" class="auctions__link">Подробнее <span class="icon icon-play"></span></a>
                    </div>
                </li>
                <li class="auctions__item swiper-slide">
                    <a href="/auction" class="auctions__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/MaskGroup.png"
                             alt="auction-img">
                    </a>
                    <div class="auctions__content">
                        <p class="auctions__item-text">Название аукциона</p>
                        <a href="/auction" class="auctions__link"><span>Подробнее</span><span class="icon icon-play"></span></a>
                    </div>
                </li>
                <li class="auctions__item swiper-slide">
                    <a href="/auction" class="auctions__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carscom.png"
                             alt="auction-img">
                    </a>
                    <div class="auctions__content">
                        <p class="auctions__item-text">Название аукциона</p>
                        <a href="/auction" class="auctions__link"><span>Подробнее</span><span class="icon icon-play"></span></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="faq" id="faq">
    <div class="faq-wrapper">
        <div class="container">
            <h2 class="h1 faq__title">Часто задаваемые вопросы</h2>
            <div class="faq__content">
                <ul class="faq__content-list">
                    <li class="faq__content-li">
                        <div class="faq__content-title">
<!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
<!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                            <h4 class="h4 title">пункт №1</h4>
                            <span class="icon icon-arr"></span>
                        </div>
                        <div class="faq__content-text" style="display: none;">
                            <h4>Целью данных Правил является:</h4>
                            <ol>
                                <li><a title="скачать файл" href="assets/images/security/4/0723934001574241365.png" target="_blank" rel="nofollow" type="application/octet-stream" download="">Установление общих условий</a></li>
                                <li><a href="assets/images/security/4/0629233001573482564.docx">Ссылка 2</a></li>
                            </ol>
                        </div>
                    </li>
                    <li class="faq__content-li">
                        <div class="faq__content-title">
<!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
<!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                            <h4 class="h4 title">Что мы предлагаем?</h4>
                            <span class="icon icon-arr"></span>
                        </div>
                        <div class="faq__content-text" style="display: none;">
                            <p>Пять столетий спустя Lorem Ipsum испытал всплеск популярности с выпуском сухого переноса листов Letraset в. Эти листы надписи можно потереть на любом месте и были быстро приняты художники-графики, принтеры, архитекторов и рекламодателей для их профессионального вида и простоты использования. Letraset включены Lorem Ipsum проходы в арсеналом шрифтов, стилей и размеров, затвердевание место Латинского-эск фразу целиком в печатной и графической индустрии. Те, с вниманием к деталям будет даже поймали дань классического текста в эпизоде Mad Men (S6E1 вокруг 1:18:55 для тех, кто не сделал).</p>
                        </div>
                    </li>
                    <li class="faq__content-li">
                        <div class="faq__content-title">
<!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
<!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                            <h4 class="h4 title">пункт №2</h4>
                            <span class="icon icon-arr"></span>
                        </div>
                        <div class="faq__content-text" style="display: none;">
                            <table>
                                <tbody>
                                <tr>
                                    <th>Lorem ipsum dolor</th>
                                    <th>Lorem ipsum dolor</th>
                                    <th>Lorem ipsum dolor</th>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing.</td>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo.</td>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed.</td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed.</td>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</td>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing.</td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing.</td>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing.</td>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing.</td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</td>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</td>
                                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="individual-form" id="individual-form2">
    <div class="container">
        <div class="individual-form__wrapper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/9.jpg')">
            <div class="individual-form__content">
                <h2 class="title h2">Не нашли нужного ответа?</h2>
                <p class="text">Заполните форму и мы проконсультируем Вам по любому вопросу</p>
            </div>
            <form action="#" class="individual-form__form">
                <input id="individual-name" type="text" name="individual-name" required="required"
                       placeholder="Введите ваше имя">
                <input id="individual-phone" name="individual-phone" type="tel" placeholder="Введите ваш номер телефона">
                <button class="btn btn_white-secondary">Получить консультацию</button>
            </form>
        </div>
    </div>
</section>
<section class="map-section" id="map-section">
    <div class="container">
        <div class="map-section__wrapper">
            <div class="map" id="map" data-center="50.450148687162724, 30.447640303497465" data-marker="50.45055865285265, 30.444191016208258">

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
<section class="blog-posts" id="blog-posts">
    <div class="container">
        <div class="blog-posts__wrapper">
            <div class="blog-posts__title">
                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                <h2 class="title h1">Читайте наш блог</h2>
                <a href="#" class="btn btn_secondary">Смотреть все</a>
            </div>
            <div class="blog-posts__grid">
                <ul class="blog-posts__list">
                    <li class="blog-posts__item">
                        <a href="/blog-post" class="blog-posts__link">
                            <span class="blog-posts__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg" alt=""></span>
                            <div href="/review" class="blog-posts__item-content">
                                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                <h4 class="h4 blog-posts__item-title">Как проверить скрученный пробег машины</h4>
                                <p class="blog-posts__item-text">Одометр современного автомобиля, который фиксирует количество пройденных километров с момента начала эксплуатации — электронный прибор. Как и любой другой, его можно взломать. Причиной "скручивания" может быть не только продажа. В некоторых моделях бортовой компьютер требует посещения станции технического обслуживания после определенного километража. Если средств на СТО нет, некоторым проще обмануть бортовой компьютер, подправив данные одометра. Бывает и другая необходимость изменить цифры, не связанная с </p>
                            </div>
                        </a>
                    </li>
                    <li class="blog-posts__item">
                        <a href="/blog-post" class="blog-posts__link">
                            <span class="blog-posts__img"><img src="<?php echo get_template_directory_uri();
                            ?>/assets/img/3.jpg" alt=""></span>
                            <div href="/review" class="blog-posts__item-content">
                                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                <h4 class="h4 blog-posts__item-title">Проставки в пружину или авто бафферы</h4>
                                <p class="blog-posts__item-text">Любой автовладелец может купить набор резиновых проставок в пружину автомобиля, чтобы увеличить дорожный просвет. Расскажем что такое авто бафферы и чем отличаются от обычных межвитковых вставок в пружины. Какие материалы лучше, сколько служат и как установить своими руками.</p>
                            </div>
                        </a>
                    </li>
                    <li class="blog-posts__item">
                        <a href="/blog-post" class="blog-posts__link">
                            <span class="blog-posts__img"><img src="<?php echo get_template_directory_uri();
                            ?>/assets/img/10.jpg" alt=""></span>
                            <div href="/review" class="blog-posts__item-content">
                                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                <h4 class="h4 blog-posts__item-title">Всё про авто аукцион USS</h4>
                                <p class="blog-posts__item-text">Аукцион USS – лидер среди японских реселлеров поддержанных авто. Доступ из любой точки мира, широкая сеть филиалов, использование современных технологий и высокий уровень организации торгов.</p>
                            </div>
                        </a>
                    </li>
                    <li class="blog-posts__item">
                        <a href="/blog-post" class="blog-posts__link">
                            <span class="blog-posts__img"><img src="<?php echo get_template_directory_uri();
                            ?>/assets/img/12.jpg" alt=""></span>
                            <div href="/review" class="blog-posts__item-content">
                                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                                <h4 class="h4 blog-posts__item-title">Всё про гайковёрт для ремонта авто</h4>
                                <p class="blog-posts__item-text">Гайковерт - это инструмент, применяемый для откручивания и закручивания деталей авто с резьбовыми соединениями. Он работает по принципу электрического гаечного ключа большой мощности. Расскажем про выбор гайковерта для автомобиля. Какие бывают и отличия, цены и рекомендации по выбору.</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
get_footer('front'); ?>
