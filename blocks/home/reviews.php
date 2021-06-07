<?php if( $show_reviews = get_field('show_reviews') ) : ?>

	<?php  

		$reviews_num = get_field('reviews_num') ;
		$reviews_title = get_field('reviews_title') ;
		$reviews_link = get_field('reviews_link') ;

		if( $reviews_link ){
		    $reviews_url = $reviews_link['url'];
		    $reviews_title = $reviews_link['title'];
		    $reviews_target = $reviews_link['target'] ? $reviews_link['target'] : '_self';
		}

	?>

	<section class="reviews" id="reviews">
    	<div class="container">
       		<div class="reviews__wrapper swiper-container">

       			<div class="reviews__title">

       				<?php if( $reviews_title ) : ?>
	                	<h2 class="title h2">Отзывы клиентов</h2>
	                <?php endif ; ?>

	                <?php if( $reviews_url && $reviews_title ) : ?>
	                	<a href="<?php echo $reviews_url ; ?>" class="btn btn_secondary" target="<?php echo $reviews_target ; ?>"><?php echo $reviews_title ; ?></a>
	                <?php endif ; ?>

	            </div>

	            <?php  

	            	$reviews_arr = array(
						'post_type' => 'reviews',
						'posts_per_page' => $reviews_num,
						'meta_key'		=> 'show_on_homepage',
						'meta_value'	=> true
					);

					$reviews = new WP_Query($reviews_arr) ;

	            ?>

	            <?php if( $reviews->have_posts() ) : ?>

		            <ul class="reviews__grid swiper-wrapper">

		            	<?php while( $reviews->have_posts() ) : $reviews->the_post(); ?>

		            		<?php  

		            			$video_rewiev = get_field('video_rewiev') ;

		            		?>

			            	<li class="reviews__item swiper-slide">

			            		<?php if (has_post_thumbnail( get_the_ID() ) ): ?>

			            			<?php if( $video_rewiev ) : ?>

					                    <a href="<?php echo $video_rewiev ; ?>" data-fancybox="gallery" data-title="Video"
					                       class="reviews__video">
					                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
					                        <div class="reviews__icon"></div>
					                    </a>

					                <?php else : ?>

					                	<a href="#" class="reviews__video">
					                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
					                        <div class="reviews__icon"></div>
					                    </a>

					                <?php endif ; ?>

				                <?php endif ; ?>

			                    <a href="#" class="reviews__item-content">
			                        <h4 class="h4 reviews__item-title"><?php echo get_the_title() ; ?></h4>
			                        <p class="reviews__item-text"><?php echo get_the_excerpt() ; ?></p>
			                    </a>
			                </li>

			            <?php endwhile ; ?>

			            <?php wp_reset_query() ; ?>

		            </ul>

		        <?php endif ; ?>

       		</div>
       	</div>
    </section>

<?php endif ; ?>