<?php get_header(); ?>
	
	<section class="page-title page-title_single" id="page-title">
	    <div class="container">
	        <div class="page-title__wrapper">
	            <h2 class="title h2">Новости</h2>

	            <?php if(function_exists('bcn_display')) : ?>

		            <ul class="page-title__breadcrumbs breadcrumbs">
		                <?php bcn_display(); ?>
		            </ul>

		        <?php endif ; ?>

	        </div>
	    </div>
	</section>

	<?php if( have_posts() ) : ?>
		<section class="blog-posts" id="blog-posts">
		    <div class="container">
		        <div class="blog-posts__wrapper">
		            <div class="blog-posts__grid">

		            	<ul class="blog-posts__list">
							<?php while ( have_posts() ) : the_post(); ?>

			                    <li class="blog-posts__item">
				                    <a href="<?php echo get_permalink(); ?>" class="blog-posts__link">
				                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
				                        <div href="<?php echo get_permalink(); ?>" class="blog-posts__item-content">
				                            <h4 class="h4 blog-posts__item-title"><?php echo get_the_title() ; ?></h4>
				                            <p class="blog-posts__item-text"><?php echo get_the_excerpt() ; ?></p>
				                        </div>
				                    </a>
				                </li>

							<?php endwhile ; ?>
						</ul>


						<div class="pagination pagination-news">
		                    
							<?php 

								echo paginate_links_custom( array(
								    'current' => max( 1, get_query_var('paged') ),
								    'type' => 'list',
								    'current' => 1,
								) );

			                ?>

		                </div>

		            </div>
		        </div>
		    </div>
		</section>
		<?php wp_reset_query() ; ?>
	<?php endif ; ?>

	<?php  

		get_template_part( '/blocks/blog/individual-form' ) ;
		get_template_part( '/blocks/blog/seo' ) ;

	?>


<?php get_footer(); ?>
