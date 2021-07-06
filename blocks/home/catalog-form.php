<?php $show_form_select = get_field('show_form_select') ; ?>

<?php if( $show_form_select ) : ?>

	<section class="car-selection" id="car-selection">
	    <div class="container">
	        <div class="car-selection__wrapper">

	        	<?php

	        		$form_title1 = get_field('form_title1') ;
	        		$form_title2 = get_field('form_title2') ;
	        		$catalog_page_form = get_field('catalog_page_form') ;

	        	?>

	        	<?php if( $form_title2 || $form_title1 ) : ?>
		            <div class="car-selection__title">

		            	<?php if( $form_title1 ) : ?>
			                <h2 class="title h2"><?php echo $form_title1 ; ?></h2>
			            <?php endif ; ?>

			            <?php if( $form_title2 ) : ?>
		                	<h2 class="subtitle h2"><?php echo $form_title2 ; ?></h2>
		                <?php endif ; ?>

		            </div>
		        <?php endif ; ?>

	            <div class="car-selection__content">
	                <form action="<?php echo $catalog_page_form ; ?>" class="car-selection__form">
	                    <div class="column column__find-cars">
	                        <div class="input-container">
	                            <label for="car-type">Тип транспортного средства</label>
	                            <select id="car-type" name="type">
	                                <option value="cars">Автомобиль</option>
	                                <option value="mototechnics">Mото-техника</option>
	                                <option value="electrocars">Электрокары</option>
	                            </select>
	                        </div>

	                        <?php

	                        	$car_manufacturer = get_terms( array(
								    'taxonomy' => 'car_manufacturer',
								    'parent' => 0,
								    'hide_empty' => true
								) );

	                        ?>

	                        <?php if( !empty($car_manufacturer) ) : ?>

	                        	<div class="input-container input-container__car-brand">

									<label for="car-brand">Марка</label>

									<select id="car-brand" name="car-brand">

										<option value="all">Все</option>

										<?php foreach( $car_manufacturer as $manufacturer ) : ?>

											<option value="<?php echo $manufacturer->term_id ; ?>"><?php echo $manufacturer->name ; ?></option>

										<?php endforeach ; ?>

									</select>

								</div>

	                    	<?php endif ; ?>

                        	<div class="input-container input-container__car-model">
                        		<div class="car-model-ajax">

				                    <label for="car-model">Модель</label>
				                    <select id="car-model" name="car-model">

				                        <option value="all">Все</option>

				                    </select>

                        		</div>
			                </div>

	                    </div>
	                    <div class="column">

	                    	<?php

	                    		$issue_year = get_terms( array(
								    'taxonomy' => 'issue_year',
								    'hide_empty' => true,
								    'orderby' => 'name',
								    'order' => 'DESC',
								) );

	                    	?>

	                    	<?php if( !empty($issue_year) ) : ?>

		                        <div class="input-container input-container_dual">
		                            <label for="year-of-issue">Год выпуска</label>

		                            <select id="year-of-issue" name="year-of-issue" data-placeholder="От">
		                                <option></option>

		                                <?php foreach( $issue_year as $year ) : ?>
		                                	<option value="<?php echo $year->name ; ?>"><?php echo $year->name ; ?></option>
		                                <?php endforeach ; ?>

		                            </select>

		                            <select id="year-of-ending" name="year-of-ending" data-placeholder="До">
		                                <option></option>

		                                <?php foreach( $issue_year as $year ) : ?>
		                                	<option value="<?php echo $year->name ; ?>"><?php echo $year->name ; ?></option>
		                                <?php endforeach ; ?>

		                            </select>
		                        </div>

		                    <?php endif ; ?>

		                    <?php if( have_rows('form_price_from') || have_rows('form_price_to') ) :  ?>

		                        <div class="input-container input-container_dual">
		                            <label for="cost">Стоимость ($)</label>

		                            <?php if( have_rows('form_price_from') ) : ?>

			                            <select id="cost-from" name="cost-from" data-placeholder="От">
			                                <option></option>

			                                <?php while( have_rows('form_price_from') ) : the_row(); ?>

			                                	<option value="<?php echo get_sub_field('price_from') ?>"><?php echo get_sub_field('price_from') ?></option>

			                                <?php endwhile ; ?>

			                            </select>

			                        <?php endif ; ?>

			                        <?php if( have_rows('form_price_to') ) : ?>

			                            <select id="cost-up-to" name="cost-up-to" data-placeholder="До">
			                                <option></option>

			                                <?php while( have_rows('form_price_to') ) : the_row(); ?>
			                               		<option value="<?php echo get_sub_field('price_to') ?>"><?php echo get_sub_field('price_to') ?></option>
			                               	<?php endwhile ; ?>

			                            </select>

			                        <?php endif ; ?>

		                        </div>

	                        <?php endif ; ?>

	                        <button class="btn btn_fullwidth">подобрать</button>
	                    </div>
	                </form>

	                <?php if( have_rows('advantages') ) : ?>

		                <ul class="car-selection__advantages">

		                    <?php while( have_rows('advantages') ) : the_row(); ?>

		                    	<?php

		                    		$icon = get_sub_field('icon') ;
		                    		$text = get_sub_field('text') ;
		                    		$title_type = get_sub_field('title_type') ;
		                    		$title = get_sub_field('title') ;

		                    	?>

		                    	<?php if( $text ) : ?>
				                    <li class="car-selection__advantage">
				                        <div class="img-wrap">
				                            <span class="img" style="
				                                -webkit-mask-image: url(<?php echo $icon ; ?>);
				                                mask: url(<?php echo $icon ; ?>);">
				                            </span>
				                        </div>
				                        <div class="content">

				                        	<?php if( $title ) : ?>
				                        		<<?php echo $title_type ; ?> class="title h3"><?php echo $title ; ?></<?php echo $title_type ; ?>>
				                        	<?php endif ; ?>

				                            <?php echo $text ; ?>

				                        </div>
				                    </li>
				                <?php endif ; ?>

			                <?php endwhile ; ?>

		                </ul>

		            <?php endif ; ?>

	            </div>
	        </div>
	    </div>
	</section>

<?php endif ; ?>
