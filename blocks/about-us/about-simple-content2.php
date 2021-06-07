<?php  

    $about_simple_title3 = get_field('about_simple_title3') ;
    $about_simple_text3 = get_field('about_simple_text3') ;

?>

<?php if( $about_simple3_show = get_field('about_simple3_show') ) : ?>
    <?php if( $about_simple_text3 || $about_simple_title3 ) : ?>

        <section class="content" id="content2">
            <div class="container">
                <div class="content__wrapper">
                    <div class="content__content">

                        <?php if( $about_simple_title3 ) : ?>
                            <h2><?php echo $about_simple_title3 ; ?></h2>
                        <?php endif ; ?>


                        <?php if( $about_simple_text3 ) : ?>

                            <div class="content__text">
                                <?php echo $about_simple_text3 ; ?>
                            </div>

                        <?php endif ; ?>

                    </div>
                </div>
            </div>
        </section>

    <?php endif ; ?>
<?php endif ; ?>