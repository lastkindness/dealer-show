<?php
/*
 * Template name: Шаблон.Контакты
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

	<?php  

		get_template_part( '/blocks/contact/contact_map' ) ;
		get_template_part( '/blocks/contact/individual-form' ) ;
		get_template_part( '/blocks/contact/seo' ) ;

	?>

<?php get_footer(); ?>