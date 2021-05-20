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