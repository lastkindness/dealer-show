<?php
/*
 * Template name: Front Promotions
 */

get_header('front'); ?>
<section class="text-content" id="text-content">
    <div class="container">
        <div class="text-content__wrapper">
            <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
            <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
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
<section class="page-title page-title_single" id="page-title">
    <div class="container">
        <div class="page-title__wrapper">
            <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
            <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
            <h2 class="title h2">Новости</h2>
            <ul class="page-title__breadcrumbs breadcrumbs">
                <li class="breadcrumbs__li">
                    <a class="breadcrumbs__link" href="#">Главная</a>
                </li>
                <li class="breadcrumbs__li active">
                    <a class="breadcrumbs__link" href="#">Новости</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="reviews" id="reviews">
    <div class="container">
        <div class="reviews__wrapper swiper-container">
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
            <div class="reviews__controls swiper-pagination"></div>
            <div class="reviews__nav swiper-nav">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>

<section class="individual-form individual-form_dark" id="individual-form">
    <div class="container">
        <div class="individual-form__wrapper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/42.jpg')">
            <div class="individual-form__content">
                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
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
<?php
get_footer('front'); ?>
