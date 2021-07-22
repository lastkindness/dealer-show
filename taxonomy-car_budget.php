<?php get_header(); ?>

<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

<section class="page-title" id="page-title-scroll" data-budget-car="<?php echo $term->term_id ?>">
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
            <h2 class="title h2"><?php echo $term->name ; ?></h2>

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
                    </div>
                    <div class="catalog__filter_item" style="display: none;">

                    	<div class="catalog__filter_item_title filter-title">
                            <div class="plus icon icon-up"></div>
                            <div class="filter-subtitle"><span>Тип транспортного средства</span></div>
                        </div>
                        <div class="catalog__filter_item_content close">
                            <div class="dropdown js__dropdown">
                                <div class="dropdown__header">
                                    <span class="dropdown__header-item">
                                        <span class="text" data-value="cars">Автомобили</span>
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

                    <div class="catalog__filter_item" style="display: none;">
                        <div class="catalog__filter_item_title filter-title">
                            <div class="plus icon icon-up"></div>
                            <div class="filter-subtitle"><span>Стоимость, $</span></div>
                        </div>
                        <div class="catalog__filter_item_content close catalog__filter_item_content-price">
                            <div class="range range_price">
                                <div class="range-wrapper">
                                    <div class="catalog__filter_item_range_input">
                                        <span>от</span>
                                        <input type="text" data-slider-min="0" data-slider-max="100000" data-value="0"
                                               value="0" readonly
                                               class="catalog__filter_item_range_from catalog__filter_item_range_from_price">
                                    </div>
                                    <div class="catalog__filter_item_range_input">
                                        <span>до</span>
                                        <input type="text" data-slider-min="0" data-slider-max="100000" data-value="100000" value="100000" readonly
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

                    	?>

                    	<div class="catalog__filter_item" style="display: none;">
	                        <div class="catalog__filter_item_title filter-title">
	                            <div class="plus icon icon-up"></div>
	                            <div class="filter-subtitle"><span>Год выпуска</span></div>
	                        </div>
	                        <div class="catalog__filter_item_content close catalog__filter_item_content-year">
	                            <div class="range range_year">
	                                <div class="range-wrapper">
	                                    <div class="catalog__filter_item_range_input">
	                                        <span>от</span>
	                                        <input type="text" data-slider-min="<?php echo $min_year ; ?>" data-slider-max="<?php echo $max_year ; ?>"
	                                               data-value="<?php echo $min_year ; ?>"
	                                               value="<?php echo $min_year ; ?>" readonly
	                                               class="catalog__filter_item_range_from catalog__filter_item_range_from_year">
	                                    </div>
	                                    <div class="catalog__filter_item_range_input">
	                                        <span>до</span>
	                                        <input type="text" data-slider-min="<?php echo $min_year ; ?>" data-slider-max="<?php echo $max_year ; ?>" data-value="<?php echo $max_year ; ?>" value="<?php echo $max_year ; ?>" readonly
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

<?php get_footer(); ?>
