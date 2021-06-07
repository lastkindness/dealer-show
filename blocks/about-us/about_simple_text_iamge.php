<?php  

    $about_simple_title2 = get_field('about_simple_title2') ;
    $about_simple_text2 = get_field('about_simple_text2') ;
    $about_simple_image2 = get_field('about_simple_image2') ;

?>

<?php if( $about_simple2_show = get_field('about_simple2_show') ) : ?>
    <?php if( $about_simple_text2 ) : ?>
        <section class="content" id="content1">
            <div class="container">
                <div class="content__wrapper">

                    <?php if( $about_simple_text2 ) : ?>
                        <?php echo $about_simple_text2 ; ?>
                    <?php endif ; ?>

                </div>
            </div>
        </section>
    <?php endif ; ?>
<?php endif ; ?>