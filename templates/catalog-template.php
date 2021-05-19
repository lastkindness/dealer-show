<?php
/*
 * Template name: Шаблон.Каталог
 */

get_header(); ?>

<section class="page-title">
    <div class="container">
        <div class="page-title__wrapper">
            <div class="page-title__dropdown">
                <span class="dropdown__title">Cортировать:</span>
                <div class="dropdown js__dropdown">
                    <div class="dropdown__header">
                        <span class="dropdown__header-item">
                            <span class="text">по дате</span>
                            <span class="icon icon-arr_down2"></span>
                        </span>
                    </div>
                    <ul class="dropdown__dropdown">
                        <li id="red" class="dropdown__item">
                            <span class="dropdown__text">цена от большей к меньшей</span>
                        </li>
                        <li id="blue" class="dropdown__item">
                            <span class="dropdown__text">цена от меньшей к большей</span>
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

        		<!-- <div class="catalog__filter-wrapper">
                    <div class="catalog__filter-choose">
                        <div class="catalog__filter-choose-head">
                            <div class="catalog__filter-choose-title h3">Вы выбрали:</div>
                        </div>
                        <div class="catalog__filter-choose-items">
                            <div class="btn btn_secondary"><span>Под заказ</span><span class="icon icon-close"></span></div>
                            <div class="btn btn_secondary"><span>Автомобили</span><span class="icon icon-close"></span></div>
                        </div>
                        <div class="catalog__filter-choose-matched">Подобрано 45 из 362</div>
                        <div class="catalog__filter-choose-clear">Очистить всё</div>
                    </div>
                </div> -->

                <div class="catalog__filter-wrapper">

                	<div class="catalog__filter-head">
                        <div class="catalog__filter-title h3">Фильтры</div>
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
                                        <span class="text" data-transport="cars">Автомобили</span>
                                        <span class="icon icon-arr_down2"></span>
                                    </span>
                                </div>
                                <ul class="dropdown__dropdown">
                                    <li id="сars-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-transport="cars">Автомобили</span>
                                    </li>
                                    <li id="mototehnic-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-transport="electrocars">Мототехника</span>
                                    </li>
                                    <li id="electrocars-vehicles" class="dropdown__item">
                                        <span class="dropdown__text" data-transport="mototechnics">Электрокары</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

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
                                               value="0" readonly
                                               class="catalog__filter_item_range_from">
                                    </div>
                                    <div class="catalog__filter_item_range_input">
                                        <span>до</span>
                                        <input type="text" data-slider-min="0" data-slider-max="100000" data-value="100000" value="100000" readonly
                                               class="catalog__filter_item_range_to">
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
	                                               value="<?php echo $min_year ; ?>" readonly
	                                               class="catalog__filter_item_range_from">
	                                    </div>
	                                    <div class="catalog__filter_item_range_input">
	                                        <span>до</span>
	                                        <input type="text" data-slider-min="<?php echo $min_year ; ?>" data-slider-max="<?php echo $max_year ; ?>" data-value="<?php echo $max_year ; ?>" value="<?php echo $max_year ; ?>" readonly
	                                               class="catalog__filter_item_range_to">
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

                    <?php  

                    	$car_manufacturer = get_terms( array(
						    'taxonomy' => 'car_manufacturer',
						    'parent' => 0,
						    'hide_empty' => true
						) );

                    ?>

                    <?php if( !empty($car_manufacturer) ) : ?>
	                    <div class="catalog__filter_item">
	                        <div class="catalog__filter_item_title filter-title">
	                            <div class="plus icon icon-up"></div>
	                            <div class="filter-subtitle"><span>Производитель</span></div>
	                        </div>
	                        <div class="catalog__filter_item_content close">

	                        	<?php foreach( $car_manufacturer as $manufacturer ) : ?>
		                            <div class="catalog__filter_item_checkbox">
		                                <div class="catalog__filter_item_input">
		                                    <input id="<?php echo $manufacturer->slug ; ?>" type="checkbox" value="<?php echo $manufacturer->term_id ; ?>">
		                                    <div class="checkbox"></div>
		                                    <label for="<?php echo $manufacturer->slug ; ?>"><?php echo $manufacturer->name ; ?><span class="grey">(<span class="number"><?php echo $manufacturer->count ; ?></span>)
		                                        </span></label><a href="#link-for-seo" class="hide"></a>
		                                </div>
		                            </div>
		                        <?php endforeach ; ?>

	                        </div>
	                    </div>
	                <?php endif ; ?>

                    <div class="catalog__filter_item">
                        <div class="catalog__filter_item_title filter-title">
                            <div class="plus icon icon-up"></div>
                            <div class="filter-subtitle"><span>Модель</span></div>
                        </div>
                        <div class="catalog__filter_item_content close filter-model-by-man">

                            <div class="catalog__filter_item_checkbox">
                                <p>Сначала выберите производителя</p>
                            </div>

                        </div>
                    </div>

                </div>

        	</aside>

       	</div>
    </div>
</section>

<?php get_footer(); ?>