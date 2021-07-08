<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico"
          type="image/x-icon">
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>

    <script>
      (function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
      })(window,document,'https://cdn.bitrix24.ua/b16762871/crm/site_button/loader_2_uwhzmz.js');
    </script>

    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-NGVRFXV');</script>
    <!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGVRFXV"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php # TODO: code here ?>
<div class="wrapper">

    <?php

    $logo = get_field('logo', 'option') ;
    $youtube_link = get_field('youtube_link', 'option') ;

    ?>

    <header class="header">
        <div class="header__mobile header__main">
            <div class="container">
                <div class="header__main-wrapper">
                    <div class="header__info">
                        <div class="burger header__burger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <?php if( $logo ) : ?>
                            <a href="<?php echo home_url() ; ?>" class="header__logo">
                                <img src="<?php echo $logo['url'] ; ?>" alt="<?php echo $logo['alt'] ; ?>">
                            </a>
                        <?php endif ; ?>

                        <a data-fancybox="modal-phone1" href="#modal-phone"
                           class="header__phone-mobile">
                            <span class="icon icon-phone"></span>
                            <span class="circle"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__wrapper">
            <div class="header__menu">
                <div class="container">
                    <div class="header__menu-wrapper">

                        <?php if( has_nav_menu( 'primary' ) ) : ?>

                            <?php
                            wp_nav_menu( array(
                                    'container' => false,
                                    'theme_location' => 'primary',
                                    'menu_id'        => 'navigation',
                                    'menu_class'     => 'navbar menu',
                                    'items_wrap'     => '<ul id="%1$s" class="navbar menu">%3$s</ul>'
                                )
                            );

                            ?>

                        <?php endif ; ?>

                        <?php if( $languages = get_field('languages', 'option') ) : ?>

                            <!-- GTranslate: https://gtranslate.io/ -->

                            <ul class="header__lang">
                                <li class="header__lang-item is-active-ru">
                                    <a href="#" onclick="doGTranslate('ru|ru');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Russian" class="nturl selected">RUS</a>
                                </li>
                                <li class="header__lang-item is-active-uk">
                                    <a href="#" onclick="doGTranslate('ru|uk');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Ukrainian" class="nturl">UKR</a>
                                </li>
                            </ul>

                            <div id="google_translate_element2"></div>

                        <?php endif ; ?>

                    </div>
                </div>
            </div>
            <div class="header__main">
                <div class="container">
                    <div class="header__main-wrapper">
                        <div class="header__info">

                            <div class="burger header__burger">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <?php if( $logo ) : ?>

                                <a href="<?php echo home_url() ; ?>" class="header__logo">
                                    <img src="<?php echo $logo['url'] ; ?>" alt="<?php echo $logo['alt'] ; ?>">
                                </a>

                            <?php endif ; ?>

                            <a data-fancybox="modal-phone" href="#modal-phone"
                               class="header__phone-mobile">
                                <span class="icon icon-phone"></span>
                                <span class="circle"></span>
                            </a>

                            <?php if( $search = get_field('search', 'option') ) : ?>

                                <form role="search" method="get" class="header__search search-form" action="<?php echo home_url(); ?>" >
                                    <input type="search" class="search-field" name="s" placeholder="Поиск по сайту" value="<?php echo get_search_query(); ?>" />
                                    <button type="submit" class="icon icon-search"></button>
                                </form>

                            <?php endif ; ?>

                            <?php if( $youtube_link['url'] && $youtube_link['title'] ) : ?>

                                <a href="<?php echo $youtube_link['url'] ; ?>" class="header__youtube-link" target="_blank">
                                    <span class="text"><?php echo $youtube_link['title'] ; ?></span>
                                    <span class="icon icon-youtube"></span>
                                </a>

                            <?php endif ; ?>

                            <?php

                            $telegram_chat = get_field('telegram_chat', 'option') ;
                            $viber_chat = get_field('viber_chat', 'option') ;
                            $facebook_chat = get_field('facebook_chat', 'option') ;
                            $instagram_chat = get_field('instagram_chat', 'option') ;

                            ?>

                            <?php if( $viber_chat || $telegram_chat || $facebook_chat || $instagram_chat ) : ?>

                                <ul class="header__messengers social-list">

                                    <?php if( $facebook_chat ) : ?>
                                        <li class="social-item">
                                            <a href="<?php echo $facebook_chat ; ?>" class="icon icon-facebook" target="_blank"></a>
                                        </li>
                                    <?php endif ; ?>

                                    <?php if( $instagram_chat ) : ?>
                                        <li class="social-item">
                                            <a href="<?php echo $instagram_chat ; ?>" class="icon icon-instagram" target="_blank"></a>
                                        </li>
                                    <?php endif ; ?>

                                    <?php if( $telegram_chat ) : ?>
                                        <li class="social-item">
                                            <a href="<?php echo $telegram_chat ; ?>" class="icon icon-telegram" target="_blank"></a>
                                        </li>
                                    <?php endif ; ?>

                                    <?php if( $viber_chat ) : ?>
                                        <li class="social-item">
                                            <a href="<?php echo $viber_chat ; ?>" class="icon icon-viber"
                                               target="_blank"></a>
                                        </li>
                                    <?php endif ; ?>

                                </ul>

                            <?php endif ; ?>

                            <div class="header__phones">

                                <?php if( $default_phone = get_field('default_phone', 'option') ) : ?>

                                    <div class="dropdown js__dropdown">

                                        <div class="dropdown__header">
			                                <span class="dropdown__header-item">
			                                    <a href="tel:<?php echo clean_phone( $default_phone ) ; ?>" class="text"><?php echo $default_phone ; ?></a>
			                                    <span class="icon icon-arr_down2"></span>
			                                </span>
                                        </div>

                                        <?php if( have_rows('additional_phone', 'option') ) :  ?>

                                            <ul class="dropdown__dropdown">

                                                <?php while( have_rows('additional_phone', 'option') ) : the_row(); ?>

                                                    <?php

                                                    $phone = get_sub_field('phone') ;

                                                    ?>

                                                    <li id="phone-<?php echo get_row_index(); ?>" class="dropdown__item">
                                                        <a href="tel:<?php echo clean_phone( $phone ) ; ?>" class="dropdown__text"><?php echo $phone ; ?></a>
                                                    </li>

                                                <?php endwhile ; ?>

                                            </ul>

                                        <?php endif ; ?>

                                    </div>

                                <?php endif ; ?>

                                <?php

                                $text_call_back_form = get_field('text_call_back_form', 'option') ;
                                $call_back_form = get_field('call_back_form', 'option') ;

                                ?>

                                <?php if( $call_back_form && $text_call_back_form ) : ?>
                                    <a data-fancybox="modal-phone2" data-src="#modal-phone" href="#modal-phone" class="modal-inline">
                                        <span class="icon icon-phone"></span>
                                        <span class="title"><?php echo $text_call_back_form ; ?></span>
                                    </a>
                                <?php endif ; ?>

                            </div>

                        </div>
                        <div class="header__catalog">

                            <?php if( $catalog_link = get_field('catalog_link','option') ) : ?>
                                <div class="header__catalog-hidden">
                                    <a href="<?php echo $catalog_link['url'] ; ?>" class="btn btn_secondary">
                                        <span class="icon" style="-webkit-mask-box-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/tire.svg'); mask: url('<?php echo get_template_directory_uri(); ?>/assets/img/tire.svg');"></span>
                                        <span class="title"><?php echo $catalog_link['title'] ; ?></span>
                                    </a>
                                </div>
                            <?php endif ; ?>

                            <?php if( has_nav_menu( 'main-menu' ) ) : ?>

                                <div class="header__catalog-menu">

                                    <?php
                                    wp_nav_menu( array(
                                            'container' => false,
                                            'theme_location' => 'main-menu',
                                            'menu_id'        => 'navigation',
                                            'menu_class'     => 'navbar menu',
                                            'items_wrap'     => '<ul id="%1$s" class="navbar menu">%3$s</ul>',
                                            'walker'         => new Custom_Walker_Nav_Menu
                                        )
                                    );

                                    ?>

                                </div>

                            <?php endif ; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header header_sticky">
        <div class="header__wrapper">
            <div class="header__main">
                <div class="container">
                    <div class="header__main-wrapper">
                        <div class="header__catalog">

                            <?php if( $catalog_link = get_field('catalog_link','option') ) : ?>
                                <div class="header__catalog-hidden">
                                    <a href="<?php echo $catalog_link['url'] ; ?>" class="btn btn_secondary">
                                        <span class="icon" style="-webkit-mask-box-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/tire.svg'); mask: url('<?php echo get_template_directory_uri(); ?>/assets/img/tire.svg');"></span>
                                        <span class="title"><?php echo $catalog_link['title'] ; ?></span>
                                    </a>
                                </div>
                            <?php endif ; ?>

                            <?php if( has_nav_menu( 'main-menu' ) ) : ?>

                                <div class="header__catalog-menu">

                                    <?php
                                    wp_nav_menu( array(
                                            'container' => false,
                                            'theme_location' => 'main-menu',
                                            'menu_id'        => 'navigation',
                                            'menu_class'     => 'navbar menu',
                                            'items_wrap'     => '<ul id="%1$s" class="navbar menu">%3$s</ul>',
                                            'walker'         => new Custom_Walker_Nav_Menu
                                        )
                                    );

                                    ?>

                                </div>

                            <?php endif ; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
