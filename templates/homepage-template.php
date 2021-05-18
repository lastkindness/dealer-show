<?php
/*
 * Template name: Шаблон.Главная
 */

get_header(); ?>

<?php 

	get_template_part( '/blocks/home/slider' );
	get_template_part( '/blocks/home/catalog-form' );
	get_template_part( '/blocks/home/top-auto' );
	get_template_part( '/blocks/home/get-list-form' );
	get_template_part( '/blocks/home/warranty' );
	get_template_part( '/blocks/home/manager' );
	get_template_part( '/blocks/home/reviews' );
	get_template_part( '/blocks/home/steps' );
	get_template_part( '/blocks/home/viber' );
	get_template_part( '/blocks/home/auctions' );
	get_template_part( '/blocks/home/faq' );
	get_template_part( '/blocks/home/no-answer' );
	get_template_part( '/blocks/home/contacts' );
	get_template_part( '/blocks/home/blog' );
	get_template_part( '/blocks/home/seo' );

?>

<?php get_footer(); ?>