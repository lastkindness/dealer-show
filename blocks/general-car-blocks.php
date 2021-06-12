<?php  

		$manager_consultation = get_field('manager_consultation', 'option') ;

	?>

	<?php if( $manager_consultation['show_manager'] ) : ?>

		<?php  

			$manager_background = $manager_consultation['manager_background'] ;
			$manager_image = $manager_consultation['manager_image'] ;
			$manager_title1 = $manager_consultation['manager_title1'] ;
			$manager_title2 = $manager_consultation['manager_title2'] ;
			$manager_form = $manager_consultation['manager_form'] ;

		?>

		<section class="contact-form" id="contact-form">
		    <div class="container">
		        <div class="contact-form__wrapper" <?php if( $manager_background ) : ?> style="background-image: url(<?php echo $manager_background ; ?>)" <?php endif ; ?> >
		            <div class="contact-form__content">
		                <h2 class="contact-form__title h1">

		                	<?php if( $manager_title1 ) : ?>
		                    	<span class="red"><?php echo $manager_title1 ; ?></span>
		                    <?php endif ; ?>

		                    <?php if( $manager_title2 ) : ?>
			                    <br>
			                    <div class="white"><?php echo $manager_title2 ; ?></div>
			                <?php endif ; ?>

		                </h2>

		                <?php if( $manager_form ){ echo do_shortcode($manager_form) ; } ; ?>

		            </div>

		            <?php if( $manager_image ) : ?>
			            <div class="contact-form__image">
			                <img src="<?php echo $manager_image['url'] ; ?>" alt="<?php echo $manager_image['alt'] ; ?>">
			            </div>
			        <?php endif ; ?>

		        </div>
		    </div>
		</section>

	<?php endif ; ?>

	<?php  

		$cart_faq = get_field('cart_faq', 'option') ;

	?>

	<?php if( $cart_faq['show_faq'] && have_rows('cart_faq', 'option') ) : ?>

		<?php $faq_title_size = $cart_faq['faq_title_size'] ; ?>

		<section class="faq" id="faq">
		    <div class="faq-wrapper">
		        <div class="container">
		            <div class="faq__content">

		            	<ul class="faq__content-list">

		            		<?php while( have_rows('cart_faq', 'option') ) : the_row(); ?>
				            	<?php while( have_rows('faq') ) : the_row(); ?>

				            		<?php  

				            			$title = get_sub_field('title') ;
				            			$text = get_sub_field('text') ;

				            		?>

				            		<?php if( $text && $title ) : ?>
					            		<li class="faq__content-li">
					                        <div class="faq__content-title">
					                            <<?php echo $faq_title_size ; ?> class="h4 title"><?php echo $title ; ?></<?php echo $faq_title_size ; ?>>
					                            <span class="icon icon-arr"></span>
					                        </div>
					                        <div class="faq__content-text" style="display: none;">
					                            <?php echo $text ; ?>
					                        </div>
					                    </li>
					                <?php endif ; ?>

				            	<?php endwhile ; ?>
			            	<?php endwhile ; ?>

			            </ul>

		            </div>
		        </div>
		    </div>
		</section>

	<?php endif ; ?>

	<?php  

		$no_answer_form = get_field('no_answer_form', 'option') ;

	?>

	<?php if( $show_no_answer = $no_answer_form['show_no_answer'] ) : ?>

		<?php  

			$no_answer_background = $no_answer_form['no_answer_background'] ;
			$no_answer_title = $no_answer_form['no_answer_title'] ;
			$no_answer_subtitle = $no_answer_form['no_answer_subtitle'] ;
			$no_answer_form = $no_answer_form['no_answer_form'] ;

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