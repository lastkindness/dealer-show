<?php

/**
 * PSR-4 class autoloader
 */
require_once 'vendor/autoload.php';

use RST\Theme;

$theme = Theme::getInstance();

/**
 * Example section
 */

use RST\Base\Structure\PostType;
use RST\Base\Structure\Taxonomy;

$services = new PostType('service');
$services->setLabels([
    'name' => __('Services'),
]);

$servicesCategory = new Taxonomy('service_category', 'services');
$servicesCategory->setLabels([
    'name' => __('Services categories'),
]);
$servicesCategory->uses($services);

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
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/libs/slick/slick-theme.min.css');
        wp_enqueue_style('slick', get_template_directory_uri() . '/assets/libs/slick/slick.min.css');
        wp_enqueue_style('app', get_template_directory_uri() . '/assets/dist/app.min.css');

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
    }

}

add_action('wp', 'rst_load_assets');

require_once 'src/helpers.php';
require_once 'src/Hooks/user-creating.php';
