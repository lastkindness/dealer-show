<?php
/*
 * Template name: Шаблон.Страхование
 */

?>

<?php get_header(); ?>

	<section class="breadcrumbs-section" id="breadcrumbs-section">
	    <div class="container">
	        <?php if(function_exists('bcn_display')) : ?>

	            <ul class="page-title__breadcrumbs breadcrumbs">
	                <?php bcn_display(); ?>
	            </ul>

	        <?php endif ; ?>
	    </div>
	</section>

	<?php  

		$banner_img = get_field('banner_img') ;
		$banner_title = get_field('banner_title') ;
		$banner_text = get_field('banner_text') ;

	?>

	<?php if( $banner_text || $banner_title ) : ?>

		<section class="about" id="about">
		    <div class="container">
		        <div class="about__wrapper">
		            <div class="about__banner">

		            	<?php if( $banner_img ) : ?>
			                <div class="about__banner-img">
			                    <img src="<?php echo $banner_img ; ?>" alt="">
			                </div>
			            <?php endif ; ?>

		                <div class="about__banner-content">
		                    
		                    <?php if( $banner_title ) : ?>
			                    <h1 class="h1 about__banner-title">
			                        <span class="white"><?php echo $banner_title ; ?></span>
			                    </h1>
			                <?php endif ; ?>

			                <?php if( $banner_text ) : ?>
			                    <div class="about__banner-description">
			                        <p><?php echo $banner_text ; ?></p>
			                    </div>
			                <?php endif ; ?>

		                </div>
		            </div>
		        </div>
		    </div>
		</section>

	<?php endif ; ?>

	<section class="content" id="content">
	    <div class="container">
	        <div class="content__wrapper">
	            <?php the_content() ; ?>
	        </div>
	    </div>
	</section>

	<?php if( $show_viber = get_field('show_viber') ) : ?>

		<?php  

			$background = get_field('background') ;
			$viber_title = get_field('viber_title') ;
			$viber_title2 = get_field('viber_title2') ;
			$vider_form = get_field('vider_form') ;
			$show_icon_viber = get_field('show_icon_viber') ;

		?>

		<section class="viber-form" id="viber-form">
		    <div class="container">
		        <div class="viber-form__wrapper" <?php if( $background ) : ?> style="background-image: url(<?php echo $background ; ?>)" <?php endif ; ?> >
		            
		        	<?php if( $show_icon_viber ) : ?>
			            <span class="viber-form__icon">
			                <span class="icon icon-viber"></span>
			            </span>
			        <?php endif ; ?>

		            <div class="viber-form__content">

		            	<?php if( $viber_title ) : ?>
		                	<h2 class="title h2"><?php echo $viber_title ; ?></h2>
		                <?php endif ; ?>

		                <?php if( $viber_title2 ) : ?>
		                	<p class="text"><?php echo $viber_title2 ; ?></p>
		                <?php endif ; ?>

		            </div>

		            <?php if( $vider_form ){ echo do_shortcode($vider_form) ; } ; ?>

		        </div>
		    </div>
		</section>
	<?php endif ; ?>

	<?php  

		$seo_title = get_field('seo_title') ;
		$seo_text = get_field('seo_text') ;

	?>

	<?php if( $seo_text ) : ?>
		<section class="text-content" id="text-content">
		    <div class="container">
		        <div class="text-content__wrapper">

		        	<?php if( $seo_title ) : ?>
		            	<h1 class="h3 text-content__title"><?php echo $seo_title ; ?></h1>
		            <?php endif ; ?>

		            <div class="text-content__container">
		                <div class="text-content__item">
		                    <?php echo $seo_text ; ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
	<?php endif ; ?>

<?php get_footer(); ?>