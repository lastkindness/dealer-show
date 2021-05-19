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
		'footer-second' => __( 'Footer Second', 'Dealer-show' ),
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

?>