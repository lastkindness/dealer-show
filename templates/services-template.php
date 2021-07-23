<?php
/*
 * Template name: Шаблон.Услуги
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

	<section class="content" id="content">
	    <div class="container">
	        <div class="content__wrapper">
	            <?php the_content() ; ?>
	        </div>
	    </div>
	</section>

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

<?php get_footer(); ?>