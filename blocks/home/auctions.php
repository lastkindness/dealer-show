<?php if( $show_auctions = get_field('show_auctions') ) : ?>

	<section class="auctions" id="auctions">
	    <div class="container">
	        <div class="auctions__wrapper swiper-container">

	        	<?php if( $auctions_title = get_field('auctions_title') ) : ?>
	            	<h2 class="h1 auctions__title"><?php echo $auctions_title ; ?></h2>
	            <?php endif ; ?>

	            <?php if( have_rows('auctions') ): ?>

	            	<ul class="auctions__grid swiper-wrapper">

	            		<?php while( have_rows('auctions') ) : the_row(); ?>

	            			<?php

	            				$auctions_name = get_sub_field('auctions_name') ;
	            				$image = get_sub_field('image') ;
	            				$link = get_sub_field('link') ;

	            				if( $link ){
	            					$link_target = $link ;
	            				}else{
	            					$link_target = "#" ;
	            				}

	            			?>
	            			<?php if( $image && $auctions_name ) : ?>
		            			<li class="auctions__item swiper-slide">
				                    <div href="<?php echo $link_target ; ?>" class="auctions__card">
				                        <img src="<?php echo $image['url'] ; ?>" alt="<?php echo $image['alt'] ; ?>">
				                    </div>
				                    <div class="auctions__content">
				                        <p class="auctions__item-text"><?php echo $auctions_name ; ?></p>
<!--				                        <a href="/auction" class="auctions__link">Подробнее <span class="icon icon-play"></span></a>-->
				                    </div>
				                </li>
				            <?php endif ; ?>

	            		<?php endwhile ; ?>

	            	</ul>

	            <?php endif ; ?>

	        </div>
	    </div>
	</section>

<?php endif ; ?>
