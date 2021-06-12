<?php  

    $show_top_section = get_field('show_top_section') ;
    $top_section_title = get_field('top_section_title') ;
    $top_section_title_color = get_field('top_section_title_color') ;
    $top_section_main = get_field('top_section_main') ;
    $top_section_sub = get_field('top_section_sub') ;
    $top_section_image = get_field('top_section_image') ;

?>

<?php if( $show_top_section ) : ?>

    <section class="about" id="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="about__banner">

                    <?php if( $top_section_image ) : ?>
                        <div class="about__banner-img">
                            <img src="<?php echo $top_section_image['url'] ; ?>" alt="<?php echo $top_section_image['alt'] ; ?>">
                        </div>
                    <?php endif ; ?>

                    <div class="about__banner-content">

                        <?php if( $top_section_title || $top_section_title_color ) : ?>
                            <h1 class="h1 about__banner-title">

                                <?php if( $top_section_title ) : ?>
                                    <span class="white"><?php echo $top_section_title ; ?> </span>
                                <?php endif ; ?>

                                <?php if( $top_section_title_color ) : ?>
                                    <span class="red"><?php echo $top_section_title_color ; ?></span>
                                <?php endif ; ?>

                            </h1>
                        <?php endif ; ?>

                        <?php if( $top_section_main ) : ?>
                            <div class="about__banner-description">
                                <?php echo $top_section_main ; ?>
                            </div>
                        <?php endif ; ?>

                        <?php if( $top_section_sub ) : ?>
                            <div class="about__banner-selection">
                                <?php echo $top_section_sub ; ?>
                            </div>
                        <?php endif ; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif ; ?>