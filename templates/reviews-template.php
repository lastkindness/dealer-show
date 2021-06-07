<?php
/*
 * Template name: Шаблон.Отзывы
 */

get_header(); ?>

	<section class="page-title page-title_single" id="page-title">
	    <div class="container">
	        <div class="page-title__wrapper">
	            <h2 class="title h2"><?php the_title() ; ?></h2>

	            <?php if(function_exists('bcn_display')) : ?>

		            <ul class="page-title__breadcrumbs breadcrumbs">
		                <?php bcn_display(); ?>
		            </ul>

		        <?php endif ; ?>

	        </div>
	    </div>
	</section>

	<?php

		$default_posts_per_page = get_option( 'posts_per_page' );  

		$reviews_arr = array(
			'post_type' => 'reviews',
			'posts_per_page' => $default_posts_per_page,
		);

		$reviews = new WP_Query($reviews_arr) ;

	?>

	<?php if( $reviews->have_posts() ) : ?>
		<section class="reviews reviews_list" id="reviews">
		    <div class="container">
		        <div class="reviews__wrapper">

		        	<ul class="reviews__grid">

			        	<?php while ( $reviews->have_posts() ) : $reviews->the_post(); ?>

			        		<li class="reviews__item">

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

			        </ul>

			        <div class="pagination pagination-reviews">
		                    
						<?php 

							echo paginate_links_custom( array(
							    'total' => $reviews->max_num_pages,
							    'type' => 'list',
							    'current' => 1,
							) );

		                ?>

	                </div>

		        </div>
		    </div>
		</section>
		<?php wp_reset_query() ; ?>
	<?php endif ; ?>

	<?php  

		get_template_part( '/blocks/reviews/consultation' ) ;
		get_template_part( '/blocks/reviews/seo' ) ;

	?>

<?php get_footer(); ?>