<?php  

    $show_simple_text = get_field('show_simple_text') ;
    $simple_text_title = get_field('simple_text_title') ;
    $simple_text_content = get_field('simple_text_content') ;

?>

<?php if( $show_simple_text ) : ?>
    <section class="content" id="content">
        <div class="container">
            <div class="content__wrapper">
                <div class="content__content">

                    <?php if( $simple_text_title ) : ?>
                        <h2 class="h2 content__title"><?php echo $simple_text_title ; ?></h2>
                    <?php endif ; ?>

                    <?php if( $simple_text_content ) : ?>

                        <div class="content__text">
                            <?php echo $simple_text_content ; ?>
                        </div>

                    <?php endif ; ?>

                </div>
            </div>
        </div>
    </section>
<?php endif ; ?>