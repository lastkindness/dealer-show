<?php if( $warranty_show = get_field('warranty_show') ) : ?>

    <?php if( have_rows('warranty_items') ) : ?>

        <section class="warranty warranty_dark" id="warranty">
            <div class="container">
                <div class="warranty__wrapper">

                    <?php if( $warranty_title = get_field('warranty_title') ) : ?>
                        <h2 class="h1 warranty__title"><?php echo $warranty_title ; ?></h2>
                    <?php endif ; ?>

                    <div class="warranty__grid swiper-container">
                        <div class="grid swiper-wrapper">

                            <?php while( have_rows('warranty_items') ) : the_row(); ?>

                                <?php  

                                    $warranty_title = get_sub_field('warranty_title') ;
                                    $warranty_icon = get_sub_field('warranty_icon') ;
                                    $warranty_text = get_sub_field('warranty_text') ;

                                ?>

                                <?php if( $warranty_title || $warranty_text || $warranty_icon ) : ?>
                                    <div class="grid__card swiper-slide">
                                        <div class="grid__card-flip">
                                            <div class="grid__card-wrapper">
                                                <div class="grid__card-front">
                                                    <div class="grid__card-front-content">

                                                        <?php if( $warranty_icon ) : ?>
                                                            <span class="grid__card-img" >
                                                                <span class="img" style="
                                                                    -webkit-mask-image: url(<?php echo $warranty_icon ; ?>);
                                                                    mask: url(<?php echo $warranty_icon ; ?>);"></span>
                                                            </span>
                                                        <?php endif ; ?>

                                                        <h4 class="h4 grid__card-title"><?php echo $warranty_title ; ?></h4>
                                                    </div>

                                                    <?php if( $warranty_text ) : ?>
                                                        <p class="grid__card-description">
                                                            <?php echo $warranty_text ; ?>
                                                        </p>
                                                    <?php endif ; ?>

                                                </div>
                                                <div class="grid__card-back">
                                                    
                                                    <h5 class="h5 grid__card-title"><?php echo $warranty_title ; ?></h5>

                                                    <?php if( $warranty_text ) : ?>
                                                        <p class="grid__card-description">
                                                            <?php echo $warranty_text ; ?>
                                                        </p>
                                                    <?php endif ; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ; ?>

                            <?php endwhile ; ?>

                        </div>
                        <div class="warranty__controls swiper-pagination"></div>
                        <div class="warranty__nav swiper-nav">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endif ; ?>
    
<?php endif ; ?>