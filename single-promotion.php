<?php get_header(); ?>

	<section class="breadcrumbs-section" id="breadcrumbs-section">
	    <div class="container">
	        <?php if(function_exists('bcn_display')) : ?>

	            <ul class="breadcrumbs">
	                <?php bcn_display(); ?>
	            </ul>

	        <?php endif ; ?>
	    </div>
	</section>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php  

			$excludeId = get_the_ID() ;

		?>

		<section class="content-banner" id="content-banner">
		    <div class="container">
		        <div class="content-banner__wrapper">
		            <div class="content-banner__img">
		            	<?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
		            </div>
		            <div class="content-banner__content">
		                <span class="content-banner__date"><?php echo get_the_date('j F Y') ; ?></span>
		                <h1 class="h1 content-banner__title"><?php the_title() ; ?></h1>
		            </div>
		        </div>
		    </div>
		</section>

		<section class="content" id="content">
    		<div class="container">

    			<div class="content__wrapper">

    				<?php the_content() ; ?>

    			</div>

    		</div>
    	</section>

	<?php endwhile ; ?>

	<section class="blog-posts" id="blog-posts">
	    <div class="container">
	        <div class="blog-posts__wrapper">
	            <div class="blog-posts__title">

	                <h2 class="title h2">Другие Акции</h2>

	                <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn btn_secondary">Смотреть Все</a>

	            </div>

	            <?php  

	            	$posts_arr = array(
						'post_type' => 'promotion',
						'post__not_in' => array($excludeId),
						'posts_per_page' => -4
					);

					$posts_query = new WP_Query($posts_arr) ;

	            ?>

	           	<?php if( $posts_query->have_posts() ) : ?>

	           		<div class="blog-posts__grid">
		           		<ul class="blog-posts__list">

							<?php while( $posts_query->have_posts() ) : $posts_query->the_post(); ?>

								<li class="blog-posts__item">
				                    <a href="<?php echo get_permalink(); ?>" class="blog-posts__link">
				                        <span class="blog-posts__img"><?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?></span>
				                        <div href="<?php echo get_permalink(); ?>" class="blog-posts__item-content">
				                            <h4 class="h4 blog-posts__item-title"><?php echo get_the_title() ; ?></h4>
				                            <p class="blog-posts__item-text"><?php echo get_the_excerpt() ; ?></p>
				                        </div>
				                    </a>
				                </li>

							<?php endwhile ; ?>

							<?php wp_reset_query() ; ?>

						</ul>
					</div>

				<?php endif ; ?>

	        </div>
	    </div>
	</section>

<?php get_footer(); ?>