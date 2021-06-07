<?php
/*
 * Template name: Шаблон.О нас
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

		get_template_part( '/blocks/about-us/about-top-block' ) ;
		get_template_part( '/blocks/about-us/about-simple-content' ) ;
		get_template_part( '/blocks/about-us/warranty' ) ;
		get_template_part( '/blocks/about-us/about_simple_text_iamge' ) ;
		get_template_part( '/blocks/about-us/about-simple-content2' ) ;
		get_template_part( '/blocks/about-us/individual-form' ) ;
		get_template_part( '/blocks/about-us/contact' ) ;
		get_template_part( '/blocks/about-us/blog' ) ;
		get_template_part( '/blocks/about-us/ceo' ) ;

	?>

<?php get_footer(); ?>