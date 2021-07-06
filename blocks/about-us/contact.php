<?php if( $show_contacts = get_field('show_contacts') ) : ?>

    <section class="map-section" id="map-section">
        <div class="container">
            <div class="map-section__wrapper">
                <?php $data_center = get_field('data_center');
                $data_marker = get_field('data_marker') ?>
                <?php if($data_center && $data_marker) : ?>
                    <div class="map" id="map" data-center="<?php echo  $data_center; ?>" data-marker="<?php echo  $data_marker; ?>">

                    </div>
                <?php endif ; ?>
                <ul class="map__info">

                    <?php if( have_rows('contacts_phones') ) : ?>

                        <?php while( have_rows('contacts_phones') ) : the_row(); ?>

                            <?php if( $phone = get_sub_field('phone') ) : ?>
                                <li class="map__info-item">
                                    <span class="icon icon-phone"></span>
                                    <a href="tel:<?php echo clean_phone( $phone ) ; ?>"><?php echo $phone ; ?></a>
                                </li>
                            <?php endif ; ?>

                        <?php endwhile ; ?>

                    <?php endif ; ?>

                    <?php if( $email = get_field('email') ) : ?>
                        <li class="map__info-item">
                            <span class="icon icon-mail"></span>
                            <a href="mailto:<?php echo antispambot( $email ) ; ?>"><?php echo antispambot( $email ) ; ?></a>
                        </li>
                    <?php endif ; ?>

                    <?php if( $adress = get_field('adress') ) : ?>
                        <li class="map__info-item">
                            <span class="icon icon-map"></span>
                            <address><?php echo $adress ; ?></address>
                        </li>
                    <?php endif ; ?>

                    <?php if( have_rows('messangers') ) : ?>
                        <li class="map__info-item">
                            <span class="text">Мессенджеры:</span>
                            <ul class="social-list">

                                <?php while( have_rows('messangers') ) : the_row(); ?>

                                    <?php

                                        $link = get_sub_field('link') ;
                                        $icon = get_sub_field('icon') ;

                                    ?>

                                    <?php if( $icon && $link ) : ?>
                                        <li class="social-item">
                                            <a href="<?php echo $link ; ?>" class="icon icon-<?php echo $icon ; ?>" target="_blank"></a>
                                        </li>
                                    <?php endif ; ?>

                                <?php endwhile ; ?>

                            </ul>
                        </li>
                    <?php endif ; ?>

                </ul>
            </div>
        </div>
    </section>

<?php endif ; ?>
