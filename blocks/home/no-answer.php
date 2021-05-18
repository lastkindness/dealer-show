<?php if( $show_no_answer = get_field('show_no_answer') ) : ?>

	<?php  

		$no_answer_background = get_field('no_answer_background') ;
		$no_answer_title = get_field('no_answer_title') ;
		$no_answer_subtitle = get_field('no_answer_subtitle') ;
		$no_answer_form = get_field('no_answer_form') ;

	?>

	<section class="individual-form" id="individual-form2">
	    <div class="container">
	        <div class="individual-form__wrapper" <?php if( $no_answer_background ) : ?> style="background-image: url('<?php echo $no_answer_background ; ?>')" <?php endif ; ?> >
	            <div class="individual-form__content">

	            	<?php if( $no_answer_title ) : ?>
	                	<h2 class="title h2"><?php echo $no_answer_title ; ?></h2>
	                <?php endif ; ?>

	                <?php if( $no_answer_subtitle ) : ?>
	                	<p class="text"><?php echo $no_answer_subtitle ; ?></p>
	                <?php endif ; ?>

	            </div>
	            
	            <?php if( $no_answer_form ){ echo do_shortcode( $no_answer_form ) ; } ; ?>

	        </div>
	    </div>
	</section>
<?php endif ; ?>