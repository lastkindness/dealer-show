<?php
/*
 * Template name: Шаблон.Каталог
 */

get_header(); ?>

<section class="page-title" id="page-title-scroll">
    <div class="container">
        <div class="page-title__wrapper">
            <div class="page-title__dropdown">
                <span class="dropdown__title">Cортировать:</span>
                <div class="dropdown js__dropdown">
                    <div class="dropdown__header">
                        <span class="dropdown__header-item">
                            <span class="text" data-value="price-date-new">по дате добавления сначала новые</span>
                            <span class="icon icon-arr_down2"></span>
                        </span>
                    </div>
                    <ul class="dropdown__dropdown">
                        <li id="blue" class="dropdown__item">
                            <span class="dropdown__text" data-value="price-date-new">по дате добавления сначала новые</span>
                        </li>
                        <li id="white" class="dropdown__item">
                            <span class="dropdown__text" data-value="price-date-old">по дате добавления сначала старые</span>
                        </li>
                        <li id="red" class="dropdown__item">
                            <span class="dropdown__text" data-value="price-more">цена от большей к меньшей</span>
                        </li>
                        <li id="green" class="dropdown__item">
                            <span class="dropdown__text" data-value="price-less">цена от меньшей к большей</span>
                        </li>
                    </ul>
                </div>
            </div>
            <h2 class="title h2">Каталог</h2>

            <?php if(function_exists('bcn_display')) : ?>

	            <ul class="page-title__breadcrumbs breadcrumbs">
	                <?php bcn_display(); ?>
	            </ul>

	        <?php endif ; ?>

        </div>
    </div>
</section>

<section class="catalog">
    <div class="container">
        <div class="catalog__wrapper">

        	<aside class="catalog__filter">

        		<div class="ajax-choose-holder"></div>

                <div class="catalog__filter-wrapper">

                	<div class="catalog__filter-head">
                        <div class="catalog__filter-title h3">Фильтры</div>
                        <div class="plus icon icon-up"></div>
                        <?php

                            if( isset( $_GET['type'] ) && $_GET['type'] !== '' ){

                                $get_type = $_GET['type'] ;

                                switch ( $get_type ) {
                                    case 'electrocars':
                                        $get_type_title = 'Электрокары' ;
                                        break;
                                    case 'mototechnics':
                                        $get_type_title = 'Мототехника' ;
                                        break;
                                    case 'cars':
                                        $get_type_title = 'Автомобили' ;
                                        break;
                                }


                            }else{
                                $get_type = 'cars' ;
                                $get_type_title = 'Автомобили' ;
                            }

                        ?>

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
                                        <span class="text" data-value="<?php echo $get_type ; ?>"><?php echo $get_type_title ; ?></span>
                                        <span class="icon icon-arr_down2"></span>
                                    </span>
                                </div>
                                <ul class="dropdown__dropdown">
                                    <li id="сars-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-value="cars">Автомобили</span>
                                    </li>
                                    <li id="mototehnic-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-value="mototechnics">Мототехника</span>
                                    </li>
                                    <li id="electrocars-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-value="electrocars">Электрокары</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <?php

                        if( isset( $_GET['cost-from'] ) && $_GET['cost-from'] !== '' ){
                            $min_price_val = intval( $_GET['cost-from'] ) ;
                        }else{
                            $min_price_val = '0' ;
                        }

                        if( isset( $_GET['cost-up-to'] ) && $_GET['cost-up-to'] !== '' ){
                            $max_price_val = intval( $_GET['cost-up-to'] ) ;
                        }else{
                            $max_price_val = '100000' ;
                        }

                    ?>

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
                                               value="<?php echo $min_price_val ; ?>" readonly
                                               class="catalog__filter_item_range_from catalog__filter_item_range_from_price">
                                    </div>
                                    <div class="catalog__filter_item_range_input">
                                        <span>до</span>
                                        <input type="text" data-slider-min="0" data-slider-max="100000" data-value="100000" value="<?php echo $max_price_val ; ?>" readonly
                                               class="catalog__filter_item_range_to catalog__filter_item_range_to_price">
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

                    <?php

                    	$issue_year = get_terms( array(
						    'taxonomy' => 'issue_year',
						    'hide_empty' => true
						) );

                    ?>

                    <?php if( !empty($issue_year) ) : ?>

                    	<?php

                    		$year_arr = array() ;

                    		foreach( $issue_year as $year ){
                    			array_push( $year_arr, intval($year->name) ) ;
                    		}

                    		$min_year = min($year_arr) ;
                    		$max_year = max($year_arr) ;

                            if( isset( $_GET['year-of-issue'] ) && $_GET['year-of-issue'] !== '' ){
                                $min_year_val = intval( $_GET['year-of-issue'] ) ;
                            }else{
                                $min_year_val = min($year_arr) ;
                            }

                            if( isset( $_GET['year-of-ending'] ) && $_GET['year-of-ending'] !== '' ){
                                $max_year_val = intval( $_GET['year-of-ending'] ) ;
                            }else{
                                $max_year_val = max($year_arr) ;
                            }

                    	?>

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
	                                        <input type="text" data-slider-min="<?php echo $min_year ; ?>" data-slider-max="<?php echo $max_year ; ?>"
	                                               data-value="<?php echo $min_year ; ?>"
	                                               value="<?php echo $min_year_val ; ?>" readonly
	                                               class="catalog__filter_item_range_from catalog__filter_item_range_from_year">
	                                    </div>
	                                    <div class="catalog__filter_item_range_input">
	                                        <span>до</span>
	                                        <input type="text" data-slider-min="<?php echo $min_year ; ?>" data-slider-max="<?php echo $max_year ; ?>" data-value="<?php echo $max_year ; ?>" value="<?php echo $max_year_val ; ?>" readonly
	                                               class="catalog__filter_item_range_to catalog__filter_item_range_to_year">
	                                    </div>
	                                </div>
	                            </div>
	                            <div data-from="<?php echo $min_year ; ?>" data-to="<?php echo $max_year ; ?>" class="catalog__filter_item_range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
	                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
	                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
	                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
	                            </div>
	                        </div>
	                    </div>

                    <?php endif  ?>

                    <div class="filter-manufacturer-by-type">
                    	<div class="catalog__filter_item"></div>
                    </div>

	                <div class="filter-model-by-manufacturer"></div>

	                <div class="filters-by-type"></div>

	                <div class="catalog__filter_button">
                        <button class="btn btn_fullwidth">Применить фильтры</button>
                    </div>

                </div>

        	</aside>

            <div class="catalog__grid"></div>

       	</div>
    </div>
