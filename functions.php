<?php

/**
 * PSR-4 class autoloader
 */
require_once 'vendor/autoload.php';
require_once 'theme-functions.php';

use RST\Theme;

$theme = Theme::getInstance();

/**
 * Example section
 */

use RST\Base\Structure\PostType;
use RST\Base\Structure\Taxonomy;

$cars = new PostType('cars');
$cars->setLabels([
    'name' => __('Автомобили'),
]);

$e_cars = new PostType('electrocars');
$e_cars->setLabels([
    'name' => __('Электрокары'),
]);

$moto = new PostType('mototechnics');
$moto->setLabels([
    'name' => __('Мототехника'),
]);

$reviews = new PostType('reviews');
$reviews->setLabels([
    'name' => __('Отзывы'),
]);

$promotions = new PostType('promotion');
$promotions->setLabels([
    'name' => __('Акции'),
]);

function register_custom_taxonomies() {

    /*--------------------------------------cars------------------------------------------*/

    $label_car_manufacturer = array(
        'name'              => _x( 'Марка', 'taxonomy general name' ),
        'singular_name'     => _x( 'Марка', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить новую Марку' ),
        'new_item_name'     => __( 'Новая Марка' ),
        'menu_name'         => __( 'Марка' ),
    );

    $args_car_manufacturer   = array(
        'hierarchical'      => true,
        'labels'            => $label_car_manufacturer,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'car_manufacturer' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'car_manufacturer', [ 'cars' ], $args_car_manufacturer );

    $label_car_type = array(
        'name'              => _x( 'Тип Кузова', 'taxonomy general name' ),
        'singular_name'     => _x( 'Тип Кузова', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить новый Тип Кузова' ),
        'new_item_name'     => __( 'Новый Тип Кузова' ),
        'menu_name'         => __( 'Тип Кузова' ),
    );

    $args_car_type   = array(
        'hierarchical'      => true,
        'labels'            => $label_car_type,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'car_type' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'car_type', [ 'cars' ], $args_car_type );

    $label_car_budget = array(
        'name'              => _x( 'Бюджет', 'taxonomy general name' ),
        'singular_name'     => _x( 'Бюджет', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Бюджет' ),
        'new_item_name'     => __( 'Новый Бюджет' ),
        'menu_name'         => __( 'Бюджет' ),
    );

    $args_car_budget   = array(
        'hierarchical'      => true,
        'labels'            => $label_car_budget,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'car_budget' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'car_budget', [ 'cars' ], $args_car_budget );


    /*--------------------------------------electrocars------------------------------------------*/

    $label_electrocars_manufacturer = array(
        'name'              => _x( 'Марка', 'taxonomy general name' ),
        'singular_name'     => _x( 'Марка', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить новую Марку' ),
        'new_item_name'     => __( 'Новая Марка' ),
        'menu_name'         => __( 'Марка' ),
    );

    $args_electrocars_manufacturer   = array(
        'hierarchical'      => true,
        'labels'            => $label_electrocars_manufacturer,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'electrocars_manufacturer' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'electrocars_manufacturer', [ 'electrocars' ], $args_electrocars_manufacturer );

    $label_electrocars_type = array(
        'name'              => _x( 'Тип Кузова', 'taxonomy general name' ),
        'singular_name'     => _x( 'Тип Кузова', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить новый Тип Кузова' ),
        'new_item_name'     => __( 'Новый Тип Кузова' ),
        'menu_name'         => __( 'Тип Кузова' ),
    );

    $args_electrocars_type   = array(
        'hierarchical'      => true,
        'labels'            => $label_electrocars_type,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'electrocars_type' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'electrocars_type', [ 'electrocars' ], $args_electrocars_type );

    /*--------------------------------------mototechnics------------------------------------------*/

    $label_mototechnics_manufacturer = array(
        'name'              => _x( 'Марка', 'taxonomy general name' ),
        'singular_name'     => _x( 'Марка', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить нововую Марку' ),
        'new_item_name'     => __( 'Новая Марка' ),
        'menu_name'         => __( 'Марка' ),
    );

    $args_mototechnics_manufacturer   = array(
        'hierarchical'      => true,
        'labels'            => $label_mototechnics_manufacturer,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'mototechnics_manufacturer' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'mototechnics_manufacturer', [ 'mototechnics' ], $args_mototechnics_manufacturer );


    /*--------------------------------------Год выпуска------------------------------------------*/

    $label_year = array(
        'name'              => _x( 'Год Выпуска', 'taxonomy general name' ),
        'singular_name'     => _x( 'Год Выпуска', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Год Выпуска' ),
        'new_item_name'     => __( 'Новый Год Выпуска' ),
        'menu_name'         => __( 'Год Выпуска' ),
    );

    $args_year = array(
        'hierarchical'      => true,
        'labels'            => $label_year,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'issue_year' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'issue_year', [ 'mototechnics', 'electrocars', 'cars' ], $args_year );

    /*--------------------------------------Наличие------------------------------------------*/

    $label_location = array(
        'name'              => _x( 'Наличие', 'taxonomy general name' ),
        'singular_name'     => _x( 'Наличие', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Наличие' ),
        'new_item_name'     => __( 'Новое Наличие' ),
        'menu_name'         => __( 'Наличие' ),
    );

    $args_location = array(
        'hierarchical'      => true,
        'labels'            => $label_location,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'location' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'location', [ 'mototechnics', 'electrocars', 'cars' ], $args_location );

    /*--------------------------------------Тип топлива машины------------------------------------------*/

    $label_fuel = array(
        'name'              => _x( 'Тип топлива', 'taxonomy general name' ),
        'singular_name'     => _x( 'Тип топлива', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Тип топлива' ),
        'new_item_name'     => __( 'Новый Тип топлива' ),
        'menu_name'         => __( 'Тип топлива' ),
    );

    $args_fuel = array(
        'hierarchical'      => true,
        'labels'            => $label_fuel,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'fuel' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'fuel', [ 'cars' ], $args_fuel );

    /*--------------------------------------Объем топлива машины------------------------------------------*/

    $label_volume = array(
        'name'              => _x( 'Объем топлива', 'taxonomy general name' ),
        'singular_name'     => _x( 'Объем топлива', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Объем топлива' ),
        'new_item_name'     => __( 'Новый Объем топлива' ),
        'menu_name'         => __( 'Объем топлива' ),
    );

    $args_volume = array(
        'hierarchical'      => true,
        'labels'            => $label_volume,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'volume' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'volume', [ 'cars' ], $args_volume );

    /*--------------------------------------Коробка машины------------------------------------------*/

    $label_transmission = array(
        'name'              => _x( 'Коробка передач', 'taxonomy general name' ),
        'singular_name'     => _x( 'Коробка передач', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Коробку передач' ),
        'new_item_name'     => __( 'Новая Коробка передач' ),
        'menu_name'         => __( 'Коробка передач' ),
    );

    $args_transmission = array(
        'hierarchical'      => true,
        'labels'            => $label_transmission,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'transmission' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'transmission', [ 'cars' ], $args_transmission );

    /*--------------------------------------Привод машины------------------------------------------*/

    $label_drive = array(
        'name'              => _x( 'Привод', 'taxonomy general name' ),
        'singular_name'     => _x( 'Привод', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Привод' ),
        'new_item_name'     => __( 'Новый Привод' ),
        'menu_name'         => __( 'Привод' ),
    );

    $args_drive = array(
        'hierarchical'      => true,
        'labels'            => $label_drive,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'drive' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'drive', [ 'cars' ], $args_drive );

    $label_electrocars_drive = array(
        'name'              => _x( 'Привод', 'taxonomy general name' ),
        'singular_name'     => _x( 'Привод', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все' ),
        'parent_item'       => __( 'Родительская' ),
        'parent_item_colon' => __( 'Родительская' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Привод' ),
        'new_item_name'     => __( 'Новый Привод' ),
        'menu_name'         => __( 'Привод' ),
    );

    $args_electrocars_drive = array(
        'hierarchical'      => true,
        'labels'            => $label_electrocars_drive,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'electrocars_drive' ],
        'show_in_rest' => true,
    );

    register_taxonomy( 'electrocars_drive', [ 'electrocars' ], $args_electrocars_drive );


}

add_action( 'init', 'register_custom_taxonomies' );

/**
 * Rest resource checking
 */

use RST\Rest\Resources\TestData;

$theme->rest->setNamespace('rst/v1');
$theme->rest->addResource(new TestData());

/**
 * Register custom gutenberg block with backend logic
 */

use RST\Blocks\PostSnapshot;

$theme->gutenberg->setDependencies(['wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-data']);

try {

    $theme->gutenberg->register([
        'block'  => 'post-snapshot',
        'render' => [PostSnapshot::class, 'renderCallback'],
    ]);

} catch (Exception $e) {
    error_log($e->getMessage());
}

/**
 * Theme setup functions
 */

/**
 * Load scripts and styles
 * @link        http://developer.wordpress.org/reference/functions/wp_enqueue_script
 * @link        http://wp-kama.ru/function/wp_enqueue_script
 * @package     WordPress
 * @subpackage  RSV v3
 * @since       1.0.0
 * @author      Luke Kortunov
 */
function rst_load_assets()
{
    //--- Load scripts and styles only for frontend: -----------------------------
    if ( ! is_admin()) {
        // Styles
        
        wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper.min.css');
        wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/libs/fancybox/jquery.fancybox.min.css');
        wp_enqueue_style('select2', get_template_directory_uri() . '/assets/libs/select2/select2.min.css');
        wp_enqueue_style('jqueryui', get_template_directory_uri() . '/assets/libs/jqueryui/jquery-ui.min.css');
        wp_enqueue_style('slick', get_template_directory_uri() . '/assets/libs/slick/slick-theme.min.css');
        wp_enqueue_style('slick-auto', get_template_directory_uri() . '/assets/libs/slick/slick.min.css');
        wp_enqueue_style('app', get_template_directory_uri() . '/assets/dist/app.min.css');
        wp_enqueue_style( 'base-style', get_stylesheet_uri(), array() );

        // Scripts
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, false);
        wp_enqueue_script('jquery');
        wp_register_script('maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyA-GlnQYjXq7sR8eZSFqr5IDaMN3xGhyTg', false, null, false);
        wp_enqueue_script('maps');

        wp_enqueue_script('elevatezoom', get_template_directory_uri() . '/assets/libs/elevatezoom/jquery.elevatezoom.min.js', [], '1.0.0', true);
        wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/libs/jqueryui/jquery-ui.min.js', [], '1.0.0', true);
        wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/libs/fancybox/jquery.fancybox.min.js', [], '1.0.0', true);
        wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper.min.js', [], '1.0.0', true);
        wp_enqueue_script('text-lines', get_template_directory_uri() . '/assets/libs/text-lines/text-lines.js', [], '1.0.0', true);
        wp_enqueue_script('select2', get_template_directory_uri() . '/assets/libs/select2/select2.min.js', [], '1.0.0', true);
        wp_enqueue_script('slick', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', [], '1.0.0', true);
        wp_enqueue_script('app', get_template_directory_uri() . '/assets/dist/app.min.js', [], '1.0.0', true);
        
        wp_enqueue_script( 'gtranslate-script', get_template_directory_uri() . '/theme-gtranslate.js', '', '', true );

        wp_register_script( 'custom-js', get_stylesheet_directory_uri() . '/custom-theme.js', array('jquery'), '', true );

        $localize_params_filter = array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
            'ajax_nonce' => wp_create_nonce('check_nonce'),
        ) ;

        wp_localize_script( 'custom-js', 'filter_params', $localize_params_filter );

        wp_enqueue_script( 'custom-js' );


    }

}

add_action('wp', 'rst_load_assets');

require_once 'src/helpers.php';
require_once 'src/Hooks/user-creating.php';
