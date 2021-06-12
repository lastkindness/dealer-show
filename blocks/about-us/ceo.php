<?php if( $show_ceo = get_field('show_ceo') ) : ?>

    <?php  

        $seo_title = get_field('seo_title') ;
        $seo_text = get_field('seo_text') ;

    ?>

    <section class="text-content" id="text-content">
        <div class="container">
            <div class="text-content__wrapper">

                <?php if( $seo_title ) : ?>
                    <h1 class="h3 text-content__title"><?php echo $seo_title ; ?></h1>
                <?php endif ; ?>

                <div class="text-content__container">

                    <?php if( $seo_text ) : ?>
                        <div class="text-content__item">
                            <?php echo $seo_text ; ?>
                        </div>
                    <?php endif ; ?>

                </div>
            </div>
        </div>
    </section>

<?php endif ; ?>