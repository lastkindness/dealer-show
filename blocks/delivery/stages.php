<?php

    $show_stages = get_field('show_stages') ;
    $stages_title = get_field('stages_title') ;

?>

<?php if( $show_stages ) : ?>

    <section class="stages stages_dark" id="stages">
        <div class="container">
            <div class="stages__wrapper">

                <?php if( $stages_title ) : ?>
                    <h2 class="h1 stages__title"><?php echo $stages_title ; ?></h2>
                <?php endif ; ?>

                <?php if( have_rows('stages') ): ?>

                    <ul class="stages__grid">

                        <?php while( have_rows('stages') ) : the_row(); ?>

                            <?php

                                $title = get_sub_field('title') ;
                                $text = get_sub_field('text') ;

                            ?>

                            <?php if( $text && $title ) : ?>

                                <li class="stages__item">
                                    <span class="stages__img">
                                        <span class="stages__value">
<!--                                            <span>--><?php //echo get_row_index() ; ?><!--</span>-->
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/29-auction.svg" alt="">
                                        </span>
                                        <h5 class="h5 stages__subtitle"><?php echo $title ; ?></h5>
                                        <span class="plus"></span>
                                    </span>
                                    <p class="stages__text"><?php echo $text ; ?></p>
                                </li>

                            <?php endif ; ?>

                        <?php endwhile ; ?>

                    </ul>

                <?php endif ; ?>

            </div>
        </div>
    </section>

<?php endif ; ?>
