<?php

/**
 * 404 template
 *
 * @package     WordPress
 * @subpackage  RST v3
 * @since       1.0.0
 */

?>

<?php

/**
 * Include header.php or require header-xxx.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_header
 * @link        https://wp-kama.ru/functuion/get_header
 */
get_header();

?>



    <section class="error">
        <div class="container">
            <div class="error__wrapper">
                <span class="error__title"><?php _e( '404', 'prime' ); ?></span>
                <p class="error__subtitle"><?php _e( 'Страница не найдена', 'prime' ); ?></p>
            </div>
        </div>
    </section>



<?php

/**
 * Include footer.php or require footer-xxx.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_footer
 * @link        https://wp-kama.ru/functuion/get_footer
 */
get_footer();

?>
