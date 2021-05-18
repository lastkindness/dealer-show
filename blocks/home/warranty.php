<?php  

	$show_warranty = get_field('show_warranty') ;

?>

<?php if( $show_warranty ) : ?>

	<?php  

		$warranty_title = get_field('warranty_title') ;

	?>

	<section class="warranty" id="warranty">
	    <div class="container">
	        <div class="warranty__wrapper">

	        	<?php if( $warranty_title ) : ?>
	            	<h2 class="h1 warranty__title"><?php echo $warranty_title ; ?></h2>
	            <?php endif ; ?>

	            <?php if( have_rows('warranty') ) : ?>

		            <div class="warranty__grid">
		                <div class="grid">

		                	<?php while( have_rows('warranty') ) : the_row(); ?>

		                		<?php  

		                			$title = get_sub_field('title') ;
		                			$text = get_sub_field('text') ;

		                		?>

		                		<?php if( $text && $title ) : ?>

				                	<div class="grid__card">
				                        <div class="grid__card-flip">
				                            <div class="grid__card-wrapper">
				                                <div class="grid__card-front">
				                                    <span class="grid__card-img" >
				                                        <span class="img" style="
				                                            -webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/checked.svg);
				                                            mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/checked.svg);"></span>
				                                    </span>
				                                    <h5 class="h5 grid__card-title"><?php echo $title ; ?></h5>
				                                </div>
				                                <div class="grid__card-back">
				                                    <h4 class="h4 grid__card-title"><?php echo $title ; ?></h4>
				                                    <p class="grid__card-description">
				                                        <?php echo $text ; ?>
				                                    </p>
				                                </div>
				                            </div>
				                        </div>
				                    </div>

				                <?php endif ; ?>

			                <?php endwhile ; ?>

		                </div>
		            </div>

		        <?php endif ; ?>

	        </div>
	    </div>
	</section>

<?php endif ; ?>