<?php
/*
 * Template name: Front Content
 */

get_header('front'); ?>
<section class="breadcrumbs-section" id="breadcrumbs-section">
    <div class="container">
        <ul class="page-title__breadcrumbs breadcrumbs">
            <li class="breadcrumbs__li">
                <a class="breadcrumbs__link" href="#">Главная</a>
            </li>
            <li class="breadcrumbs__li">
                <a class="breadcrumbs__link" href="#">Блог</a>
            </li>
            <li class="breadcrumbs__li active">
                <a class="breadcrumbs__link" href="#">Название публикации</a>
            </li>
        </ul>
    </div>
</section>
<section class="content-banner" id="content-banner">
    <div class="container">
        <div class="content-banner__wrapper">
            <div class="content-banner__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/50.jpg" alt="">
            </div>
            <div class="content-banner__content">
                <span class="content-banner__date">31 Августа 2021</span>
                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                <h1 class="h1 content-banner__title">Название публикации возможно в несколько строк</h1>
            </div>
        </div>
    </div>
</section>
<section class="content" id="content">
    <div class="container">
        <!--все что лежит в content__wrapper это WYSIWYG, просто я раскидываю стили для стандартных блоков которые могут
        туда попасть-->
        <!--классы alignleft alignright aligncenter alignnone - это классы которые присваивает сам WYSIWYG когда
        добавляешь изображение и тыкаешь как его выровнять-->
        <div class="content__wrapper">
            <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
            <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
            <h2>Истоки Lorem Ipsum</h2>
            <p>Классический «Lorem ipsum dolor sit amet…» проход отнести к ремиксов римского философа Цицерона 45 г. до н.э. текст De Finibus Bonorum et Malorum («О крайностями добра и зла»). Более конкретно, проход, как полагают, происходит из секций 1.10.32 - 33 из его текста, с наиболее заметным часть извлечена ниже:
            </p>
            <p><strong>“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
                    1914 Английский перевод Harris Rackham гласит:
                </strong></p>
            <p>“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.”
                По латыни профессор Richard McClintock - человек, которому приписывают открытие корни Lorem Ipsum - он, скорее всего, что когда-то в средние века наборщиком вскарабкался часть Цицерона De Finibus для того, чтобы предоставить текст-заполнитель для смоделируйте различных шрифтов для типа образца книги. Но это было только начало.</p>
            <blockquote>
                <p>Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание модели развития. Значимость этих проблем настолько очевидна, что постоянное информационно пропагандистское обеспечение нашей деятельности влечет за собой</p>
                <cite>философ Цицерон 45 г. до н.э.</cite>
            </blockquote>
            <img class="alignleft" src="<?php echo get_template_directory_uri(); ?>/assets/img/39.jpg" alt="">
            <h2>Истоки Lorem Ipsum</h2>
            <p>Классический «Lorem ipsum dolor sit amet…» проход отнести к ремиксов римского философа Цицерона 45 г. до н.э. текст De Finibus Bonorum et Malorum («О крайностями добра и зла»). Более конкретно, проход, как полагают, происходит из секций 1.10.32 - 33 из его текста, с наиболее заметным часть извлечена ниже:
            </p>
            <p>“Neque porro quisquam est, <a href="#">qui dolorem ipsum quia dolor sit amet</a>, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
                1914 Английский перевод Harris Rackham гласит:
            </p>
            <p>“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and</p>
            <h2>Истоки Lorem Ipsum</h2>
            <p>Классический «Lorem ipsum dolor sit amet…» проход отнести к ремиксов римского философа Цицерона 45 г. до н.э. текст De Finibus Bonorum et Malorum («О крайностями добра и зла»). Более конкретно, проход, как полагают, происходит из секций 1.10.32 - 33 из его текста, с наиболее заметным часть извлечена ниже:
            </p>
            <p>“Neque porro quisquam est, <a href="#">qui dolorem ipsum quia dolor sit amet</a>, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
                1914 Английский перевод Harris Rackham гласит:
            </p>
            <p>“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and</p>
            <ol>
                <li>Есть много вариантов Lorem Ipsum, но большинство из них имеет</li>
                <li>Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений.</li>
                <li>Есть много вариантов Lorem Ipsum, но большинство из них имеет</li>
                <li>Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений.</li>
            </ol>
            <img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/assets/img/50.jpg" alt="">
            <figcaption>Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений.</figcaption>
            <ul>
                <li>Есть много вариантов Lorem Ipsum, но большинство из них имеет</li>
                <li>Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений.</li>
                <li>Есть много вариантов Lorem Ipsum, но большинство из них имеет</li>
                <li>Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений.</li>
            </ul>
            <img class="alignright" src="<?php echo get_template_directory_uri(); ?>/assets/img/39.jpg" alt="">
            <h2>Истоки Lorem Ipsum</h2>
            <p>Классический «Lorem ipsum dolor sit amet…» проход отнести к ремиксов римского философа Цицерона 45 г. до н.э. текст De Finibus Bonorum et Malorum («О крайностями добра и зла»). Более конкретно, проход, как полагают, происходит из секций 1.10.32 - 33 из его текста, с наиболее заметным часть извлечена ниже:
            </p>
            <p>“Neque porro quisquam est, <a href="#">qui dolorem ipsum quia dolor sit amet</a>, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
                1914 Английский перевод Harris Rackham гласит:
            </p>
            <p>“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and</p>
            <mark>Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание модели развития. Значимость этих проблем настолько очевидна, что постоянное информационно пропагандистское обеспечение нашей деятельности влечет за собой</mark>
            <iframe width="420" height="345" src="https://www.youtube.com/embed/DSY--BB_APk">
            </iframe>
            <figcaption>Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений.</figcaption>
            <a href="https://youtu.be/DSY--BB_APk" data-fancybox="video">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/33.jpg" title="TOYOTA Camry" alt="TOYOTA Camry"/>
            </a>
            <figcaption>Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений.</figcaption>

        </div>
    </div>
</section>
<section class="blog-posts" id="blog-posts">
    <div class="container">
        <div class="blog-posts__wrapper">
            <div class="blog-posts__title">
                <!--                                может быть как тайтл разных уровней (h1-h1) так и div. Это нужно для СЕО. Чтоб -->
                <!--                                сеошники сами регулировали где нужны тайтлы, а где нет-->
                <h2 class="title h1">Читайте также</h2>
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
