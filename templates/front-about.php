<?php
/*
 * Template name: Front About
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
                <a class="breadcrumbs__link" href="#">О нас</a>
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
                        <span class="white">О нашей</span>
                        <span class="red">компании</span>
                    </h1>
                    <div class="about__banner-description">
                        <p>Классический «Lorem ipsum dolor sit amet…» проход отнести к ремиксов римского философа Цицерона 45 г. до н.э. текст De Finibus Bonorum et Malorum («О крайностями добра и зла»). Более конкретно, проход, как полагают, происходит из секций 1.10.32 - 33 из его текста, с наиболее заметным часть извлечена ниже</p>
                    </div>
                    <div class="about__banner-selection">
                        <p>Более конкретно, проход, как полагают, происходит из секций 1.10.32 - 33 из его текста, с наиболее заметным часть извлечена ниже:</p>
                    </div>
                </div>
            </div>
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
</section>
<section class="content" id="content">
    <div class="container">
        <div class="content__wrapper">
            <div class="content__content">
                <h2 class="h2 content__title">Истоки Lorem Ipsum</h2>
                <div class="content__text">
                    <p>Классический «Lorem ipsum dolor sit amet…» проход отнести к ремиксов римского философа Цицерона 45 г. до н.э. текст De Finibus Bonorum et Malorum («О крайностями добра и зла»). Более конкретно, проход, как полагают, происходит из секций 1.10.32 - 33 из его текста, с наиболее заметным часть извлечена ниже:</p>
                    <p>“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
                        1914 Английский перевод Harris Rackham гласит:</p>
                    <p>“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.”
                        По латыни профессор Richard McClintock - человек, которому приписывают открытие корни Lorem Ipsum - он, скорее всего, что когда-то в средние века наборщиком вскарабкался часть Цицерона De Finibus для того, чтобы предоставить текст-заполнитель для смоделируйте различных шрифтов для типа образца книги. Но это было только начало.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="warranty warranty_dark" id="warranty">
    <div class="container">
        <div class="warranty__wrapper">
            <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
            <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
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
<section class="content" id="content1">
    <div class="container">
        <div class="content__wrapper">
            <div class="content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/39.jpg" alt="">
            </div>
            <div class="content__content">
                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                <h2 class="h2 content__title">Истоки Lorem Ipsum</h2>
                <div class="content__text">
                    <p>Классический «Lorem ipsum dolor sit amet…» проход отнести к ремиксов римского философа Цицерона 45 г. до н.э. текст De Finibus Bonorum et Malorum («О крайностями добра и зла»). Более конкретно, проход, как полагают, происходит из секций 1.10.32 - 33 из его текста, с наиболее заметным часть извлечена ниже:</p>
                    <p>“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
                        1914 Английский перевод Harris Rackham гласит:</p>
                    <p>“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.”
                        По латыни профессор Richard McClintock - человек, которому приписывают открытие корни Lorem Ipsum - он, скорее всего, что когда-то в средние века наборщиком вскарабкался часть Цицерона De Finibus для того, чтобы предоставить текст-заполнитель для смоделируйте различных шрифтов для типа образца книги. Но это было только начало.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content" id="content2">
    <div class="container">
        <div class="content__wrapper">
            <div class="content__content">
                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                <h2 class="h2 content__title">Истоки Lorem Ipsum</h2>
                <div class="content__text">
                    <p>Классический «Lorem ipsum dolor sit amet…» проход отнести к ремиксов римского философа Цицерона 45 г. до н.э. текст De Finibus Bonorum et Malorum («О крайностями добра и зла»). Более конкретно, проход, как полагают, происходит из секций 1.10.32 - 33 из его текста, с наиболее заметным часть извлечена ниже:</p>
                    <p>“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
                        1914 Английский перевод Harris Rackham гласит:</p>
                    <p>“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.”
                        По латыни профессор Richard McClintock - человек, которому приписывают открытие корни Lorem Ipsum - он, скорее всего, что когда-то в средние века наборщиком вскарабкался часть Цицерона De Finibus для того, чтобы предоставить текст-заполнитель для смоделируйте различных шрифтов для типа образца книги. Но это было только начало.</p>
                </div>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg" alt="">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.jpg" alt="">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/10.jpg" alt="">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/12.jpg" alt="">
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
