<?php if( $show_faq = get_field('show_faq') && have_rows('faq') ) : ?>

	<?php $faq_title_size = get_field('faq_title_size') ; ?>

	<section class="faq" id="faq">
	    <div class="faq-wrapper">
	        <div class="container">
	            <div class="faq__content">

	            	<ul class="faq__content-list">

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

		            </ul>

	            </div>
	        </div>
	    </div>
	</section>

<?php endif ; ?>
