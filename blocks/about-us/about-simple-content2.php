<?php  

    $about_simple_text3 = get_field('about_simple_text3') ;

?>

<?php if( $about_simple3_show = get_field('about_simple3_show') ) : ?>
    <?php if( $about_simple_text3 ) : ?>

        <section class="content" id="content2">
            <div class="container">

                <div class="content__wrapper">

                    <?php if( $about_simple_text3 ) : ?>

                        <?php echo $about_simple_text3 ; ?>

                    <?php endif ; ?>

                </div>
                
            </div>
        </section>

    <?php endif ; ?>
<?php endif ; ?>