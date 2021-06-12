<?php  

	function clean_phone( $phone ){
	    return preg_replace( '/[^0-9]/', '', $phone );
	}

	function basetheme_options_capability(){
	    $role = get_role( 'administrator' );
	    $role->add_cap( 'theme_options_view' );
	}
	add_action( 'admin_init', 'basetheme_options_capability' );

	//theme options tab in appearance
	if( function_exists( 'acf_add_options_page' ) && current_user_can( 'theme_options_view' ) ) {
	    acf_add_options_page( array(
	        'page_title'    => 'Общие настройки темы',
	        'menu_title'    => 'Настройки Темы',
	        'menu_slug' 	=> 'acf-theme-options',
	    ) );
	}

	//Custom Menu Walker
	class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\"sub-menu\">\n";
		}

		function end_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat( "\t", $depth );
			$output .= "$indent</ul>\n";
		}

		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			global $wp_query;
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			$class_names = ' class="' . esc_attr( $class_names ) . '"';

			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names . '>';

			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) . '"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) . '"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) . '"' : '';
			$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) . '"' : '';

			$item_output = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

		function end_el( &$output, $item, $depth = 0, $args = array() ) {
			$output .= "</li>\n";
		}
	}

	register_nav_menus( array(
		'main-menu' => __( 'Main Navigation', 'Dealer-show' ),
		'footer-first' => __( 'Footer First', 'Dealer-show' ),
	) );

	function home_filter_cars(){

		check_ajax_referer('check_nonce', 'security') ;

		if( isset( $_POST['type'] ) && $_POST['type'] !== '' ){

			$type = $_POST['type'] ;

			if( $type == 'cars' ){

				$car_manufacturer = get_terms( array(
				    'taxonomy' => 'car_manufacturer',
				    'parent' => 0,
				    'hide_empty' => true
				) );

			}elseif( $type == 'electrocars' ){

				$car_manufacturer = get_terms( array(
				    'taxonomy' => 'electrocars_manufacturer',
				    'parent' => 0,
				    'hide_empty' => true
				) );

			}else{

				$car_manufacturer = get_terms( array(
				    'taxonomy' => 'mototechnics_manufacturer',
				    'parent' => 0,
				    'hide_empty' => true
				) );

			}

			if( !empty($car_manufacturer) ){ ?>

				<div class="input-container input-container__car-brand">

					<label for="car-brand">Марка</label>

					<select id="car-brand" name="car-brand">

						<option value="all">Все</option>

						<?php foreach( $car_manufacturer as $manufacturer ) : ?>

							<option value="<?php echo $manufacturer->term_id ; ?>"><?php echo $manufacturer->name ; ?></option>

						<?php endforeach ; ?>

					</select>

				</div>

			<?php } ?>

			<div class="input-container input-container__car-model">
				<div class="car-model-ajax">
	                <label for="car-model">Модель</label>
	                <select id="car-model" name="car-model">

	                    <option value="all">Все</option>

	                </select>
	            </div>
            </div>

			<?php

		}

		die;

	}

	add_action('wp_ajax_homegetcar', 'home_filter_cars');
	add_action('wp_ajax_nopriv_homegetcar', 'home_filter_cars');

	function home_filter_cars_model(){

		check_ajax_referer('check_nonce', 'security') ;

		if( isset( $_POST['brand'] ) && $_POST['brand'] !== '' ){

			$brand = $_POST['brand'] ;
			$type = $_POST['type'] ;

			if( $type == 'cars' ){

				$car_model = get_term_children( $brand, 'car_manufacturer' ) ;
				$manufacturer = 'car_manufacturer' ;

			}elseif( $type == 'electrocars' ){

				$car_model = get_term_children( $brand, 'electrocars_manufacturer' ) ;
				$manufacturer = 'electrocars_manufacturer' ;

			}else{

				$car_model = get_term_children( $brand, 'mototechnics_manufacturer' ) ;
				$manufacturer = 'mototechnics_manufacturer' ;

			}

			if( !empty($car_model) ){ ?>

				<div class="car-model-ajax">
	                <label for="car-model">Модель</label>
	                <select id="car-model" name="car-model">

	                    <option value="all">Все</option>

	                    <?php foreach( $car_model as $model ) : ?>

	                    	<?php $term = get_term_by( 'id', $model, $manufacturer ); ?>

	                    	<option value="<?php echo $term->term_id ; ?>"><?php echo $term->name ; ?></option>

	                    <?php endforeach ; ?>

	                </select>
	            </div>

			<?php }else{ ?>

				<div class="car-model-ajax">
	                <label for="car-model">Модель</label>
	                <select id="car-model" name="car-model">

	                    <option value="all">Все</option>

	                </select>
	            </div>

			<?php }

		}

		die;

	}

	add_action('wp_ajax_homegetmodel', 'home_filter_cars_model');
	add_action('wp_ajax_nopriv_homegetmodel', 'home_filter_cars_model');


	function catalog_manufacturer_filter(){

		date_default_timezone_set("Europe/Kiev");
		date_default_timezone_get();

		check_ajax_referer('check_nonce', 'security') ; ?>

		<div class="manufacturer-insert-holder">

			<?php if( isset( $_POST['type'] ) && $_POST['type'] !== '' || isset( $_POST['typeGet'] ) && $_POST['typeGet'] !== '' ){

				if( isset( $_POST['typeGet'] ) && $_POST['typeGet'] !== '' ){
					$type = $_POST['typeGet'] ;
				}else{
					$type = $_POST['type'] ;
				}

				if( $type == 'cars' ){

					$car_manufacturer = get_terms( array(
					    'taxonomy' => 'car_manufacturer',
					    'parent' => 0,
					    'hide_empty' => true
					) );

				}elseif( $type == 'electrocars' ){

					$car_manufacturer = get_terms( array(
					    'taxonomy' => 'electrocars_manufacturer',
					    'parent' => 0,
					    'hide_empty' => true
					) );

				}else{

					$car_manufacturer = get_terms( array(
					    'taxonomy' => 'mototechnics_manufacturer',
					    'parent' => 0,
					    'hide_empty' => true
					) );

				}

        		if( isset( $_POST['carBrand'] ) && $_POST['carBrand'] !== '' ){
        			$carBrand = 'open' ;
        			$carBrand_open = '' ;
        		}else{
        			$carBrand = '' ;
        			$carBrand_open = 'close' ;
        		}

				if( !empty($car_manufacturer) ){ ?>
						
					<div class="catalog__filter_item <?php echo $carBrand ; ?>">
	                    <div class="catalog__filter_item_title filter-title">
	                        <div class="plus icon icon-up"></div>
	                        <div class="filter-subtitle"><span>Производитель</span></div>
	                    </div>
	                    <div class="catalog__filter_item_content <?php echo $carBrand_open ; ?> checkbox-manufacturer-<?php echo $type ; ?>">

	                    	<div class="catalog__filter_item_checkbox">
                                <div class="catalog__filter_item_input">
                                    <input id="id-all" type="checkbox" value="all">
                                    <div class="checkbox"></div>
                                    <label for="id-all">Все Производители</label><a href="#link-for-seo" class="hide"></a>
                                </div>
                            </div>

                            <?php if( $_POST['budget'] == '' ) : ?>

		                    	<?php foreach( $car_manufacturer as $manufacturer ) : ?>

		                    		<?php  

		                    			if( $manufacturer->term_id == intval( $_POST['carBrand'] ) ){
	                    					$isActive = 'active' ;
	                    				}else{
	                    					$isActive = '' ;
	                    				}

		                    		?>

		                            <div class="catalog__filter_item_checkbox">
		                                <div class="catalog__filter_item_input">
		                                    <input id="<?php echo $manufacturer->slug ; ?>" type="checkbox" class="<?php echo $isActive ; ?>" value="<?php echo $manufacturer->term_id ; ?>">
		                                    <div class="checkbox"></div>
		                                    <label for="<?php echo $manufacturer->slug ; ?>"><?php echo $manufacturer->name ; ?><span class="grey">(<span class="number"><?php echo $manufacturer->count ; ?></span>)
		                                        </span></label><a href="#link-for-seo" class="hide"></a>
		                                </div>
		                            </div>
		                        <?php endforeach ; ?>

		                    <?php else : ?>

		                    	<?php foreach( $car_manufacturer as $manufacturer ) : ?>

		                    		<?php $count_two_tax = count_posts_budget_manufacturer( $manufacturer->term_id, $_POST['budget'] ) ; ?>

		                            <div class="catalog__filter_item_checkbox">
		                                <div class="catalog__filter_item_input">
		                                    <input id="<?php echo $manufacturer->slug ; ?>" type="checkbox" value="<?php echo $manufacturer->term_id ; ?>">
		                                    <div class="checkbox"></div>
		                                    <label for="<?php echo $manufacturer->slug ; ?>"><?php echo $manufacturer->name ; ?><span class="grey">(<span class="number"><?php echo $count_two_tax ; ?></span>)
		                                        </span></label><a href="#link-for-seo" class="hide"></a>
		                                </div>
		                            </div>
		                        <?php endforeach ; ?>

		                    <?php endif ; ?>

	                    </div>
	                </div>

				<?php } ?>

			<?php } ?>

		</div>

		<div class="filter-insert-holder">

			<?php if( isset( $_POST['type'] ) && $_POST['type'] !== '' ){

				$type = $_POST['type'] ;

				if( $type == 'cars' ){

					$car_type = get_terms( array(
					    'taxonomy' => 'car_type',
					    'hide_empty' => true
					) );

					$location = get_terms( array(
					    'taxonomy' => 'location',
					    'hide_empty' => true
					) );

					$fuel = get_terms( array(
					    'taxonomy' => 'fuel',
					    'hide_empty' => true
					) );

					$volume = get_terms( array(
					    'taxonomy' => 'volume',
					    'hide_empty' => true
					) );

					$transmission = get_terms( array(
					    'taxonomy' => 'transmission',
					    'hide_empty' => true
					) );

					$drive = get_terms( array(
					    'taxonomy' => 'drive',
					    'hide_empty' => true
					) );

				}elseif( $type == 'electrocars' ){

					$electrocars_type = get_terms( array(
					    'taxonomy' => 'electrocars_type',
					    'hide_empty' => true
					) );

					$location = get_terms( array(
					    'taxonomy' => 'location',
					    'hide_empty' => true
					) );

					$electrocars_drive = get_terms( array(
					    'taxonomy' => 'electrocars_drive',
					    'hide_empty' => true
					) );

				}else{

					$location = get_terms( array(
					    'taxonomy' => 'location',
					    'hide_empty' => true
					) );

				}

				if( $type == 'cars' ){ ?>

					<?php if( $_POST['budget'] == '' ) : ?>

		                <?php if( !empty($car_type) ) : ?>

							<div class="catalog__filter_item">
			                    <div class="catalog__filter_item_title filter-title">
			                        <div class="plus icon icon-up"></div>
			                        <div class="filter-subtitle"><span>Тип Кузова</span></div>
			                    </div>
			                    <div class="catalog__filter_item_content close checkbox-car-cuzov">

		                    		<?php foreach( $car_type as $type_car ) : ?>

		                    			<div class="catalog__filter_item_checkbox">
			                                <div class="catalog__filter_item_input">
			                                    <input id="<?php echo $type_car->term_id ; ?>-type" type="checkbox" value="<?php echo $type_car->term_id ; ?>">
			                                    <div class="checkbox"></div>
			                                    <label for="<?php echo $type_car->term_id ; ?>-type">
			                                    	<?php echo $type_car->name ?>
			                                    	<span class="grey">(<span class="number"><?php echo $type_car->count ; ?></span>)</span>
			                                    </label>
			                                    <a href="#link-for-seo" class="hide"></a>
			                                </div>
			                            </div>

		                    		<?php endforeach ; ?>

			                    </div>
			                </div>

		                <?php endif ; ?>

		                <?php if( !empty($location) ) : ?>

		                	<?php  

		                		if( isset( $_POST['inUkraine'] ) && $_POST['inUkraine'] !== '' ){
		                			$location_open = 'open' ;
		                			$checkboxes_open = '' ;
		                		}else{
		                			$location_open = '' ;
		                			$checkboxes_open = 'close' ;
		                		}

		                	?>

							<div class="catalog__filter_item <?php echo $location_open ; ?>">
			                    <div class="catalog__filter_item_title filter-title">
			                        <div class="plus icon icon-up"></div>
			                        <div class="filter-subtitle"><span>Mестонахождение</span></div>
			                    </div>
			                    <div class="catalog__filter_item_content <?php echo $checkboxes_open ; ?> checkbox-car-location">

		                    		<?php foreach( $location as $location_car ) : ?>

		                    			<?php  

		                    				$location_car_counter = get_term_post_count_by_type( $location_car, 'location', 'cars' ) ;

		                    				if( $location_car->term_id == intval( $_POST['inUkraine'] ) ){
		                    					$isActive = 'active' ;
		                    				}else{
		                    					$isActive = '' ;
		                    				}

		                    			?>

		                    			<div class="catalog__filter_item_checkbox">
			                                <div class="catalog__filter_item_input">
			                                    <input id="<?php echo $location_car->term_id ; ?>-location" type="checkbox" value="<?php echo $location_car->term_id ; ?>" class="<?php echo $isActive ; ?>">
			                                    <div class="checkbox"></div>
			                                    <label for="<?php echo $location_car->term_id ; ?>-location"><?php echo $location_car->name ?><span class="grey">(<span class="number"><?php echo $location_car_counter ; ?></span>)
			                                        </span></label><a href="#link-for-seo" class="hide"></a>
			                                </div>
			                            </div>

		                    		<?php endforeach ; ?>

			                    </div>
			                </div>

		                <?php endif ; ?>

		                <?php if( !empty($fuel) ) : ?>

							<div class="catalog__filter_item">
			                    <div class="catalog__filter_item_title filter-title">
			                        <div class="plus icon icon-up"></div>
			                        <div class="filter-subtitle"><span>Тип Топлива</span></div>
			                    </div>
			                    <div class="catalog__filter_item_content close checkbox-car-fuel">

		                    		<?php foreach( $fuel as $fuel_car ) : ?>

		                    			<div class="catalog__filter_item_checkbox">
			                                <div class="catalog__filter_item_input">
			                                    <input id="<?php echo $fuel_car->term_id ; ?>-fuel" type="checkbox" value="<?php echo $fuel_car->term_id ; ?>">
			                                    <div class="checkbox"></div>
			                                    <label for="<?php echo $fuel_car->term_id ; ?>-fuel"><?php echo $fuel_car->name ?><span class="grey">(<span class="number"><?php echo $fuel_car->count ; ?></span>)
			                                        </span></label><a href="#link-for-seo" class="hide"></a>
			                                </div>
			                            </div>

		                    		<?php endforeach ; ?>

			                    </div>
			                </div>

		                <?php endif ; ?>

		                <?php if( !empty($volume) ) : ?>

							<div class="catalog__filter_item">
			                    <div class="catalog__filter_item_title filter-title">
			                        <div class="plus icon icon-up"></div>
			                        <div class="filter-subtitle"><span>Объем Двигателя</span></div>
			                    </div>
			                    <div class="catalog__filter_item_content close checkbox-car-volume">

		                    		<?php foreach( $volume as $volume_car ) : ?>

		                    			<div class="catalog__filter_item_checkbox">
			                                <div class="catalog__filter_item_input">
			                                    <input id="<?php echo $volume_car->term_id ; ?>-volume" type="checkbox" value="<?php echo $volume_car->term_id ; ?>">
			                                    <div class="checkbox"></div>
			                                    <label for="<?php echo $volume_car->term_id ; ?>-volume"><?php echo $volume_car->name ?><span class="grey">(<span class="number"><?php echo $volume_car->count ; ?></span>)
			                                        </span></label><a href="#link-for-seo" class="hide"></a>
			                                </div>
			                            </div>

		                    		<?php endforeach ; ?>

			                    </div>
			                </div>

		                <?php endif ; ?>

		                <?php if( !empty($transmission) ) : ?>

							<div class="catalog__filter_item">
			                    <div class="catalog__filter_item_title filter-title">
			                        <div class="plus icon icon-up"></div>
			                        <div class="filter-subtitle"><span>Коробка передач</span></div>
			                    </div>
			                    <div class="catalog__filter_item_content close checkbox-car-transmission">

		                    		<?php foreach( $transmission as $transmission_car ) : ?>

		                    			<div class="catalog__filter_item_checkbox">
			                                <div class="catalog__filter_item_input">
			                                    <input id="<?php echo $transmission_car->term_id ; ?>-transmission" type="checkbox" value="<?php echo $transmission_car->term_id ; ?>">
			                                    <div class="checkbox"></div>
			                                    <label for="<?php echo $transmission_car->term_id ; ?>-transmission"><?php echo $transmission_car->name ?><span class="grey">(<span class="number"><?php echo $transmission_car->count ; ?></span>)
			                                        </span></label><a href="#link-for-seo" class="hide"></a>
			                                </div>
			                            </div>

		                    		<?php endforeach ; ?>

			                    </div>
			                </div>

		                <?php endif ; ?>

		                <?php if( !empty($drive) ) : ?>

							<div class="catalog__filter_item">
			                    <div class="catalog__filter_item_title filter-title">
			                        <div class="plus icon icon-up"></div>
			                        <div class="filter-subtitle"><span>Привод</span></div>
			                    </div>
			                    <div class="catalog__filter_item_content close checkbox-car-drive">

		                    		<?php foreach( $drive as $drive_car ) : ?>

		                    			<div class="catalog__filter_item_checkbox">
			                                <div class="catalog__filter_item_input">
			                                    <input id="<?php echo $drive_car->term_id ; ?>-drive" type="checkbox" value="<?php echo $drive_car->term_id ; ?>">
			                                    <div class="checkbox"></div>
			                                    <label for="<?php echo $drive_car->term_id ; ?>-drive"><?php echo $drive_car->name ?><span class="grey">(<span class="number"><?php echo $drive_car->count ; ?></span>)
			                                        </span></label><a href="#link-for-seo" class="hide"></a>
			                                </div>
			                            </div>

		                    		<?php endforeach ; ?>

			                    </div>
			                </div>

		                <?php endif ; ?>

		            <?php endif ; ?>

				<?php } ?>

				<?php if( $type == 'electrocars' ){ ?>

					<?php if( !empty($electrocars_type) ) : ?>

						<div class="catalog__filter_item">
		                    <div class="catalog__filter_item_title filter-title">
		                        <div class="plus icon icon-up"></div>
		                        <div class="filter-subtitle"><span>Тип Кузова</span></div>
		                    </div>
		                    <div class="catalog__filter_item_content close checkbox-electrocars-cuzov">

	                    		<?php foreach( $electrocars_type as $electrocars_car ) : ?>

	                    			<div class="catalog__filter_item_checkbox">
		                                <div class="catalog__filter_item_input">
		                                    <input id="<?php echo $electrocars_car->term_id ; ?>-type" type="checkbox" value="<?php echo $electrocars_car->term_id ; ?>">
		                                    <div class="checkbox"></div>
		                                    <label for="<?php echo $electrocars_car->term_id ; ?>-type"><?php echo $electrocars_car->name ?><span class="grey">(<span class="number"><?php echo $electrocars_car->count ; ?></span>)
		                                        </span></label><a href="#link-for-seo" class="hide"></a>
		                                </div>
		                            </div>

	                    		<?php endforeach ; ?>

		                    </div>
		                </div>

	                <?php endif ; ?>

	                <?php if( !empty($location) ) : ?>

						<div class="catalog__filter_item">
		                    <div class="catalog__filter_item_title filter-title">
		                        <div class="plus icon icon-up"></div>
		                        <div class="filter-subtitle"><span>Mестонахождение</span></div>
		                    </div>
		                    <div class="catalog__filter_item_content close checkbox-electrocars-location">

	                    		<?php foreach( $location as $location_car ) : ?>

	                    			<?php  

	                    				$location_car_counter = get_term_post_count_by_type( $location_car, 'location', 'electrocars' ) ;

	                    			?>

	                    			<div class="catalog__filter_item_checkbox">
		                                <div class="catalog__filter_item_input">
		                                    <input id="<?php echo $location_car->term_id ; ?>-location" type="checkbox" value="<?php echo $location_car->term_id ; ?>">
		                                    <div class="checkbox"></div>
		                                    <label for="<?php echo $location_car->term_id ; ?>-location"><?php echo $location_car->name ?><span class="grey">(<span class="number"><?php echo $location_car_counter ; ?></span>)
		                                        </span></label><a href="#link-for-seo" class="hide"></a>
		                                </div>
		                            </div>

	                    		<?php endforeach ; ?>

		                    </div>
		                </div>

	                <?php endif ; ?>

	                <?php if( !empty($electrocars_drive) ) : ?>

						<div class="catalog__filter_item">
		                    <div class="catalog__filter_item_title filter-title">
		                        <div class="plus icon icon-up"></div>
		                        <div class="filter-subtitle"><span>Привод</span></div>
		                    </div>
		                    <div class="catalog__filter_item_content close checkbox-electrocars-drive">

	                    		<?php foreach( $electrocars_drive as $drive_car ) : ?>

	                    			<div class="catalog__filter_item_checkbox">
		                                <div class="catalog__filter_item_input">
		                                    <input id="<?php echo $drive_car->term_id ; ?>-drive" type="checkbox" value="<?php echo $drive_car->term_id ; ?>">
		                                    <div class="checkbox"></div>
		                                    <label for="<?php echo $drive_car->term_id ; ?>-drive"><?php echo $drive_car->name ?><span class="grey">(<span class="number"><?php echo $drive_car->count ; ?></span>)
		                                        </span></label><a href="#link-for-seo" class="hide"></a>
		                                </div>
		                            </div>

	                    		<?php endforeach ; ?>

		                    </div>
		                </div>

	                <?php endif ; ?>

				<?php } ?>

				<?php if( $type == 'mototechnics' ){ ?>

					<?php if( !empty($location) ) : ?>

						<div class="catalog__filter_item">
		                    <div class="catalog__filter_item_title filter-title">
		                        <div class="plus icon icon-up"></div>
		                        <div class="filter-subtitle"><span>Mестонахождение</span></div>
		                    </div>
		                    <div class="catalog__filter_item_content close checkbox-mototechnics-location">

	                    		<?php foreach( $location as $location_car ) : ?>

	                    			<?php  

	                    				$location_car_counter = get_term_post_count_by_type( $location_car, 'location', 'mototechnics' ) ;

	                    			?>

	                    			<div class="catalog__filter_item_checkbox">
		                                <div class="catalog__filter_item_input">
		                                    <input id="<?php echo $location_car->term_id ; ?>-location" type="checkbox" value="<?php echo $location_car->term_id ; ?>">
		                                    <div class="checkbox"></div>
		                                    <label for="<?php echo $location_car->term_id ; ?>-location"><?php echo $location_car->name ?><span class="grey">(<span class="number"><?php echo $location_car_counter ; ?></span>)
		                                        </span></label><a href="#link-for-seo" class="hide"></a>
		                                </div>
		                            </div>

	                    		<?php endforeach ; ?>

		                    </div>
		                </div>

	                <?php endif ; ?>

				<?php } ?>

			<?php } ?>

		</div>

		<?php if( $type == 'cars' ) { ?>

			<?php

				$default_posts_per_page = get_option( 'posts_per_page' ); 

				$today_date_time = date('Y-m-d H:i');

				$cars_arr = array(
					'post_type' => 'cars',
					'posts_per_page' => $default_posts_per_page,
					'paged' => 1,
					'meta_query' => array(
					     array(
					        'key'		=> 'auction_ends',
					        'value'		=> $today_date_time,
					        'compare'	=> '>=',
					    )
				    ),
				    'tax_query' => array(),
				);


				if( isset( $_POST['budget'] ) && $_POST['budget'] !== '' ){
					
					array_push( $cars_arr['tax_query'] , array( 
															'taxonomy'=>'car_budget',
															'field'=>'term_id',
															'terms'=>$_POST['budget']
														)
					) ;

				}

				if( isset( $_POST['inUkraine'] ) && $_POST['inUkraine'] !== '' ){

        			array_push( $cars_arr['tax_query'] , array( 
															'taxonomy'=>'location',
															'field'=>'term_id',
															'terms'=>intval( $_POST['inUkraine'] )
														)
					) ;

        		}

				$cars = new WP_Query($cars_arr) ;

			?>

			<?php if( $cars->have_posts() ) : ?>
				<div class="insert-cards">
					<div class="grid">
						<?php while( $cars->have_posts() ) : $cars->the_post(); ?>

							<?php  

	                			$price = get_field('price') ;
	                			$mileage = get_field('mileage') ;

	                		?>

	                		<div class="grid__card">
		                        <div class="grid__card-flip">
		                            <div class="grid__card-wrapper">
		                                <div class="grid__card-front">
		                                    <a class="grid__card-img" href="<?php echo get_permalink(); ?>">
		                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
		                                    </a>
		                                    <div class="grid__card-content">

		                                        <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
		                                        	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
		                                        </a>

		                                        <p class="grid__card-description">
		                                            <?php echo get_the_content() ; ?>
		                                        </p>
		                                        <div class="grid__card-footer">
		                                            <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
		                                            <a href="<?php echo get_permalink(); ?>" class="btn grid__card-link">Подробнее</a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="grid__card-back">
		                                    <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
		                                    	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
		                                    </a>
		                                    <p class="grid__card-description">
		                                        <?php echo get_the_content() ; ?>
		                                    </p>
		                                    <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
		                                    <ul class="grid__card-characteristics">

		                                    	<?php $car_fuel = get_the_terms( get_the_ID(), 'fuel' ) ; ?>

		                                    	<?php if( is_array( $car_fuel ) ) : ?>
			                                        <li class="grid__card-characteristic">
				                                        <span class="img">
				                                            <span class="icon"
				                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
				                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
				                                            ></span>
				                                        </span>
			                                            <span class="text"><?php echo $car_fuel[0]->name ; ?></span>
			                                        </li>
			                                    <?php endif ; ?>

			                                    <?php $car_year = get_the_terms( get_the_ID(), 'issue_year' ) ; ?>

		                                    	<?php if( is_array( $car_year ) ) : ?>
			                                        <li class="grid__card-characteristic">
				                                        <span class="img">
				                                            <span class="icon"
				                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
				                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
				                                            ></span>
				                                        </span>
			                                            <span class="text"><?php echo $car_year[0]->name ; ?> год</span>
			                                        </li>
			                                    <?php endif ; ?>

			                                    <?php $car_volume = get_the_terms( get_the_ID(), 'volume' ) ; ?>

			                                    <?php if( is_array( $car_volume ) ) : ?>
			                                        <li class="grid__card-characteristic">
				                                        <span class="img">
				                                            <span class="icon"
				                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
				                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
				                                            ></span>
				                                        </span>
			                                            <span class="text"><?php echo $car_volume[0]->name ; ?></span>
			                                        </li>
		                                        <?php endif ; ?>

		                                        <li class="grid__card-characteristic">
			                                        <span class="img">
			                                            <span class="icon"
			                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
			                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
			                                            ></span>
			                                        </span>
		                                            <span class="text"><?php echo $mileage ; ?></span>
		                                        </li>
		                                    </ul>
		                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
		                                    <a href="<?php echo get_permalink(); ?>" class="btn btn_white">Подробнее</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

						<?php endwhile ; ?>
					</div>

	                <div class="pagination pagination-cars">
		                <?php 

							echo paginate_links_custom( array(
							    'current' => max( 1, get_query_var('paged') ),
							    'total' => $cars->max_num_pages,
							    'type' => 'list',
							    'current' => 1,
							) );

		                ?>
	                </div>

				</div>
			<?php else : ?>
				<div class="insert-cards">
					<div class="grid">
						<h2 class="grids-not-found">Не найдено</h2>
					</div>
				</div>
			<?php wp_reset_query() ; ?>
			<?php endif ; ?>

		<?php } ?>

		<?php if( $type == 'electrocars' ) { ?>

			<?php

				$default_posts_per_page = get_option( 'posts_per_page' );

				$today_date_time = date('Y-m-d H:i');

				$cars_arr = array(
					'post_type' => 'electrocars',
					'posts_per_page' => $default_posts_per_page,
					'meta_query' => array(
					     array(
					        'key'		=> 'auction_ends',
					        'value'		=> $today_date_time,
					        'compare'	=> '>=',
					    )
				    )
				);

				$cars = new WP_Query($cars_arr) ;

			?>

			<?php if( $cars->have_posts() ) : ?>
				<div class="insert-cards">
					<div class="grid">
						<?php while( $cars->have_posts() ) : $cars->the_post(); ?>

							<?php  

	                			$price = get_field('price') ;
	                			$mileage = get_field('mileage') ;

	                		?>

	                		<div class="grid__card">
		                        <div class="grid__card-flip">
		                            <div class="grid__card-wrapper">
		                                <div class="grid__card-front">
		                                    <a class="grid__card-img" href="<?php echo get_permalink(); ?>">
		                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
		                                    </a>
		                                    <div class="grid__card-content">

		                                        <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
		                                        	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
		                                        </a>

		                                        <p class="grid__card-description">
		                                            <?php echo get_the_content() ; ?>
		                                        </p>
		                                        <div class="grid__card-footer">
		                                            <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
		                                            <a href="<?php echo get_permalink(); ?>" class="btn grid__card-link">Подробнее</a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="grid__card-back">
		                                    <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
		                                    	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
		                                    </a>
		                                    <p class="grid__card-description">
		                                        <?php echo get_the_content() ; ?>
		                                    </p>
		                                    <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
		                                    <ul class="grid__card-characteristics">

		                                        <li class="grid__card-characteristic">
			                                        <span class="img">
			                                            <span class="icon"
			                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
			                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
			                                            ></span>
			                                        </span>
		                                            <span class="text">Электро</span>
		                                        </li>

			                                    <?php $car_year = get_the_terms( get_the_ID(), 'issue_year' ) ; ?>

		                                    	<?php if( is_array( $car_year ) ) : ?>
			                                        <li class="grid__card-characteristic">
				                                        <span class="img">
				                                            <span class="icon"
				                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
				                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
				                                            ></span>
				                                        </span>
			                                            <span class="text"><?php echo $car_year[0]->name ; ?> год</span>
			                                        </li>
			                                    <?php endif ; ?>

			                                    <?php $acumulator = get_field('acumulator') ; ?>

			                                    <?php if( $acumulator ) : ?>
			                                        <li class="grid__card-characteristic">
				                                        <span class="img">
				                                            <span class="icon"
				                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
				                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
				                                            ></span>
				                                        </span>
			                                            <span class="text"><?php echo $acumulator ; ?></span>
			                                        </li>
		                                        <?php endif ; ?>

		                                        <li class="grid__card-characteristic">
			                                        <span class="img">
			                                            <span class="icon"
			                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
			                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
			                                            ></span>
			                                        </span>
		                                            <span class="text"><?php echo $mileage ; ?></span>
		                                        </li>
		                                    </ul>
		                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
		                                    <a href="<?php echo get_permalink(); ?>" class="btn btn_white">Подробнее</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

						<?php endwhile ; ?>
					</div>

					<div class="pagination pagination-cars">
		                <?php 

							echo paginate_links_custom( array(
							    'current' => max( 1, get_query_var('paged') ),
							    'total' => $cars->max_num_pages,
							    'type' => 'list',
							    'current' => 1,
							) );

		                ?>
	                </div>

				</div>
			<?php else : ?>
				<div class="insert-cards">
					<div class="grid">
						<h2 class="grids-not-found">Не найдено</h2>
					</div>
				</div>
			<?php wp_reset_query() ; ?>
			<?php endif ; ?>

		<?php } ?>

		<?php if( $type == 'mototechnics' ) { ?>

			<?php

				$default_posts_per_page = get_option( 'posts_per_page' );  

				$today_date_time = date('Y-m-d H:i');

				$cars_arr = array(
					'post_type' => 'mototechnics',
					'posts_per_page' => $default_posts_per_page,
					'meta_query' => array(
					     array(
					        'key'		=> 'auction_ends',
					        'value'		=> $today_date_time,
					        'compare'	=> '>=',
					    )
				    )
				);

				$cars = new WP_Query($cars_arr) ;

			?>

			<?php if( $cars->have_posts() ) : ?>
				<div class="insert-cards">
					<div class="grid">
						<?php while( $cars->have_posts() ) : $cars->the_post(); ?>

							<?php  

	                			$price = get_field('price') ;
	                			$mileage = get_field('mileage') ;

	                		?>

	                		<div class="grid__card">
		                        <div class="grid__card-flip">
		                            <div class="grid__card-wrapper">
		                                <div class="grid__card-front">
		                                    <a class="grid__card-img" href="<?php echo get_permalink(); ?>">
		                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
		                                    </a>
		                                    <div class="grid__card-content">

		                                        <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
		                                        	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
		                                        </a>

		                                        <p class="grid__card-description">
		                                            <?php echo get_the_content() ; ?>
		                                        </p>
		                                        <div class="grid__card-footer">
		                                            <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
		                                            <a href="<?php echo get_permalink(); ?>" class="btn grid__card-link">Подробнее</a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="grid__card-back">
		                                    <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
		                                    	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
		                                    </a>
		                                    <p class="grid__card-description">
		                                        <?php echo get_the_content() ; ?>
		                                    </p>
		                                    <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
		                                    <ul class="grid__card-characteristics">

			                                    <?php $car_year = get_the_terms( get_the_ID(), 'issue_year' ) ; ?>

		                                    	<?php if( is_array( $car_year ) ) : ?>
			                                        <li class="grid__card-characteristic">
				                                        <span class="img">
				                                            <span class="icon"
				                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
				                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
				                                            ></span>
				                                        </span>
			                                            <span class="text"><?php echo $car_year[0]->name ; ?> год</span>
			                                        </li>
			                                    <?php endif ; ?>

		                                        <li class="grid__card-characteristic">
			                                        <span class="img">
			                                            <span class="icon"
			                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
			                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
			                                            ></span>
			                                        </span>
		                                            <span class="text"><?php echo $mileage ; ?></span>
		                                        </li>
		                                    </ul>
		                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
		                                    <a href="<?php echo get_permalink(); ?>" class="btn btn_white">Подробнее</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

						<?php endwhile ; ?>
					</div>
					<div class="pagination pagination-cars">
		                <?php 

							echo paginate_links_custom( array(
							    'current' => max( 1, get_query_var('paged') ),
							    'total' => $cars->max_num_pages,
							    'type' => 'list',
							    'current' => 1,
							) );

		                ?>
	                </div>
				</div>
			<?php else : ?>
				<div class="insert-cards">
					<div class="grid">
						<h2 class="grids-not-found">Не найдено</h2>
					</div>
				</div>
			<?php wp_reset_query() ; ?>
			<?php endif ; ?>

		<?php } ?>

		<?php 

		die;

	}

	add_action('wp_ajax_catalogfiterbytype', 'catalog_manufacturer_filter');
	add_action('wp_ajax_nopriv_catalogfiterbytype', 'catalog_manufacturer_filter');

	function catalog_model_filter(){

		check_ajax_referer('check_nonce', 'security') ;

		if( isset( $_POST['type'] ) && $_POST['type'] !== '' ){

			$type = $_POST['type'] ;

			if( $type == 'cars' ){

				$tax = 'car_manufacturer' ;

			}elseif( $type == 'electrocars' ){

				$tax = 'electrocars_manufacturer' ;

			}else{

				$tax = 'mototechnics_manufacturer' ;

			}

			if( $_POST['manufacturer'] && $_POST['manufacturer'] !== 'all' ){

					$manufacturer_term = get_term_by( 'id', $_POST['manufacturer'], $tax );

				?>
				
				<div class="catalog__filter_item open" data-model-parrent="<?php echo $_POST['manufacturer'] ; ?>">

					<div class="catalog__filter_item_title filter-title">
                        <div class="plus icon icon-up"></div>
                        <div class="filter-subtitle"><span>Модели <?php echo $manufacturer_term->name ; ?></span></div>
                    </div>

                    <?php if( $_POST['budget'] == '' ) : ?>

	                    <div class="catalog__filter_item_content checkbox-model-<?php echo $type ; ?>">

							<?php

								$car_model = get_term_children( $_POST['manufacturer'], $tax ) ;
								
								if( !empty( $car_model ) ){
									
									foreach( $car_model as $model ){

										$term_m = get_term_by( 'id', $model, $tax );

										if( $_POST['getModel'] && $_POST['getModel'] !== 'all' ){

											if( $_POST['getModel'] == $term_m->term_id ){
												$getActive = 'active' ;
											}else{
												$getActive = '' ;
											}

										}else{
											$getActive = '' ;
										}

										if( $term_m->count > 0 ){ ?>

											<div class="catalog__filter_item_checkbox">
				                                <div class="catalog__filter_item_input">
				                                    <input id="<?php echo $term_m->slug ; ?>" class="<?php echo $getActive ; ?>" type="checkbox" value="<?php echo $term_m->term_id ; ?>">
				                                    <div class="checkbox"></div>
				                                    <label for="<?php echo $term_m->slug ; ?>"><?php echo $term_m->name ; ?><span class="grey">(<span class="number"><?php echo $term_m->count ; ?></span>)
				                                        </span></label><a href="#link-for-seo" class="hide"></a>
				                                </div>
				                            </div>

			                        <?php }

									}

								} 

							?>

						</div>

					<?php else : ?>

						<div class="catalog__filter_item_content checkbox-model-<?php echo $type ; ?>">

							<?php

								$car_model = get_term_children( $_POST['manufacturer'], $tax ) ;
								
								if( !empty( $car_model ) ){
									
									foreach( $car_model as $model ){

										$term_m = get_term_by( 'id', $model, $tax ); 

										$count_two_tax = count_posts_budget_manufacturer( $model, $_POST['budget'] ) ;

										if( $count_two_tax > 0 ){ ?>

											<div class="catalog__filter_item_checkbox">
				                                <div class="catalog__filter_item_input">
				                                    <input id="<?php echo $term_m->slug ; ?>" type="checkbox" value="<?php echo $term_m->term_id ; ?>">
				                                    <div class="checkbox"></div>
				                                    <label for="<?php echo $term_m->slug ; ?>"><?php echo $term_m->name ; ?><span class="grey">(<span class="number"><?php echo $count_two_tax ; ?></span>)
				                                        </span></label><a href="#link-for-seo" class="hide"></a>
				                                </div>
				                            </div>

			                        <?php }

									}

								} 

							?>

						</div>

					<?php endif ; ?>

				</div>

				<?php

			}
				
			?>

		<?php }

		die;

	}

	add_action('wp_ajax_catalogmodel', 'catalog_model_filter');
	add_action('wp_ajax_nopriv_catalogmodel', 'catalog_model_filter');

	function get_term_post_count_by_type($term,$taxonomy,$type){
	    $args = array( 
	        'fields' =>'ids', //we don't really need all post data so just id wil do fine.
	        'posts_per_page' => -1, //-1 to get all post
	        'post_type' => $type, 
	        'tax_query' => array(
	            array(
	                'taxonomy' => $taxonomy,
	                'field' => 'slug',
	                'terms' => $term
	            )
	        )
	     );
	    $ps = get_posts( $args );
	    if (count($ps) > 0){return count($ps);}else{return 0;}
	}

	function catalog_run_filter(){

		check_ajax_referer('check_nonce', 'security') ;

		if( isset( $_POST['selectedvalues'] ) && count( $_POST['selectedvalues'] ) !== 0 ){ ?>

			<div class="insert-choose-filter">
				
				<div class="catalog__filter-wrapper">
					<div class="catalog__filter-choose">
		                <div class="catalog__filter-choose-head">
		                    <div class="catalog__filter-choose-title h3">Вы выбрали:</div>
		                </div>

		                <?php foreach( $_POST['selectedvalues'] as $term ) : ?>

		                	<?php if( $term == 'all' ) : ?>

		                		<div class="catalog__filter-choose-items">
				                    <div class="btn btn_secondary">
				                    	<span>Все производители</span><span data-attr-term="all" class="icon icon-close"></span>
				                    </div>
				                </div>	

			                <?php else : ?>

								<?php 

									$term_info = get_term( $term ); 

									if( $term_info->taxonomy == 'car_manufacturer' && $term_info->parent == 0 || $term_info->taxonomy == 'electrocars_manufacturer' && $term_info->parent == 0 || $term_info->taxonomy == 'mototechnics_manufacturer' && $term_info->parent == 0 ){
										$tax_manufacturer_parrent = 'parrent-man' ;
									}else{
										$tax_manufacturer_parrent = '' ;
									}

								?>
				                
				                <div class="catalog__filter-choose-items">
				                    <div class="btn btn_secondary">
				                    	<span><?php echo $term_info->name ; ?></span><span <?php if( $term_info->parent != 0 ) : ?> data-attr-term-parrent="<?php echo $term_info->parent ; ?>" <?php endif ; ?> data-attr-term="<?php echo $term_info->term_id ; ?>" class="icon icon-close <?php echo $tax_manufacturer_parrent ; ?>"></span>
				                    </div>
				                </div>

				            <?php endif; ?>

						<?php endforeach ; ?>

		               	<div class="catalog__filter-choose-matched">Подобрано</div>
		                <div class="catalog__filter-choose-clear" onClick="window.location.href='/catalog'">Очистить всё</div>
		            </div>
				</div>
				
			</div>

		<?php }

		die;

	}

	add_action('wp_ajax_runcatalogfilter', 'catalog_run_filter');
	add_action('wp_ajax_nopriv_runcatalogfilter', 'catalog_run_filter');

	function show_filter_result(){

		check_ajax_referer('check_nonce', 'security') ;

		date_default_timezone_set("Europe/Kiev");
		date_default_timezone_get(); 

		$today_date_time = date('Y-m-d H:i');
		$default_posts_per_page = get_option( 'posts_per_page' ); 

		if( isset( $_POST['typetransport'] ) && $_POST['typetransport'] !== ''  ){ ?>

			<?php 

				$pricefrom = $_POST['pricefrom'] ;
				$priceto = $_POST['priceto'] ;

				$years_arr = get_years_between( $_POST['yearfrom'], $_POST['yearto'] ) ;

				$cars_count = array(
					'post_type' => $_POST['typetransport'],
					'posts_per_page' => -1,
					'meta_query' => array(
						'relation'		=> 'AND',
					    array(
					        'key'		=> 'auction_ends',
					        'value'		=> $today_date_time,
					        'compare'	=> '>=',
					    )
				    ),
				    'tax_query' => array(),
				) ;

				if( isset( $_POST['budget'] ) && $_POST['budget'] !== '' ){
					
					array_push( $cars_count['tax_query'] , array( 
															'taxonomy'=>'car_budget',
															'field'=>'term_id',
															'terms'=>$_POST['budget']
														)
					) ;

				}

				$cars_query_count = new WP_Query($cars_count) ;

				$cars_arr = array(
					'post_type' => $_POST['typetransport'],
					'posts_per_page' => $default_posts_per_page,
					'paged' => $_POST['currpage'],
					'meta_query' => array(
						'relation'		=> 'AND',
						array(
							'relation' => 'OR',
						    array(
						        'key'		=> 'auction_ends',
						        'value'		=> $today_date_time,
						        'compare'	=> '>=',
						    ),
						    array(
						        'key'		=> 'auction_ends',
						        'value'		=> '',
						        'compare'	=> '=',
						    )
						),
					    array(
					        'key'		=> 'price',
					        'value'		=> array($pricefrom, $priceto),
					        'compare' => 'BETWEEN',
					        'type' => 'NUMERIC'
					    )
				    ),
				    'tax_query' => array(
				    	'relation' => 'AND',
			            array(
			               	'taxonomy' => 'issue_year',
			                'field'    => 'term_id',
			                'terms'    => $years_arr,
			            )
			        ),
				);
				
				$topsort = $_POST['topsort'] ;

				switch ($topsort) {

					case 'price-date-old':
						$cars_arr['orderby'] = 'date' ;
						$cars_arr['order'] = 'ASC' ;
						break;

					case 'price-date-new':
						$cars_arr['orderby'] = 'date' ;
						$cars_arr['order'] = 'DESC' ;
						break;

					case 'price-less':
						$cars_arr['meta_key'] = 'price' ;
						$cars_arr['orderby'] = 'meta_value' ;
						$cars_arr['order'] = 'ASC' ;
						break;

					case 'price-more':
						$cars_arr['meta_key'] = 'price' ;
						$cars_arr['orderby'] = 'meta_value' ;
						$cars_arr['order'] = 'DESC' ;
						break;

				}

				if( $_POST['typetransport'] == 'cars' ){

					if( isset( $_POST['manufacturercars'] ) && count( $_POST['manufacturercars'] ) > 0 && $_POST['manufacturercars'] !== 'all' ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'car_manufacturer',
																'field'=>'term_id',
																'terms'=>$_POST['manufacturercars']
															)
						) ;

					}

					if( isset( $_POST['modelrcars'] ) && count( $_POST['modelrcars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'car_manufacturer',
																'field'=>'term_id',
																'terms'=>$_POST['modelrcars']
															)
						) ;

					}

					if( isset( $_POST['cuzovcars'] ) && count( $_POST['cuzovcars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'car_type',
																'field'=>'term_id',
																'terms'=>$_POST['cuzovcars']
															)
						) ;

					}

					if( isset( $_POST['budget'] ) && $_POST['budget'] !== '' ){
					
						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'car_budget',
																'field'=>'term_id',
																'terms'=>$_POST['budget']
															)
						) ;

					}

					if( isset( $_POST['locationcars'] ) && count( $_POST['locationcars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'location',
																'field'=>'term_id',
																'terms'=>$_POST['locationcars']
															)
						) ;

					}

					if( isset( $_POST['fuelcars'] ) && count( $_POST['fuelcars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'fuel',
																'field'=>'term_id',
																'terms'=>$_POST['fuelcars']
															)
						) ;

					}

					if( isset( $_POST['volumecars'] ) && count( $_POST['volumecars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'volume',
																'field'=>'term_id',
																'terms'=>$_POST['volumecars']
															)
						) ;

					}

					if( isset( $_POST['transmissioncars'] ) && count( $_POST['transmissioncars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'transmission',
																'field'=>'term_id',
																'terms'=>$_POST['transmissioncars']
															)
						) ;

					}

					if( isset( $_POST['drivecars'] ) && count( $_POST['drivecars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'drive',
																'field'=>'term_id',
																'terms'=>$_POST['drivecars']
															)
						) ;

					}

				}

				if( $_POST['typetransport'] == 'electrocars' ){

					if( isset( $_POST['manufacturercars'] ) && count( $_POST['manufacturercars'] ) > 0 && $_POST['manufacturercars'] !== 'all' ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'electrocars_manufacturer',
																'field'=>'term_id',
																'terms'=>$_POST['manufacturercars']
															)
						) ;

					}

					if( isset( $_POST['modelrcars'] ) && count( $_POST['modelrcars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'electrocars_manufacturer',
																'field'=>'term_id',
																'terms'=>$_POST['modelrcars']
															)
						) ;

					}

					if( isset( $_POST['cuzovcars'] ) && count( $_POST['cuzovcars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'electrocars_type',
																'field'=>'term_id',
																'terms'=>$_POST['cuzovcars']
															)
						) ;

					}

					if( isset( $_POST['locationcars'] ) && count( $_POST['locationcars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'location',
																'field'=>'term_id',
																'terms'=>$_POST['locationcars']
															)
						) ;

					}

					if( isset( $_POST['drivecars'] ) && count( $_POST['drivecars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'electrocars_drive',
																'field'=>'term_id',
																'terms'=>$_POST['drivecars']
															)
						) ;

					}

				}

				if( $_POST['typetransport'] == 'mototechnics' ){

					if( isset( $_POST['manufacturercars'] ) && count( $_POST['manufacturercars'] ) > 0 && $_POST['manufacturercars'] !== 'all' ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'mototechnics_manufacturer',
																'field'=>'term_id',
																'terms'=>$_POST['manufacturercars']
															)
						) ;

					}

					if( isset( $_POST['modelrcars'] ) && count( $_POST['modelrcars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'mototechnics_manufacturer',
																'field'=>'term_id',
																'terms'=>$_POST['modelrcars']
															)
						) ;

					}

					if( isset( $_POST['locationcars'] ) && count( $_POST['locationcars'] ) > 0 ){

						array_push( $cars_arr['tax_query'] , array( 
																'taxonomy'=>'location',
																'field'=>'term_id',
																'terms'=>$_POST['locationcars']
															)
						) ;

					}

				}

				$cars = new WP_Query($cars_arr) ;

			?>

			<?php if( $cars->have_posts() ) : ?>
				<div class="insert-cards">

					<?php if( $_POST['typetransport'] == 'cars' ) : ?>
						<div class="grid">
							<?php while( $cars->have_posts() ) : $cars->the_post(); ?>

								<?php  

		                			$price = get_field('price') ;
		                			$mileage = get_field('mileage') ;

		                		?>

		                		<div class="grid__card">
			                        <div class="grid__card-flip">
			                            <div class="grid__card-wrapper">
			                                <div class="grid__card-front">
			                                    <a class="grid__card-img" href="<?php echo get_permalink(); ?>">
			                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
			                                    </a>
			                                    <div class="grid__card-content">

			                                        <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
			                                        	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
			                                        </a>

			                                        <p class="grid__card-description">
			                                            <?php echo get_the_content() ; ?>
			                                        </p>
			                                        <div class="grid__card-footer">
			                                            <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
			                                            <a href="<?php echo get_permalink(); ?>" class="btn grid__card-link">Подробнее</a>
			                                        </div>
			                                    </div>
			                                </div>
			                                <div class="grid__card-back">
			                                    <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
			                                    	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
			                                    </a>
			                                    <p class="grid__card-description">
			                                        <?php echo get_the_content() ; ?>
			                                    </p>
			                                    <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
			                                    <ul class="grid__card-characteristics">

			                                    	<?php $car_fuel = get_the_terms( get_the_ID(), 'fuel' ) ; ?>

			                                    	<?php if( is_array( $car_fuel ) ) : ?>
				                                        <li class="grid__card-characteristic">
					                                        <span class="img">
					                                            <span class="icon"
					                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
					                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
					                                            ></span>
					                                        </span>
				                                            <span class="text"><?php echo $car_fuel[0]->name ; ?></span>
				                                        </li>
				                                    <?php endif ; ?>

				                                    <?php $car_year = get_the_terms( get_the_ID(), 'issue_year' ) ; ?>

			                                    	<?php if( is_array( $car_year ) ) : ?>
				                                        <li class="grid__card-characteristic">
					                                        <span class="img">
					                                            <span class="icon"
					                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
					                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
					                                            ></span>
					                                        </span>
				                                            <span class="text"><?php echo $car_year[0]->name ; ?> год</span>
				                                        </li>
				                                    <?php endif ; ?>

				                                    <?php $car_volume = get_the_terms( get_the_ID(), 'volume' ) ; ?>

				                                    <?php if( is_array( $car_volume ) ) : ?>
				                                        <li class="grid__card-characteristic">
					                                        <span class="img">
					                                            <span class="icon"
					                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
					                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
					                                            ></span>
					                                        </span>
				                                            <span class="text"><?php echo $car_volume[0]->name ; ?></span>
				                                        </li>
			                                        <?php endif ; ?>

			                                        <li class="grid__card-characteristic">
				                                        <span class="img">
				                                            <span class="icon"
				                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
				                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
				                                            ></span>
				                                        </span>
			                                            <span class="text"><?php echo $mileage ; ?></span>
			                                        </li>
			                                    </ul>
			                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
			                                    <a href="<?php echo get_permalink(); ?>" class="btn btn_white">Подробнее</a>
			                                </div>
			                            </div>
			                        </div>
			                    </div>

							<?php endwhile ; ?>
						</div>
					<?php endif ; ?>

					<?php if( $_POST['typetransport'] == 'electrocars' ) : ?>
						<div class="grid">
							<?php while( $cars->have_posts() ) : $cars->the_post(); ?>

								<?php  

		                			$price = get_field('price') ;
		                			$mileage = get_field('mileage') ;

		                		?>

		                		<div class="grid__card">
			                        <div class="grid__card-flip">
			                            <div class="grid__card-wrapper">
			                                <div class="grid__card-front">
			                                    <a class="grid__card-img" href="<?php echo get_permalink(); ?>">
			                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
			                                    </a>
			                                    <div class="grid__card-content">

			                                        <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
			                                        	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
			                                        </a>

			                                        <p class="grid__card-description">
			                                            <?php echo get_the_content() ; ?>
			                                        </p>
			                                        <div class="grid__card-footer">
			                                            <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
			                                            <a href="<?php echo get_permalink(); ?>" class="btn grid__card-link">Подробнее</a>
			                                        </div>
			                                    </div>
			                                </div>
			                                <div class="grid__card-back">
			                                    <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
			                                    	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
			                                    </a>
			                                    <p class="grid__card-description">
			                                        <?php echo get_the_content() ; ?>
			                                    </p>
			                                    <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
			                                    <ul class="grid__card-characteristics">

			                                        <li class="grid__card-characteristic">
				                                        <span class="img">
				                                            <span class="icon"
				                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);
				                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/fuel-pump.svg);"
				                                            ></span>
				                                        </span>
			                                            <span class="text">Электро</span>
			                                        </li>

				                                    <?php $car_year = get_the_terms( get_the_ID(), 'issue_year' ) ; ?>

			                                    	<?php if( is_array( $car_year ) ) : ?>
				                                        <li class="grid__card-characteristic">
					                                        <span class="img">
					                                            <span class="icon"
					                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
					                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
					                                            ></span>
					                                        </span>
				                                            <span class="text"><?php echo $car_year[0]->name ; ?> год</span>
				                                        </li>
				                                    <?php endif ; ?>

				                                    <?php $acumulator = get_field('acumulator') ; ?>

				                                    <?php if( $acumulator ) : ?>
				                                        <li class="grid__card-characteristic">
					                                        <span class="img">
					                                            <span class="icon"
					                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);
					                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/turbo.svg);"
					                                            ></span>
					                                        </span>
				                                            <span class="text"><?php echo $acumulator ; ?></span>
				                                        </li>
			                                        <?php endif ; ?>

			                                        <li class="grid__card-characteristic">
				                                        <span class="img">
				                                            <span class="icon"
				                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
				                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
				                                            ></span>
				                                        </span>
			                                            <span class="text"><?php echo $mileage ; ?></span>
			                                        </li>
			                                    </ul>
			                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
			                                    <a href="<?php echo get_permalink(); ?>" class="btn btn_white">Подробнее</a>
			                                </div>
			                            </div>
			                        </div>
			                    </div>

							<?php endwhile ; ?>
						</div>
					<?php endif ; ?>

					<?php if( $_POST['typetransport'] == 'mototechnics' ) : ?>

						<div class="grid">
							<?php while( $cars->have_posts() ) : $cars->the_post(); ?>

								<?php  

		                			$price = get_field('price') ;
		                			$mileage = get_field('mileage') ;

		                		?>

		                		<div class="grid__card">
			                        <div class="grid__card-flip">
			                            <div class="grid__card-wrapper">
			                                <div class="grid__card-front">
			                                    <a class="grid__card-img" href="<?php echo get_permalink(); ?>">
			                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
			                                    </a>
			                                    <div class="grid__card-content">

			                                        <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
			                                        	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
			                                        </a>

			                                        <p class="grid__card-description">
			                                            <?php echo get_the_content() ; ?>
			                                        </p>
			                                        <div class="grid__card-footer">
			                                            <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
			                                            <a href="<?php echo get_permalink(); ?>" class="btn grid__card-link">Подробнее</a>
			                                        </div>
			                                    </div>
			                                </div>
			                                <div class="grid__card-back">
			                                    <a class="grid__card-link" href="<?php echo get_permalink(); ?>">
			                                    	<h4 class="h4 grid__card-title"><?php echo get_the_title() ; ?></h4>
			                                    </a>
			                                    <p class="grid__card-description">
			                                        <?php echo get_the_content() ; ?>
			                                    </p>
			                                    <span class="grid__card-price"><?php echo number_format($price) ; ?> $</span>
			                                    <ul class="grid__card-characteristics">

				                                    <?php $car_year = get_the_terms( get_the_ID(), 'issue_year' ) ; ?>

			                                    	<?php if( is_array( $car_year ) ) : ?>
				                                        <li class="grid__card-characteristic">
					                                        <span class="img">
					                                            <span class="icon"
					                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);
					                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/hourglass.svg);"
					                                            ></span>
					                                        </span>
				                                            <span class="text"><?php echo $car_year[0]->name ; ?> год</span>
				                                        </li>
				                                    <?php endif ; ?>

			                                        <li class="grid__card-characteristic">
				                                        <span class="img">
				                                            <span class="icon"
				                                                  style="-webkit-mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);
				                                                      mask: url(<?php echo get_template_directory_uri(); ?>/assets/img/burning-wheel.svg);"
				                                            ></span>
				                                        </span>
			                                            <span class="text"><?php echo $mileage ; ?></span>
			                                        </li>
			                                    </ul>
			                                    <a href="#" class="btn btn_transparent">Расчитать стоимость</a>
			                                    <a href="<?php echo get_permalink(); ?>" class="btn btn_white">Подробнее</a>
			                                </div>
			                            </div>
			                        </div>
			                    </div>

							<?php endwhile ; ?>
						</div>

					<?php endif ; ?>

	                <div class="pagination pagination-cars">
		                <?php 

							echo paginate_links_custom( array(
							    'total' => $cars->max_num_pages,
							    'type' => 'list',
							    'current' => $_POST['currpage'],
							) );

		                ?>
	                </div>

				</div>

			<?php else : ?>
				<div class="insert-cards">

					<div class="grid">
						<h2 class="grids-not-found">Не найдено</h2>
					</div>
				</div>
			<?php wp_reset_query() ; ?>
			<?php endif ; ?>

			<div class="choose-number">Подобрано <?php echo $cars->found_posts ; ?> из <?php echo $cars_query_count->found_posts ; ?></div>

		<?php }

		die;

	}

	add_action('wp_ajax_showfilterresult', 'show_filter_result');
	add_action('wp_ajax_nopriv_showfilterresult', 'show_filter_result');

	function paginate_links_custom( $args = '' ) {
	    global $wp_query, $wp_rewrite;
	 
	    // Setting up default values based on the current URL.
	    $pagenum_link = html_entity_decode( get_pagenum_link() );
	    $url_parts    = explode( '?', $pagenum_link );
	 
	    // Get max pages and current page out of the current query, if available.
	    $total   = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
	    $current = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;
	 
	    // Append the format placeholder to the base URL.
	    $pagenum_link = trailingslashit( $url_parts[0] ) . '%_%';
	 
	    // URL base depends on permalink settings.
	    $format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	    $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';
	 
	    $defaults = array(
	        'base'               => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below).
	        'format'             => $format, // ?page=%#% : %#% is replaced by the page number.
	        'total'              => $total,
	        'current'            => $current,
	        'aria_current'       => 'page',
	        'show_all'           => false,
	        'prev_next'          => true,
	        'prev_text'          => __( '&laquo; Previous' ),
	        'next_text'          => __( 'Next &raquo;' ),
	        'end_size'           => 1,
	        'mid_size'           => 2,
	        'type'               => 'plain',
	        'add_args'           => array(), // Array of query args to add.
	        'add_fragment'       => '',
	        'before_page_number' => '',
	        'after_page_number'  => '',
	    );
	 
	    $args = wp_parse_args( $args, $defaults );
	 
	    if ( ! is_array( $args['add_args'] ) ) {
	        $args['add_args'] = array();
	    }
	 
	    // Merge additional query vars found in the original URL into 'add_args' array.
	    if ( isset( $url_parts[1] ) ) {
	        // Find the format argument.
	        $format       = explode( '?', str_replace( '%_%', $args['format'], $args['base'] ) );
	        $format_query = isset( $format[1] ) ? $format[1] : '';
	        wp_parse_str( $format_query, $format_args );
	 
	        // Find the query args of the requested URL.
	        wp_parse_str( $url_parts[1], $url_query_args );
	 
	        // Remove the format argument from the array of query arguments, to avoid overwriting custom format.
	        foreach ( $format_args as $format_arg => $format_arg_value ) {
	            unset( $url_query_args[ $format_arg ] );
	        }
	 
	        $args['add_args'] = array_merge( $args['add_args'], urlencode_deep( $url_query_args ) );
	    }
	 
	    // Who knows what else people pass in $args.
	    $total = (int) $args['total'];
	    if ( $total < 2 ) {
	        return;
	    }
	    $current  = (int) $args['current'];
	    $end_size = (int) $args['end_size']; // Out of bounds? Make it the default.
	    if ( $end_size < 1 ) {
	        $end_size = 1;
	    }
	    $mid_size = (int) $args['mid_size'];
	    if ( $mid_size < 0 ) {
	        $mid_size = 2;
	    }
	 
	    $add_args   = $args['add_args'];
	    $r          = '';
	    $page_links = array();
	    $dots       = false;
	 
	    if ( $args['prev_next'] && $current && 1 < $current ) :
	        $link = str_replace( '%_%', 2 == $current ? '' : $args['format'], $args['base'] );
	        $link = str_replace( '%#%', $current - 1, $link );
	        if ( $add_args ) {
	            $link = add_query_arg( $add_args, $link );
	        }
	        $link .= $args['add_fragment'];

	    endif;
	 
	    for ( $n = 1; $n <= $total; $n++ ) :
	        if ( $n == $current ) :
	            $page_links[] = sprintf(
	                '<li><span data-attr-page="'.$n.'" aria-current="%s" class="page-numbers active">%s</span></li>',
	                esc_attr( $args['aria_current'] ),
	                $args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number']
	            );
	 
	            $dots = true;
	        else :

	            if ( $args['show_all'] || ( $n <= $end_size || ( $current && $n >= $current - $mid_size && $n <= $current + $mid_size ) || $n > $total - $end_size ) ) :
	                $link = str_replace( '%_%', 1 == $n ? '' : $args['format'], $args['base'] );
	                $link = str_replace( '%#%', $n, $link );
	                if ( $add_args ) {
	                    $link = add_query_arg( $add_args, $link );
	                }
	                $link .= $args['add_fragment'];
	 
	                $page_links[] = '<li><span data-attr-page="'.$n.'">'.$n.'</span></li>' ;
	 
	                $dots = true;
	            elseif ( $dots && ! $args['show_all'] ) :
	                $page_links[] = '<li class="dots-not-click"><span>' . __( '&hellip;' ) . '</span></li>';
	 
	                $dots = false;
	            endif;
	        endif;
	    endfor;
	 
	    if ( $args['prev_next'] && $current && $current < $total ) :
	        $link = str_replace( '%_%', $args['format'], $args['base'] );
	        $link = str_replace( '%#%', $current + 1, $link );
	        if ( $add_args ) {
	            $link = add_query_arg( $add_args, $link );
	        }
	        $link .= $args['add_fragment'];

	    endif;

	    switch ( $args['type'] ) {
	        case 'array':
	            return $page_links;
	 
	        case 'list':

	            $r .= "<ul class='pagination__list'>";

	            if ( $args['prev_next'] && $current && 1 < $current ){
	            	$r .= '<li class="prev"><span class="icon icon-arr"></span></li>' ;
	            }

	            $r .= implode( "", $page_links );

	            if( $args['prev_next'] && $current && $current < $total ){
	            	$r .= '<li class="next"><span class="icon icon-arr"></span></li>' ;
	            }

	            $r .= "</ul>";

	            break;
	 
	        default:
	            $r = implode( "\n", $page_links );
	            break;
	    }
	 
	    

	    $r = apply_filters( 'paginate_links_output', $r, $args );
	 
	    return $r;
	}

	function get_years_between( $from, $to ){

		$issue_year = get_terms( array(
		    'taxonomy' => 'issue_year',
		    'hide_empty' => true
		) );

		$year_arr = array() ;

		foreach( $issue_year as $year ){

			if ( in_array( intval( $year->name ), range(intval($from),intval($to))) ) {
				array_push( $year_arr, $year->term_id ) ;
			}

		}

		return $year_arr ;

	}

	function count_posts_budget_manufacturer( $term1, $term2 ){

		$args = array(
			'post_type' => 'cars',
			'posts_per_page' => -1,
	        'tax_query' => array(
	            'relation' => 'AND',
	            array(
	                'taxonomy' => 'car_manufacturer',
	                'field' => 'term_taxonomy_id',
	                'terms' => array( $term1 ),
	                'operator' => 'IN'
	            ),
	            array(
	                'taxonomy' => 'car_budget',
	                'field' => 'term_taxonomy_id',
	                'terms' => array( $term2 ),
	                'operator' => 'IN'
	            ),
	        )
	    );
	    $query = new WP_Query( $args );
	    return $query->post_count;

	}

	function show_news_page(){

		check_ajax_referer('check_nonce', 'security') ;

		$default_posts_per_page = get_option( 'posts_per_page' ); ?>

		<?php if( isset( $_POST['page'] ) && $_POST['page'] !== '' ) : ?>

			<?php  

				$news_arr = array(
					'post_type' => 'post',
					'posts_per_page' => $default_posts_per_page,
					'paged' => intval( $_POST['page'] ),
				);

				$news = new WP_Query($news_arr) ;

			?>

			<?php if( $news->have_posts() ) : ?>

				<div class="blog-posts__grid">

	            	<ul class="blog-posts__list">
						<?php while ( $news->have_posts() ) : $news->the_post(); ?>

		                    <li class="blog-posts__item">
			                    <a href="<?php echo get_permalink(); ?>" class="blog-posts__link">
			                        <span class="blog-posts__img"><?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?></span>
			                        <div href="<?php echo get_permalink(); ?>" class="blog-posts__item-content">
			                            <h4 class="h4 blog-posts__item-title"><?php echo get_the_title() ; ?></h4>
			                            <p class="blog-posts__item-text"><?php echo get_the_excerpt() ; ?></p>
			                        </div>
			                    </a>
			                </li>

						<?php endwhile ; ?>
						<?php wp_reset_query() ; ?>
					</ul>


					<div class="pagination pagination-news">
	                    
						<?php 

							echo paginate_links_custom( array(
								'total' => $news->max_num_pages,
							    'type' => 'list',
							    'current' => intval( $_POST['page'] ),
							) );

		                ?>

	                </div>

	            </div>

			<?php endif ; ?>
			<?php wp_reset_query() ; ?>
		<?php endif ; ?>

	<?php die;
	}

	add_action('wp_ajax_newspaged', 'show_news_page');
	add_action('wp_ajax_nopriv_newspaged', 'show_news_page');

	function show_reviews_page(){

		check_ajax_referer('check_nonce', 'security') ;

		$default_posts_per_page = get_option( 'posts_per_page' ); ?>

		<?php if( isset( $_POST['page'] ) && $_POST['page'] !== '' ) : ?>

			<?php  

				$reviews_arr = array(
					'post_type' => 'reviews',
					'posts_per_page' => $default_posts_per_page,
					'paged' => intval( $_POST['page'] ),
				);

				$reviews = new WP_Query($reviews_arr) ;

			?>

			<?php if( $reviews->have_posts() ) : ?>

				<div class="reviews__wrapper">

		        	<ul class="reviews__grid">

			        	<?php while ( $reviews->have_posts() ) : $reviews->the_post(); ?>

			        		<li class="reviews__item">

			                    <?php if (has_post_thumbnail( get_the_ID() ) ): ?>

			            			<?php if( $video_rewiev ) : ?>

					                    <a href="<?php echo $video_rewiev ; ?>" data-fancybox="gallery" data-title="Video"
					                       class="reviews__video">
					                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
					                        <div class="reviews__icon"></div>
					                    </a>

					                <?php else : ?>

					                	<a href="#" class="reviews__video">
					                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
					                        <div class="reviews__icon"></div>
					                    </a>

					                <?php endif ; ?>

				                <?php endif ; ?>

			                    <a href="#" class="reviews__item-content">
			                        <h4 class="h4 reviews__item-title"><?php echo get_the_title() ; ?></h4>
			                        <p class="reviews__item-text"><?php echo get_the_excerpt() ; ?></p>
			                    </a>

			                </li>

			        	<?php endwhile ; ?>

			        </ul>

			        <div class="pagination pagination-reviews">
		                    
						<?php 

							echo paginate_links_custom( array(
							    'total' => $reviews->max_num_pages,
							    'type' => 'list',
							    'current' => intval( $_POST['page'] ),
							) );

		                ?>

	                </div>

		        </div>

			<?php endif ; ?>
			<?php wp_reset_query() ; ?>
		<?php endif ; ?>

	<?php die;
	}

	add_action('wp_ajax_reviewspaged', 'show_reviews_page');
	add_action('wp_ajax_nopriv_reviewspaged', 'show_reviews_page');

	function show_promotion_page(){

		check_ajax_referer('check_nonce', 'security') ;

		$default_posts_per_page = get_option( 'posts_per_page' ); ?>

		<?php if( isset( $_POST['page'] ) && $_POST['page'] !== '' ) : ?>

			<?php  

				$promotion_arr = array(
					'post_type' => 'promotion',
					'posts_per_page' => $default_posts_per_page,
					'paged' => intval( $_POST['page'] ),
				);

				$promotion = new WP_Query($promotion_arr) ;

			?>

			<?php if( $promotion->have_posts() ) : ?>

				<div class="promotions__wrapper">

        			<ul class="promotions__grid">

	        			<?php while ( $promotion->have_posts() ) : $promotion->the_post(); ?>

	        				<?php  

	        					$logo = get_field('logo') ;

	        				?>

	        				<li class="promotions__item">
			                    <a href="<?php echo get_permalink() ; ?>" class="promotions__link">
			                        <div class="promotions__image">
			                        	
			                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>

			                            <?php if( $logo ) : ?>
			                            	<img class="promotions__logo" src="<?php echo $logo['url'] ; ?>" alt="<?php echo $logo['alt'] ; ?>">
			                            <?php endif ; ?>

			                        </div>
			                        <h3 class="h3 promotions__title"><?php the_title() ; ?></h3>
			                        <p class="promotions__text"><?php echo get_the_excerpt() ; ?></p>
			                        <div class="promotions__more"><span>Подробнее</span></div>
			                    </a>
			                </li>

	        			<?php endwhile ; ?>

	        		</ul>

	        		<div class="pagination pagination-promotion">
		                    
						<?php 

							echo paginate_links_custom( array(
							    'total' => $promotion->max_num_pages,
							    'type' => 'list',
							    'current' => intval( $_POST['page'] ),
							) );

		                ?>

	                </div>

        		</div>

			<?php endif ; ?>
			<?php wp_reset_query() ; ?>
		<?php endif ; ?>

	<?php die;
	}

	add_action('wp_ajax_promotionpaged', 'show_promotion_page');
	add_action('wp_ajax_nopriv_promotionpaged', 'show_promotion_page');


?>