</section>

<?php if( $show_contacts = get_field('show_contacts') ) : ?>

    <section class="map-section" id="map-section">
        <div class="container">
            <div class="map-section__wrapper">
                <?php $data_center = get_field('data_center');
                $data_marker = get_field('data_marker') ?>
                <?php if($data_center && $data_marker) : ?>
                    <div class="map" id="map" data-center="<?php echo  $data_center; ?>" data-marker="<?php echo  $data_marker; ?>">

                    </div>
                <?php endif ; ?>
                <ul class="map__info">

                    <?php if( have_rows('contacts_phones') ) : ?>

                        <?php while( have_rows('contacts_phones') ) : the_row(); ?>

                            <?php if( $phone = get_sub_field('phone') ) : ?>
                                <li class="map__info-item">
                                    <span class="icon icon-phone"></span>
                                    <a href="tel:<?php echo clean_phone( $phone ) ; ?>"><?php echo $phone ; ?></a>
                                </li>
                            <?php endif ; ?>

                        <?php endwhile ; ?>

                    <?php endif ; ?>

                    <?php if( $email = get_field('email') ) : ?>
                        <li class="map__info-item">
                            <span class="icon icon-mail"></span>
                            <a href="mailto:<?php echo antispambot( $email ) ; ?>"><?php echo antispambot( $email ) ; ?></a>
                        </li>
                    <?php endif ; ?>

                    <?php if( $adress = get_field('adress') ) : ?>
                        <li class="map__info-item">
                            <span class="icon icon-map"></span>
                            <address><?php echo $adress ; ?></address>
                        </li>
                    <?php endif ; ?>

                    <?php if( have_rows('messangers') ) : ?>
                        <li class="map__info-item">
                            <span class="text">Мессенджеры:</span>
                            <ul class="social-list">

                                <?php while( have_rows('messangers') ) : the_row(); ?>

                                    <?php

                                        $link = get_sub_field('link') ;
                                        $icon = get_sub_field('icon') ;

                                    ?>

                                    <?php if( $icon && $link ) : ?>
                                        <li class="social-item">
                                            <a href="<?php echo $link ; ?>" class="icon icon-<?php echo $icon ; ?>" target="_blank"></a>
                                        </li>
                                    <?php endif ; ?>

                                <?php endwhile ; ?>

                            </ul>
                        </li>
                    <?php endif ; ?>

                </ul>
            </div>
        </div>
    </section>

<?php endif ; ?>

<?php

    $seo_text_title = get_field('seo_text_title') ;
    $seo_text_content = get_field('seo_text_content') ;

?>

<?php if( $seo_text_content ) : ?>
    <section class="text-content" id="text-content">
        <div class="container">
            <div class="text-content__wrapper">

                <?php if( $seo_text_title ) : ?>
                    <h1 class="h3 text-content__title"><?php echo $seo_text_title ; ?></h1>
                <?php endif ; ?>

                <div class="text-content__container">
                    <div class="text-content__item">

                        <?php echo $seo_text_content ; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ; ?>

<?php get_footer(); ?>
