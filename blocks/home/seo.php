<?php if( $show_seo = get_field('show_seo') ) : ?>

	<?php  

		$seo_title = get_field('seo_title') ;
		$seo_text = get_field('seo_text') ;

	?>

	<section class="text-content" id="text-content">
	    <div class="container">
	        <div class="text-content__wrapper">

	        	<?php if( $seo_title ) : ?>
	            	<h1 class="h3 text-content__title"><?php echo $seo_title ; ?></h1>
	            <?php endif ; ?>

	            <?php if( $seo_text ) : ?>

		            <div class="text-content__container">
		                <div class="text-content__item">
		                    <?php echo $seo_text ; ?>
		                </div>
		            </div>

		        <?php endif ; ?>

	        </div>
	    </div>
	</section>

<?php endif ; ?>