<?php
/*
 * Template name: Шаблон.Акции
 */

?>

<?php get_header(); ?>

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

		$promotion_arr = array(
			'post_type' => 'promotion',
			'posts_per_page' => $default_posts_per_page,
		);

		$promotion = new WP_Query($promotion_arr) ;

	?>

	<?php if( $promotion->have_posts() ) : ?>

		<section class="promotions" id="promotions">
    		<div class="container">
        		<div class="promotions__wrapper">

        			<ul class="promotions__grid">

	        			<?php while ( $promotion->have_posts() ) : $promotion->the_post(); ?>

	        				<?php  

	        					$logo = get_field('logo') ;

	        				?>

	        				<li class="promotions__item">
			                    <a href="<?php echo get_permalink() ; ?>" class="promotions__link">
			                        <div class="promotions__image">
			                        	
			                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>

			                            <?php if( $logo ) : ?>
			                            	<img class="promotions__logo" src="<?php echo $logo['url'] ; ?>" alt="<?php echo $logo['alt'] ; ?>">
			                            <?php endif ; ?>

			                        </div>
			                        <h3 class="h3 promotions__title"><?php the_title() ; ?></h3>
			                        <p class="promotions__text"><?php echo get_the_excerpt() ; ?></p>
			                        <div class="promotions__more"><span>Подробнее</span></div>
			                    </a>
			                </li>

	        			<?php endwhile ; ?>

	        		</ul>

	        		<div class="pagination pagination-promotion">
		                    
						<?php 

							echo paginate_links_custom( array(
							    'total' => $promotion->max_num_pages,
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

		get_template_part( '/blocks/promotions/consultation' ) ;
		get_template_part( '/blocks/promotions/seo' ) ;

	?>

<?php get_footer(); ?>