<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php # TODO: code here ?>
<div class="wrapper">
    <header class="header">
        <div class="header__wrapper">
            <div class="header__menu">
                <div class="container">
                    <div class="header__menu-wrapper">
                        <ul class="navbar menu">
                            <li class="menu-item current-menu-item">
                                <a href="#">О нас</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Отзывы</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Акции</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Доставка/Растаможка</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Кредит</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Сотрудничество</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Страхование</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Новости</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Вакансии</a>
                            </li>
                        </ul>
                        <ul class="social-list header__menu-social">
                            <li class="social-item">
                                <a href="https://www.facebook.com/" class="icon icon-facebook" target="_blank"></a>
                            </li>
                            <li class="social-item">
                                <a href="https://www.instagram.com/" class="icon icon-instagram" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header__main">
                <div class="container">
                    <div class="header__main-wrapper">
                        <div class="header__info">
                            <a href="#" class="header__logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="header logo">
                            </a>
                            <ul class="header__lang">
                                <li class="header__lang-item active"><a href="#RUS">RUS</a></li>
                                <li class="header__lang-item"><a href="#UKR">UKR</a></li>
                            </ul>
                            <a href="https://www.youtube.com/" class="header__youtube-link" target="_blank">
                                <span class="text">dealer ШОУ</span>
                                <span class="icon icon-youtube"></span>
                            </a>
                            <form role="search" class="header__search search-form" method="get" action="#">
                                <input type="search" class="search-field" placeholder="Поиск по сайту" value="" name="s">
                                <button type="submit" class="icon icon-search"></button>
                            </form>
                            <ul class="header__messengers social-list">
                                <li class="social-item">
                                    <a href="https://telegram.me/groupe_name" class="icon icon-telegram" target="_blank"></a>
                                </li>
                                <li class="social-item">
                                    <a href="viber://chat/?number=%2B380966771503" class="icon icon-viber"
                                       target="_blank"></a>
                                </li>
                            </ul>
                            <div class="header__phones">
                                <div class="dropdown js__dropdown">
                                    <div class="dropdown__header">
                                <span class="dropdown__header-item">
                                    <a href="tel:+380936164441" class="text">+38 (093) 616-44-41</a>
                                    <span class="icon icon-arr_down2"></span>
                                </span>
                                    </div>
                                    <ul class="dropdown__dropdown">
                                        <li id="red" class="dropdown__item">
                                            <a href="tel:+380936164442" class="dropdown__text">+38 (093) 616-44-42</a>
                                        </li>
                                        <li id="blue" class="dropdown__item">
                                            <a href="tel:+380936164443" class="dropdown__text">+38 (093) 616-44-43</a>
                                        </li>
                                        <li id="green" class="dropdown__item">
                                            <a href="tel:+380936164444" class="dropdown__text">+38 (093) 616-44-44</a>
                                        </li>
                                    </ul>
                                </div>
                                <a data-fancybox="modal-phone" data-src="#modal-phone" href="#modal-phone" class="modal-inline">
                                    <span class="icon icon-phone"></span>
                                    <span class="title">Заказать звонок</span>
                                </a>
                            </div>
                        </div>
                        <div class="header__catalog">
                            <div class="header__catalog-hidden">
                                <a href="/catalog" class="btn btn_secondary">
                                    <span class="icon" style="-webkit-mask-box-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/tire.svg'); mask: url('<?php echo get_template_directory_uri(); ?>/assets/img/tire.svg');"></span>
                                    <span class="title">Каталог</span>
                                </a>
                            </div>
                            <div class="header__catalog-menu">
                                <ul class="navbar menu">
                                    <li class="menu-item current-menu-item menu-item-has-children">
                                        <a href="#">автомобили</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item current-menu-item">
                                                <a href="#">Volkswagen</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Mercedes-Benz</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Opel</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Renault</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">BMW</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Ford</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Audi</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Toyota</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">мото техника</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item current-menu-item">
                                                <a href="#">Volkswagen</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Mercedes-Benz</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Opel</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Renault</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">BMW</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Ford</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Audi</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Toyota</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Электрокары</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item current-menu-item">
                                                <a href="#">Volkswagen</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Mercedes-Benz</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Opel</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Renault</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">BMW</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Ford</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Audi</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Toyota</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Под заказ</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">В украине</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">услуги</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">контакты</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
