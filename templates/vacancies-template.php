<?php
/*
 * Template name: Шаблон.Вакансии
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

	<section class="vacancy-about">
	    <div class="container">
	        <div class="vacancy-about__wrapper">
	            <div class="vacancy-about__text">
	                <?php the_content() ; ?>
	            </div>

	            <?php  

	            	$about_title = get_field('about_title') ;

	            ?>

	            <div class="vacancy-about__in-number">

	            	<?php if( $about_title ) : ?>
	                	<h3 class="vacancy-about__titile h3"><?php echo $about_title ; ?></h3>
	                <?php endif ; ?>

	                <?php if( have_rows('numbers') ): ?>

		                <ul class="vacancy-about__list">

							<?php while( have_rows('numbers') ) : the_row(); ?>

								<?php  

									$number = get_sub_field('number') ;
									$text = get_sub_field('text') ;

								?>

								<?php if( $text && $number ) : ?>
				                    <li class="vacancy-about__item">
				                        <span class="icon"><?php echo $number ; ?></span>
				                        <h3 class="title h3"><?php echo $text ; ?></h3>
				                    </li>
				                <?php endif ; ?>

			                <?php endwhile ; ?>

		                </ul>

		            <?php endif ; ?>

	            </div>
	        </div>
	    </div>
	</section>

	<?php if( have_rows('vacancy_list') ): ?>

		<section class="vacancy-cards">
		    <div class="container">
		        <div class="vacancy-cards__wrapper">

		        	<?php while( have_rows('vacancy_list') ) : the_row(); ?>

		        		<?php  

		        			$title = get_sub_field('title') ;
		        			$description = get_sub_field('description') ;
		        			$require = get_sub_field('require') ;
		        			$offer = get_sub_field('offer') ;

		        		?>

		        		<?php if( $title && $require && $offer ) : ?>
				            <div class="vacancy-card">
				                <h3 class="vacancy-card__title"><?php echo $title ; ?></h3>
				                <div class="vacancy-card__description">
				                    <?php echo $description ; ?>
				                </div>
				                <div class="vacancy-card__conditions">
				                    <div class="vacancy-card__requirements">
				                        <h4 class="h4 title">ТРЕБОВАНИЯ К КАНДИДАТУ</h4>
				                        <?php echo $require ; ?>
				                    </div>
				                    <div class="vacancy-card__offer">
				                        <h4 class="h4 title">ЧТО МЫ ПРЕДЛАГАЕМ</h4>
				                        <?php echo $offer ; ?>
				                    </div>
				                </div>
				                <button class="vacancy-card__btn btn btn_secondary">Откликнуться</button>
				            </div>
				        <?php endif ; ?>

			        <?php endwhile ; ?>

		        </div>
		    </div>
		</section>

	<?php endif ; ?>

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