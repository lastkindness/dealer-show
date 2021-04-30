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
                    <img class="hero-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" alt="hero-slider">
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
                    <img class="hero-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/8.jpg"
                         alt="hero-slider">
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
                    <img class="hero-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/13.jpg"
                         alt="hero-slider">
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
                <h2 class="title h2">Подобрать авто</h2>
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
                <h2 class="title h2">Топовые автомобили</h2>
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
<section class="faq" id="faq">
    <div class="faq-wrapper">
        <div class="container">
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
<?php
get_footer('front'); ?>
