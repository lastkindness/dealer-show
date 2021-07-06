<?php

	$show_slider = get_field('show_slider') ;

?>

<?php if( have_rows('slide') && $show_slider ) :  ?>

	<section class="hero-slider" id="hero-slider">
        <div class="hero-slider__wrapper swiper-container">
            <ul class="hero-slider__list swiper-wrapper">

                <?php while( have_rows('slide') ) : the_row(); ?>

                <?php

                $title_size = get_sub_field('title_size') ;
                $first_title = get_sub_field('first_title') ;
                $second_title = get_sub_field('second_title') ;
                $text = get_sub_field('text') ;
                $image_mobile = get_sub_field('image_mobile') ;
                $image = get_sub_field('image') ;
                $link = get_sub_field('link') ;

                if( $link ){

                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';

                }

                ?>

                <?php if( $image || $text || $second_title || $first_title ) : ?>

                <li class="hero-slider__item swiper-slide">
                    <div class="hero-slider__content">

                        <?php if( $second_title || $first_title ) : ?>
                        <<?php echo $title_size ; ?> class="hero-slider__title h1">
                        <span class="red"><?php echo $first_title ; ?></span>
                        <br>
                        <span class="white"><?php echo $second_title ; ?></span>
                    </<?php echo $title_size ; ?>>
                    <?php endif ; ?>

                    <?php if( $text ) : ?>
                        <div class="hero-slider__text">
                            <?php echo $text ; ?>
                        </div>
                    <?php endif ; ?>

                    <?php if( $link_url && $link_title ) : ?>
                        <a href="<?php echo $link_url ; ?>" class="btn" target="<?php echo $link_target ; ?>"><?php echo $link_title ; ?></a>
                    <?php endif ; ?>

        </div>

        <?php if( $image || $image_mobile ) : ?>
            <img class="hero-slider__img" src="<?php echo $image['url'] ; ?>" alt="<?php echo $image['alt'] ; ?>">

            <picture class="hero-slider__img">

                <?php if( $image_mobile ) : ?>
                    <source srcset="<?php echo $image_mobile['url']; ?>" media="(max-width: 1024px)">
                <?php endif ; ?>

                <source srcset="<?php echo $image['url'] ; ?>">
                <img src="<?php echo $image['url'] ; ?>" alt="hero-slider">
            </picture>

        <?php endif ; ?>

        </li>

        <?php endif ; ?>

        <?php endwhile ; ?>

        </ul>
        <div class="hero-slider__nav">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="hero-slider__controls swiper-pagination"></div>
        </div>
	</section>

<?php endif ; ?>
