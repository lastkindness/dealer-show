<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php

			date_default_timezone_set("Europe/Kiev");
			date_default_timezone_get();

			$exclude_id = get_the_ID() ;

			$catalog_link = get_field('catalog_link', 'option') ;

		    $price = get_field('price') ;

		    $today_date_time = date('Y-m-d H:i');


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
					                                	<img src="<?php echo $image['url'] ; ?>" id="image-<?php echo get_row_index() ; ?>" data-zoom-image="<?php echo $image['url'] ; ?>" />
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

		                <?php

		                	$location = get_the_terms( get_the_ID(), 'location' );
		                	$fuel = get_the_terms( get_the_ID(), 'fuel' );

		                	$car_manufacturer = wp_get_object_terms( get_the_ID(), 'car_manufacturer', array( 'parent' => '0' ) );
		                	$car_model = wp_get_object_terms( get_the_ID(), 'car_manufacturer', array( 'parent' => $car_manufacturer[0]->term_id ) ) ;

		                	$volume = get_the_terms( get_the_ID(), 'volume' );
		                	$issue_year = get_the_terms( get_the_ID(), 'issue_year' );
		                	$car_type = get_the_terms( get_the_ID(), 'car_type' );
		                	$transmission = get_the_terms( get_the_ID(), 'transmission' );
		                	$drive = get_the_terms( get_the_ID(), 'drive' );

		                	$mileage = get_field('mileage') ;

		                	if( $location[0]->name == '???? ????????????????' ){
		                		$price_for_car_title = '?????????????????????????????? ????????????' ;
		                		$text_location = '?????????????????? ??????????????????' ;
		                	}else{
		                		$price_for_car_title = '??????????????????' ;
		                		$text_location = '????????????' ;
		                	}

		                ?>

		                <h1 class="product__title h1"><?php the_title() ; ?></h1>
		                <h3><?php echo $price_for_car_title ; ?> : <span style="color: #FD4B0D;"><?php echo number_format( $price, 0, '', ' ' ) ; ?> $</span></h3>


		                <table class="product__table">
		                    <tbody>
		                        <tr>

		                            <td>
		                                <div class="product__item">
		                                    <span>??????????????</span><span><?php echo $location[0]->name ; ?></span>
		                                </div>
		                            </td>

		                            <td>
		                                <div class="product__item">
		                                    <span>?????? ??????????????</span><span><?php echo $fuel[0]->name ; ?></span>
		                                </div>
		                            </td>

		                        </tr>
		                        <tr>

		                            <td>
		                                <div class="product__item">
		                                    <span>??????????</span><span><?php echo $car_manufacturer[0]->name ; ?></span>
		                                </div>
		                            </td>

		                            <td>
		                                <div class="product__item">
		                                    <span>??????????</span><span><?php echo $volume[0]->name ; ?></span>
		                                </div>
		                            </td>

		                        </tr>
		                        <tr>

		                            <td>
		                                <div class="product__item">
		                                    <span>????????????</span><span><?php echo $car_model[0]->name ; ?></span>
		                                </div>
		                            </td>

		                            <td>
		                                <div class="product__item">
		                                    <span>??????</span><span><?php echo $issue_year[0]->name ; ?></span>
		                                </div>
		                            </td>

		                        </tr>
		                        <tr>

		                            <td>
		                                <div class="product__item">
		                                    <span>??????????</span><span><?php echo $car_type[0]->name ; ?></span>
		                                </div>
		                            </td>

		                            <td>
		                                <div class="product__item">
		                                    <span>??????????????</span><span><?php echo $transmission[0]->name ; ?></span>
		                                </div>
		                            </td>

		                        </tr>
		                        <tr>

		                            <td>
		                                <div class="product__item">
		                                    <span>????????????</span><span><?php echo $mileage ; ?></span>
		                                </div>
		                            </td>

		                            <td>
		                                <div class="product__item">
		                                    <span>????????????</span><span><?php echo $drive[0]->name ; ?></span>
		                                </div>
		                            </td>

		                        </tr>

		                        <?php

				                	$auction_ends_f = get_field('auction_ends') ;

				                	if( $auction_ends_f >= $today_date_time ){
				                		$auction_ends = $auction_ends_f ;
				                	}else{
				                		$auction_ends = '????????????????' ;
				                	}

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
		                                    <span>??????????????????????????????</span><span><?php echo $lot_location ; ?></span>
		                                </div>
		                        	</td>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>ID ????????</span><span><?php echo $lot_id ; ?></span>
		                                </div>
		                        	</td>
		                        </tr>
		                        <tr>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>???????????????? ??????????????</span><span><?php echo $lot_moments ; ?></span>
		                                </div>
		                        	</td>
		                        	<td>
		                        		<div class="product__item">
		                                    <span>??????????</span><span><?php echo $lot_keys ; ?></span>
		                                </div>
		                        	</td>
		                        </tr>

		                    </tbody>
		                </table>
		                <div class="product__buttons">

		                    <a data-fancybox="" href="#modal-phone-cart-price" class="btn btn_light--price"><?php echo $text_location ; ?></a>

		                    <a data-fancybox="" href="#modal-phone-cart-call" class="btn btn_light btn_light--call">?????????????????? ?? ????????</a>

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
				'post_type' => 'cars',
				'post__not_in' => array($exclude_id),
				'posts_per_page' => 10,
				'meta_query' => array(
					array(
						'relation' => 'OR',
					    array(
					        'key'		=> 'auction_ends',
					        'value'		=> $today_date_time,
					        'compare'	=> '>=',
					    ),
					    array(
					        'key'		=> 'auction_ends',
					        'value'		=> '',
					        'compare'	=> '=',
					    )
					)
			    ),
			    'tax_query' => array(
			    	array(
						'taxonomy'=>'car_manufacturer',
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
			                <h2 class="title h2">?????????????? ????????????????????</h2>
			                <a href="<?php echo $catalog_link['url'] ?>" class="btn btn_secondary">???????????????? ??????</a>
			            </div>
			            <div class="top-auto__grid swiper-container">
			                <div class="grid swiper-wrapper">

			                	<?php while( $cars->have_posts() ) : $cars->the_post(); ?>

			                		<?php

			                			$price = get_field('price') ;
	                					$mileage = get_field('mileage') ;
	                					$car_small_desk = get_field('car_small_desk') ;

	                					$check_location = get_the_terms( get_the_ID(), 'location' );

	                                    if( $check_location[0]->name == '???? ????????????????' ){
	                                        $text_location = '?????????????????? ??????????????????' ;
	                                    }else{
	                                        $text_location = '????????????' ;
	                                    }

			                		?>

                                    <div class="grid__card swiper-slide">
                                        <div class="grid__card-main">
                                            <a href="<?php echo get_permalink(); ?>" class="grid__card-img" href="<?php echo get_permalink(); ?>">
                                                <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                            </a>
                                            <div class="grid__card-content">

                                                <a href="<?php echo get_permalink(); ?>" class="grid__card-link" href="<?php echo get_permalink(); ?>">
                                                    <h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
                                                </a>
                                                <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>

                                                <?php if( $car_small_desk ) : ?>
	                                                <div class="grid__card-description">
	                                                    <?php echo $car_small_desk ; ?>
	                                                </div>
	                                            <?php endif ; ?>
	                                            
                                            </div>
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
                                                        <span class="text"><?php echo $car_year[0]->name ; ?> ??????</span>
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
                                        </div>
                                        <div class="grid__card-footer">
                                            <a data-fancybox="" href="#modal-phone-cart-price" data-form-link="<?php echo get_permalink(); ?>" class="btn btn_light"><?php echo $text_location ; ?></a>
                                            <a href="<?php echo get_permalink(); ?>" class="btn">??????????????????</a>
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
