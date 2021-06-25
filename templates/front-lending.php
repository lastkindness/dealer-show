<?php
/*
 * Template name: Front Lending
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
<section class="breadcrumbs-section" id="breadcrumbs-section">
    <div class="container">
        <ul class="page-title__breadcrumbs breadcrumbs">
            <li class="breadcrumbs__li">
                <a class="breadcrumbs__link" href="#">Главная</a>
            </li>
            <li class="breadcrumbs__li active">
                <a class="breadcrumbs__link" href="#">Кредит</a>
            </li>
        </ul>
    </div>
</section>
<section class="about" id="about">
    <div class="container">
        <div class="about__wrapper">
            <div class="about__banner">
                <div class="about__banner-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/44.jpg" alt="">
                </div>
                <div class="about__banner-content">
                    <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                    <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                    <h1 class="h1 about__banner-title">
                        <span class="white">Умови </span>
                        <span class="red">кредитування</span>
                    </h1>
                    <div class="about__banner-description">
                        <p>Автокредит "Партнерський"</p>
                    </div>
                    <div class="about__banner-selection">
                        <p>Одна година на оформлення кредиту - ось все, що відділяє Вас від автомобіля!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content" id="content">
    <div class="container">
        <div class="content__wrapper">
            <div class="content__content">
                <h2 class="h2 content__title">Чому кредит на автомобіль корисний для здоров’я?</h2>
                <div class="content__text">
                    <p>Поки Ви накопичуєте потрібну суму «поволі», інфляція з’їдає Ваші гроші, ціна зростає, а стрес та роздратованість зростають разом із нею. Пропонуємо: без зайвих вигадок і відкладених рішень купити авто вже сьогодні, почати їздити на ньому вже сьогодні, а потім на ньому ж поїхати у відпустку. І нехай інші Вам заздрять!</p>
                    <p>Одна година на оформлення кредиту – ось і все, що відділяє вас від автомобіля!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lending" id="lending">
    <div class="container">
        <div class="lending__wrapper">
            <h2 class="h1 lending__title">Виняткові переваги</h2>
            <ul class="lending__grid">
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/bundle_of_money_icon.svg"
                         alt="">
                    <span class="lending__text">Мінімальна сума кредиту 20 тисяч гривень</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/bundle_of_money_icon.svg"
                         alt="">
                    <span class="lending__text">Максимальна сума кредиту 500 тисяч гривень</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar_icon.svg"
                         alt="">
                    <span class="lending__text">Мінімальний строк кредитування - 12 місяців</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/60m_icon.svg"
                         alt="">
                    <span class="lending__text">Максимальний строк кредитування - 60 місяців</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/car_icon.svg"
                         alt="">
                    <span class="lending__text">Річна процентна ставка 0,01% (нараховуються на сумму фактичного
                        залишку тіла кредиту)</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar_icon.svg"
                         alt="">
                    <span class="lending__text">Щомісячна комісія при сумі кредиту:<br>від 20 до 1000 тис. грн. - 2,
                        2%<br>від 100 до 200 тис. грн. - 1,85%<br>від 200 тис. грн. включно - 1,65%<br>(розраховуєтся
                        у процентах від початкової суми кредиту)
                    </span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/settings_auto_icon.svg"
                         alt="">
                    <span class="lending__text">Будь-який рік випуску авто</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/no_insurance_icon.svg"
                         alt="">
                    <span class="lending__text">Відсутність страхування</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/bez_zastavy_icon.svg"
                         alt="">
                    <span class="lending__text">Відсутність застави та поручителів</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/no_shtraf_icon.svg"
                         alt="">
                    <span class="lending__text">Погашення кредиту в касі Банку - безкоштовно</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/clock1_hour_r_icon.svg"
                         alt="">
                    <span class="lending__text">Одноразова комісія за видачу кредиту - 2,99% (розраховуєтся
                        у процентах від початкової суми кредиту)</span>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="lending" id="lending2">
    <div class="container">
        <div class="lending__wrapper">
            <h2 class="h1 lending__title">Умови кредитування</h2>
            <ul class="lending__grid">
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/passport_icon.svg"
                         alt="">
                    <span class="lending__text">Ви громадянин України</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/25y_icon.svg"
                         alt="">
                    <span class="lending__text">Ваш вік – від 25 до 60 років</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/skills_icon.svg"
                         alt="">
                    <span class="lending__text">Ви працюєте понад 12 місяців</span>
                </li>
                <li class="lending__item">
                    <img class="lending__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/contract_icon.svg"
                         alt="">
                    <span class="lending__text">Ви маєте офіційний дохід понад 8 тисяч гривень</span>
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
<?php
get_footer('front'); ?>
