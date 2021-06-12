<?php  

    $show_manager = get_field('show_manager') ;

?>

<?php if( $show_manager ) : ?>

    <?php  

        $manager_background = get_field('manager_background') ;
        $manager_image = get_field('manager_image') ;
        $manager_title1 = get_field('manager_title1') ;
        $manager_title2 = get_field('manager_title2') ;
        $manager_form = get_field('manager_form') ;

    ?>

    <section class="contact-form" id="contact-form">
        <div class="container">
            <div class="contact-form__wrapper" <?php if( $manager_background ) : ?> style="background-image: url(<?php echo $manager_background ; ?>)" <?php endif ; ?> >
                <div class="contact-form__content">
                    <h2 class="contact-form__title h1">

                        <?php if( $manager_title1 ) : ?>
                            <span class="red"><?php echo $manager_title1 ; ?></span>
                        <?php endif ; ?>

                        <?php if( $manager_title2 ) : ?>
                            <br>
                            <div class="white"><?php echo $manager_title2 ; ?></div>
                        <?php endif ; ?>

                    </h2>

                    <?php if( $manager_form ){ echo do_shortcode($manager_form) ; } ; ?>

                </div>

                <?php if( $manager_image ) : ?>
                    <div class="contact-form__image">
                        <img src="<?php echo $manager_image['url'] ; ?>" alt="<?php echo $manager_image['alt'] ; ?>">
                    </div>
                <?php endif ; ?>

            </div>
        </div>
    </section>

<?php endif ; ?>