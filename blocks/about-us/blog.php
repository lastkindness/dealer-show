<?php if( $show_blog = get_field('show_blog') ) : ?>

	<?php  

		$blog_num = get_field('blog_num') ;
		$blog_title = get_field('blog_title') ;
		$blog_link = get_field('blog_link') ;

		if( $blog_link ){

			$blog_link_url = $blog_link['url'];
			$blog_link_title = $blog_link['title'];
			$blog_link_target = $blog_link['target'] ? $blog_link['target'] : '_self';

		}

	?>

	<section class="blog-posts" id="blog-posts">
	    <div class="container">
	        <div class="blog-posts__wrapper">
	            <div class="blog-posts__title">

	            	<?php if( $blog_title ) : ?>
	                	<h2 class="title h2"><?php echo $blog_title ; ?></h2>
	                <?php endif ; ?>

	                <?php if( $blog_link_url && $blog_link_title ) : ?>
	                	<a href="<?php echo $blog_link_url ; ?>" class="btn btn_secondary" target="<?php echo $blog_link_target ; ?>"><?php echo $blog_link_title ; ?></a>
	                <?php endif ; ?>

	            </div>

	            <?php  

	            	$posts_arr = array(
						'post_type' => 'post',
						'posts_per_page' => $blog_num
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
<?php endif ; ?>