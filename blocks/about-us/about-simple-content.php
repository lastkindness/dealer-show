<?php  

    $about_simple_text = get_field('about_simple_text') ;

?>

<?php if( $about_simple_show = get_field('about_simple_show') ) : ?>
    <?php if( $about_simple_text ) : ?>
        <section class="content" id="content">
            <div class="container">
                <div class="content__wrapper">

                    <?php if( $about_simple_text ) : ?>

                        <?php echo $about_simple_text ; ?>

                    <?php endif ; ?>

                </div>
            </div>
        </section>
    <?php endif ; ?>
<?php endif ; ?>