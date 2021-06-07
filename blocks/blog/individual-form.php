<?php  
    
    $page_for_posts = get_option( 'page_for_posts' );
    $show_get_list_form = get_field('show_get_list_form', $page_for_posts) ;
    $get_list_form_title = get_field('get_list_form_title', $page_for_posts) ;
    $get_list_form_text = get_field('get_list_form_text', $page_for_posts) ;
    $get_list_form_image = get_field('get_list_form_image', $page_for_posts) ;
    $get_list_form = get_field('get_list_form', $page_for_posts) ;

?>

<?php if( $show_get_list_form ) : ?>
    <section class="individual-form individual-form_dark" id="individual-form">
        <div class="container">
            <div class="individual-form__wrapper" <?php if( $get_list_form_image ) : ?> style="background-image: url(<?php echo $get_list_form_image ; ?>)" <?php endif ; ?>>
                <div class="individual-form__content">

                    <?php if( $get_list_form_title ) : ?>
                        <h2 class="title h2"><?php echo $get_list_form_title ; ?></h2>
                    <?php endif ; ?>

                    <?php if( $get_list_form_text ) : ?>
                        <p class="text"><?php echo $get_list_form_text ; ?></p>
                    <?php endif ; ?>

                </div>

                <?php if( $get_list_form ){ echo do_shortcode( $get_list_form ) ; } ; ?>

            </div>
        </div>
    </section>
<?php endif ; ?>