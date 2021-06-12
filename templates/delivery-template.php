<?php
/*
 * Template name: Шаблон.Доставка/Растаможка
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

		get_template_part( '/blocks/delivery/top_section' ) ;
		get_template_part( '/blocks/delivery/simple_text' ) ;
		get_template_part( '/blocks/delivery/stages' ) ;
		get_template_part( '/blocks/delivery/viber' ) ;
		get_template_part( '/blocks/delivery/seo' ) ;

	?>

<?php get_footer(); ?>