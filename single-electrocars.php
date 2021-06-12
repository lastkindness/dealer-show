<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php

			date_default_timezone_set("Europe/Kiev");
			date_default_timezone_get();

			$exclude_id = get_the_ID() ;

			$catalog_link = get_field('catalog_link', 'option') ;

		?>

		<section class="breadcrumbs-section" id="breadcrumbs-section">
		    <div class="container">

		    	<?php if(function_exists('bcn_display')) : ?>

		            <ul class="breadcrumbs">
		                <?php bcn_display(); ?>
		            </ul>

		        <?php endif ; ?>

		    </div>
		</section>

		<section class="product" id="product">
		    <div class="container">
		        <div class="product__wrapper">

		        	<?php if( have_rows('lot_images') ): ?>

			        	<div class="product__image">
			        		<h1 class="product__title h1"><?php the_title() ; ?></h1>
			                <div class="product__image_loupe">
			                    <div class="product__image_slider-main">
			                        <div class="product__image_slider-big gallery-images">

			                        	<?php while( have_rows('lot_images') ) : the_row(); ?>

			                        		<?php

			                        			$image = get_sub_field('image') ;

			                        		?>

			                        		<?php if( $image ) : ?>
					                            <a href="<?php echo $image['url'] ; ?>" data-fancybox="gallery" data-title="TOYOTA Camry">
					                                <div class="product__image_slider-big-slide">
					                                	<img src="<?php echo $image['url'] ; ?>" id="image-<?php echo get_row_index() ; ?>" />
					                                </div>
					                            </a>
					                        <?php endif ; ?>

				                        <?php endwhile ; ?>

			                        </div>
			                    </div>
			                    <div class="product__image_slider-small">

			                    	<?php while( have_rows('lot_images') ) : the_row(); ?>

			                    		<?php

		                        			$image = get_sub_field('image') ;

		                        		?>
		                        		<?php if( $image ) : ?>
				                        	<div class="product__image_slider-small-slide">
				                        		<img src="<?php echo $image['url'] ; ?>" data-image-index="<?php echo get_row_index() ; ?>" />
				                        	</div>
				                        <?php endif ; ?>

			                        <?php endwhile ; ?>

			                    </div>
			                </div>
			            </div>

			        <?php endif ; ?>

			        <div class="product__info">
		                <h1 class="product__title h1"><?php the_title() ; ?></h1>

		                <?php

		                	$car_manufacturer = wp_get_object_terms( get_the_ID(), 'electrocars_manufacturer', array( 'parent' => '0' ) );
		                	$location = get_the_terms( get_the_ID(), 'location' );
		                	$issue_year = get_the_terms( get_the_ID(), 'issue_year' );
		                	$car_type = get_the_terms( get_the_ID(), 'electrocars_type' );
		                	$mileage = get_field('mileage');
		                	$drive = get_the_terms( get_the_ID(), 'electrocars_drive' );
		                	$car_model = wp_get_object_terms( get_the_ID(), 'electrocars_manufacturer', array( 'parent' => $car_manufacturer[0]->term_id ) ) ;

		                ?>

		                <table class="product__table">
		                    <tbody>
		                        <tr>

		                            <td>
		                                <div class="product__item">
		                                    <span>НАЛИЧИЕ</span><span><?php echo $location[0]->name ; ?></span>
		                                </div>
		                            </td>

		                            <td>
		                                <div class="product__item">
		                                    <span>ТИП ТОПЛИВА</span><span>Электро</span>
		                                </div>
		                            </td>

		                        </tr>
		                        <tr>

		                            <td>
		                                <div class="product__item">
		                                    <span>МАРКА</span><span><?php echo $car_manufacturer[0]->name ; ?></span>
		                                </div>
		                            </td>

		                            <td>
		                                <div class="product__item">
		                                    <span>МОДЕЛЬ</span><span><?php echo $car_model[0]->name ; ?></span>
		                                </div>
		                            </td>

		                        </tr>
		                        <tr>

		                            <td>
		                                <div class="product__item">
		                                    <span>ГОД</span><span><?php echo $issue_year[0]->name ; ?></span>
		                                </div>
		                            </td>

		                            <td>
		                                <div class="product__item">
		                                    <span>КУЗОВ</span><span><?php echo $car_type[0]->name ; ?></span>
		                                </div>
		                            </td>

		                        </tr>

		                        <tr>

		                            <td>
		                                <div class="product__item">
		                                    <span>ПРОБЕГ</span><span><?php echo $mileage ; ?></span>
		                                </div>
		                            </td>

		                            <td>
		                                <div class="product__item">
		                                    <span>ПРИВОД</span><span><?php echo $drive[0]->name ; ?></span>
		                                </div>
		                            </td>

		                        </tr>

		                        <?php

				                	$auction_ends = get_field('auction_ends') ;
				                	$price = get_field('price') ;
				                	$lot_location = get_field('lot_location') ;
				                	$lot_id = get_field('lot_id') ;
				                	$lot_moments = get_field('lot_moments') ;
				                	$lot_damage = get_field('lot_damage') ;
				                	$lot_keys = get_field('lot_keys') ;
				                	$lot_komplectation = get_field('lot_komplectation') ;

		                        ?>

		                        <tr>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>КОНЕЦ АУКЦИОНА</span><span><?php echo $auction_ends ; ?></span>
		                                </div>
		                        	</td>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>ОЦЕНОЧНАЯ СТОИМОСТЬ</span><span><?php echo number_format( $price, 0, '', ' ' ) ; ?> $</span>
		                                </div>
		                        	</td>
		                        </tr>
		                        <tr>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>МЕСТОНАХОЖДЕНИЕ</span><span><?php echo $lot_location ; ?></span>
		                                </div>
		                        	</td>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>ID ЛОТА</span><span><?php echo $lot_id ; ?></span>
		                                </div>
		                        	</td>
		                        </tr>
		                        <tr>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>ОСНОВНЫЕ МОМЕНТЫ</span><span><?php echo $lot_moments ; ?></span>
		                                </div>
		                        	</td>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>ОСНОВНЫЕ ПОВРЕЖДЕНИЯ</span><span><?php echo $lot_damage ; ?></span>
		                                </div>
		                        	</td>
		                        </tr>
		                        <tr>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>КЛЮЧИ</span><span><?php echo $lot_keys ; ?></span>
		                                </div>
		                        	</td>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>КОМПЛЕКТАЦИЯ</span><span><?php echo $lot_komplectation ; ?></span>
		                                </div>
		                        	</td>
		                        </tr>

		                    </tbody>
		                </table>

		                <div class="product__buttons">
		                    <a href="#" class="btn">Расчитать стоимость</a>
		                    <a href="#" class="btn btn_light">Связаться с нами</a>
		                </div>
		                <div class="product__content">
		                    <?php the_content() ; ?>
		                </div>
		            </div>

		        </div>
		    </div>
		</section>

		<?php

			$today_date_time = date('Y-m-d H:i');

			$cars_arr = array(
				'post_type' => 'electrocars',
				'post__not_in' => array($exclude_id),
				'posts_per_page' => 10,
				'meta_query' => array(
				     array(
				        'key'		=> 'auction_ends',
				        'value'		=> $today_date_time,
				        'compare'	=> '>=',
				    )
			    ),
			    'tax_query' => array(
			    	array(
						'taxonomy'=>'electrocars_manufacturer',
						'field'=>'term_id',
						'terms'=>$car_manufacturer[0]->term_id
					)
				),
			);

			$cars = new WP_Query($cars_arr) ;

		?>

		<?php if( $cars->have_posts() ) : ?>
			<section class="top-auto" id="top-auto">
			    <div class="container">
			        <div class="top-auto__wrapper">
			            <div class="top-auto__title">
			                <h2 class="title h2">Похожие автомобили</h2>
			                <a href="<?php echo $catalog_link['url'] ?>" class="btn btn_secondary">Смотреть все</a>
			            </div>
			            <div class="top-auto__grid swiper-container">
			                <div class="grid swiper-wrapper">

			                	<?php while( $cars->have_posts() ) : $cars->the_post(); ?>

			                		<?php

			                			$price = get_field('price') ;
	                					$mileage = get_field('mileage') ;

			                		?>

				                    <div class="grid__card swiper-slide">

				                        <div class="grid__card-flip">
				                            <div class="grid__card-wrapper">
				                                <div class="grid__card-front">
				                                    <a class="grid__card-img" href="<?php echo get_permalink(); ?>">
				                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
				                                    </a>
				                                    <div class="grid__card-content">

				                                        <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
				                                        	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
				                                        </a>

				                                        <p class="grid__card-description">
				                                            <?php echo get_the_content() ; ?>
				                                        </p>
				                                        <div class="grid__card-footer">
				                                            <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
				                                            <a href="<?php echo get_permalink(); ?>" class="btn grid__card-link">Подробнее</a>
				                                        </div>
				                                    </div>
				                                </div>
				                                <div class="grid__card-back">
				                                    <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
				                                    	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
				                                    </a>
				                                    <p class="grid__card-description">
				                                        <?php echo get_the_content() ; ?>
				                                    </p>
				                                    <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
				                                    <ul class="grid__card-characteristics">

				                                    	<?php $car_fuel = get_the_terms( get_the_ID(), 'fuel' ) ; ?>

				                                    	<?php if( is_array( $car_fuel ) ) : ?>
					                                        <li class="grid__card-characteristic">
						                                        <span class="img">
						                                            <span class="icon"
						                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
						                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
						                                            ></span>
						                                        </span>
					                                            <span class="text"><?php echo $car_fuel[0]->name ; ?></span>
					                                        </li>
					                                    <?php endif ; ?>

					                                    <?php $car_year = get_the_terms( get_the_ID(), 'issue_year' ) ; ?>

				                                    	<?php if( is_array( $car_year ) ) : ?>
					                                        <li class="grid__card-characteristic">
						                                        <span class="img">
						                                            <span class="icon"
						                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
						                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
						                                            ></span>
						                                        </span>
					                                            <span class="text"><?php echo $car_year[0]->name ; ?> год</span>
					                                        </li>
					                                    <?php endif ; ?>

					                                    <?php $car_volume = get_the_terms( get_the_ID(), 'volume' ) ; ?>

					                                    <?php if( is_array( $car_volume ) ) : ?>
					                                        <li class="grid__card-characteristic">
						                                        <span class="img">
						                                            <span class="icon"
						                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
						                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
						                                            ></span>
						                                        </span>
					                                            <span class="text"><?php echo $car_volume[0]->name ; ?></span>
					                                        </li>
				                                        <?php endif ; ?>

				                                        <li class="grid__card-characteristic">
					                                        <span class="img">
					                                            <span class="icon"
					                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
					                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
					                                            ></span>
					                                        </span>
				                                            <span class="text"><?php echo $mileage ; ?></span>
				                                        </li>
				                                    </ul>
				                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
				                                    <a href="<?php echo get_permalink(); ?>" class="btn btn_white">Подробнее</a>
				                                </div>
				                            </div>
				                        </div>

				                    </div>

				                <?php endwhile ; ?>

			                </div>
			            </div>
			        </div>
			    </div>
			</section>
			<?php wp_reset_query() ; ?>
		<?php endif ; ?>

	<?php endwhile ; ?>

	<?php get_template_part( '/blocks/general-car-blocks' ); ?>

<?php get_footer(); ?>
