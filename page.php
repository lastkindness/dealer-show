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

<?php get_footer(); ?>