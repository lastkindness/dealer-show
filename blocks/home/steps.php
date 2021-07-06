<?php if( $show_steps = get_field('show_steps') ) : ?>

	<section class="stages" id="stages">
	    <div class="container">
	        <div class="stages__wrapper">

	        	<?php if( $title_steps = get_field('title_steps') ) : ?>
		            <h2 class="h1 stages__title"><?php echo $title_steps ; ?></h2>
		        <?php endif ; ?>

		        <?php if( have_rows('steps') ): ?>

		            <ul class="stages__grid">

		            	<?php while( have_rows('steps') ) : the_row(); ?>

		            		<?php

		            			$title = get_sub_field('title') ;
		            			$text = get_sub_field('text') ;
		            			$icon = get_sub_field('icon') ;

		            		?>

		            		<?php if( $icon || $text || $title ) : ?>

				                <li class="stages__item">
				                    <span class="stages__img">
				                        <span class="stages__value">
<!--				                            <span>--><?php //echo get_row_index(); ?><!--</span>-->
                                            <?php if( $icon ) : ?>
                                                <img src="<?php echo $icon ; ?>" alt="">
                                            <?php endif ; ?>
				                        </span>

				                        <?php if( $title ) : ?>
				                        	<h5 class="h5 stages__subtitle"><?php echo $title ; ?></h5>
				                        <?php endif ; ?>

				                        <span class="plus"></span>
				                    </span>
				                    <?php if( $text ) : ?>
				                    	<p class="stages__text"><?php echo $text ; ?></p>
				                    <?php endif ; ?>
				                </li>

				            <?php endif ; ?>

		            	<?php endwhile ; ?>

		            </ul>

		        <?php endif ; ?>

	        </div>
	    </div>
	</section>

<?php endif ; ?>
