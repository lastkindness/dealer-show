<?php  

	$about_top_image = get_field('about_top_image') ;
	$about_top_title = get_field('about_top_title') ;
	$about_top_title_colored = get_field('about_top_title_colored') ;
	$about_top_text = get_field('about_top_text') ;
	$about_top_text_bottom = get_field('about_top_text_bottom') ;

?>

<?php if( $about_top_block_show = get_field('about_top_block_show') ) : ?>
	<?php if( $about_top_image || $about_top_title || $about_top_title_colored || $about_top_text || $about_top_text_bottom ) : ?>
		<section class="about" id="about">
		    <div class="container">
		        <div class="about__wrapper">
		            <div class="about__banner">

		            	<?php if( $about_top_image ) : ?>
			                <div class="about__banner-img">
			                    <img src="<?php echo $about_top_image['url'] ; ?>" alt="<?php echo $about_top_image['alt'] ; ?>">
			                </div>
			            <?php endif ; ?>

		                <div class="about__banner-content">

		                	<?php if( $about_top_title || $about_top_title_colored ) : ?>

			                    <h1 class="h1 about__banner-title">

			                    	<?php if( $about_top_title ) : ?>
			                       		<span class="white"><?php echo $about_top_title ; ?></span>
			                       	<?php endif ; ?>

			                       	<?php if( $about_top_title_colored ) : ?>
			                        	<span class="red"><?php echo $about_top_title_colored ; ?></span>
			                        <?php endif ; ?>

			                    </h1>

			                <?php endif ; ?>

			                <?php if( $about_top_text ) : ?>
			                    <div class="about__banner-description">
			                        <?php echo $about_top_text ; ?>
			                    </div>
			                <?php endif ; ?>

			                <?php if( $about_top_text_bottom ) : ?>
			                    <div class="about__banner-selection">
			                        <?php echo $about_top_text_bottom ; ?>
			                    </div>
			                <?php endif ; ?>

		                </div>
		            </div>

		            <?php if( have_rows('about_top_waraity') ) : ?>

			            <ul class="car-selection__advantages">

			            	<?php while( have_rows('about_top_waraity') ) : the_row(); ?>

			            		<?php  

			            			$icon = get_sub_field('icon') ;
			            			$title = get_sub_field('title') ;
			            			$text = get_sub_field('text') ;

			            		?>

			            		<?php if( $text || $title || $icon ) : ?>

					                <li class="car-selection__advantage">

					                	<?php if( $icon ) : ?>
						                    <div class="img-wrap">
					                            <span class="img" style="
					                                -webkit-mask-image: url(<?php echo $icon ; ?>);
					                                mask: url(<?php echo $icon ; ?>);">
					                            </span>
						                    </div>
						                <?php endif ; ?>

					                    <div class="content">

					                    	<?php if( $title ) : ?>
					                        	<h3 class="title h3"><?php echo $title ; ?></h3>
					                        <?php endif ; ?>

					                        <?php if( $text){ echo $text ; } ; ?>

					                    </div>
					                </li>

					            <?php endif ; ?>

				            <?php endwhile ; ?>

			            </ul>

			        <?php endif ; ?>

		        </div>
		    </div>
		</section>
	<?php endif ; ?>
<?php endif ; ?>