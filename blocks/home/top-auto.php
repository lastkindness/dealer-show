<?php if( $show_top = get_field('show_top') ) : ?>

	<?php  

		$top_title = get_field('top_title') ;
		$top_title_link = get_field('top_title_link') ;
		$top_bottom_link = get_field('top_bottom_link') ;

		if( $top_title_link ){

			$link_top_url = $top_title_link['url'];
	    	$link_top_title = $top_title_link['title'];
	    	$link_top_target = $top_title_link['target'] ? $top_title_link['target'] : '_self';

		}

		if( $top_bottom_link ){

			$link_bottom_url = $top_bottom_link['url'];
	    	$link_bottom_title = $top_bottom_link['title'];
	    	$link_bottom_target = $top_bottom_link['target'] ? $top_bottom_link['target'] : '_self';

		}

	?>

	<section class="top-auto" id="top-auto">
	    <div class="container">
	        <div class="top-auto__wrapper">
	            <div class="top-auto__title">

	            	<?php if( $top_title ) : ?>
	                	<h2 class="title h2"><?php echo $top_title ; ?></h2>
	                <?php endif ; ?>

	                <?php if( $link_top_url && $link_top_title ) : ?>
	                	<a href="<?php echo $link_top_url ; ?>" class="btn btn_secondary" target="<?php echo $link_top_target ; ?>"><?php echo $link_top_title ; ?></a>
	                <?php endif ; ?>

	            </div>

	            <?php  

	            	$top_number = get_field('top_number') ;

	            	$cars_arr = array(
						'post_type' => 'cars',
						'posts_per_page' => $top_number,
						'meta_key'		=> 'top_auto',
						'meta_value'	=> true
					);

					$cars = new WP_Query($cars_arr) ;

	            ?>

	            <?php if( $cars->have_posts() ) : ?>
		            <div class="top-auto__grid">
		                <div class="grid">

		                	<?php while( $cars->have_posts() ) : $cars->the_post(); ?>

		                		<?php  

		                			$price = get_field('price') ;
		                			$mileage = get_field('mileage') ;

		                		?>

			                    <div class="grid__card">
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

			                <?php wp_reset_query() ; ?>

		                </div>
		            </div>
		        <?php endif ; ?>

	            <?php if( $link_bottom_url && $link_bottom_title ) : ?>
	                <a href="<?php echo $link_bottom_url ; ?>" class="btn btn_secondary btn_fullwidth" target="<?php echo $link_bottom_target ; ?>"><?php echo $link_bottom_title ; ?></a>
	            <?php endif ; ?>
	            
	        </div>
	    </div>
	</section>

<?php endif ; ?>