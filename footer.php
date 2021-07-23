</main>
<footer class="footer">
    <div class="footer__info">
        <div class="container">
            <div class="footer__info-wrapper">

            	<?php

            		$footer_logo = get_field('footer_logo', 'option') ;
            		$pay_footer = get_field('pay_footer', 'option') ;

            	?>

            	<?php if( $footer_logo ) : ?>
	                <a href="<?php echo home_url() ; ?>" class="footer__logo">
	                    <img src="<?php echo $footer_logo['url'] ; ?>" alt="<?php echo $footer_logo['alt'] ; ?>">
	                </a>
	            <?php endif ; ?>

	            <?php if( $pay_footer['url'] && $pay_footer['title'] ) : ?>
	                <a href="<?php echo $pay_footer['url'] ; ?>" class="footer__btn btn"><?php echo $pay_footer['title'] ; ?></a>
	            <?php endif ; ?>

	            <?php

	            	$telegram_chat = get_field('telegram_chat_footer', 'option') ;
                    $viber_chat = get_field('viber_chat_footer', 'option') ;
                    $title_messenger = get_field('title_messenger', 'option') ;

	            ?>

                <?php if( $viber_chat || $telegram_chat ) : ?>

	                <div class="footer__messengers">

	                	<?php if( $title_messenger ) : ?>
		                    <span class="title"><?php echo $title_messenger ; ?></span>
		                <?php endif ; ?>

	                    <ul class="social-list">

	                        <?php if( $telegram_chat ) : ?>
	                            <li class="social-item">
	                                <a href="<?php echo $telegram_chat ; ?>" class="icon icon-telegram" target="_blank"></a>
	                            </li>
	                        <?php endif ; ?>

	                        <?php if( $viber_chat ) : ?>
	                            <li class="social-item">
	                                <a href="<?php echo $viber_chat ; ?>" class="icon icon-viber"
	                                   target="_blank"></a>
	                            </li>
	                        <?php endif ; ?>

	                    </ul>

	                </div>

                <?php endif ; ?>

            </div>
        </div>
    </div>
    <div class="footer__main">
        <div class="container">
            <div class="footer__main-wrapper">

            	<?php

            		$footer_contacts_title = get_field('footer_contacts_title', 'option') ;
            		$footer_address = get_field('footer_address', 'option') ;
            		$email_footer = get_field('email_footer', 'option') ;

            	?>

            	<?php if( have_rows('footer_phones', 'option') || $footer_address || $email_footer || $footer_contacts_title ) :  ?>

	                <div class="footer__contacts">

	                	<?php if( $footer_contacts_title ) : ?>
		                    <span class="footer__main-title"><?php echo $footer_contacts_title ; ?></span>
		                <?php endif ; ?>

	                    <ul class="footer__contacts-list">

	                    	<?php while( have_rows('footer_phones', 'option') ) : the_row(); ?>

	                    		<?php

	                    			$phone = get_sub_field('phone') ;

	                    		?>

		                        <li>
		                            <span class="icon icon-phone"></span>
		                            <a href="tel:<?php echo clean_phone( $phone ) ; ?>"><?php echo $phone ; ?></a>
		                        </li>

		                    <?php endwhile ; ?>

		                    <?php if( $footer_address ) : ?>
		                        <li>
		                            <span class="icon icon-map"></span>
		                            <address><?php echo $footer_address ; ?></address>
		                        </li>
		                    <?php endif ; ?>

		                    <?php if( $email_footer ) : ?>
		                        <li>
		                            <span class="icon icon-mail"></span>
		                            <a href="mailto:<?php echo antispambot( $email_footer ) ; ?>"><?php echo antispambot( $email_footer ) ; ?></a>
		                        </li>
		                    <?php endif ; ?>

	                    </ul>
	                </div>

	            <?php endif ; ?>

	            <?php

	            	$footer_menu_title_first = get_field('footer_menu_title_first', 'option') ;
	            	$footer_menu_title_second = get_field('footer_menu_title_second', 'option') ;

	            ?>

                <div class="footer__menu">

                	<?php if( $footer_menu_title_first ) : ?>
                    	<span class="footer__main-title"><?php echo $footer_menu_title_first ; ?></span>
                    <?php endif ; ?>

                    <?php if( has_nav_menu( 'footer-first' ) ) : ?>

                		<?php
							wp_nav_menu( array(
								'container' => false,
								'theme_location' => 'footer-first',
								'menu_id'        => 'navigation',
								'menu_class'     => 'navbar menu',
								'items_wrap'     => '<ul id="%1$s" class="navbar menu">%3$s</ul>'
								)
							);

						?>

                	<?php endif ; ?>

                </div>

                <?php if( $footer_menu_title_second ) : ?>

                    <?php

                    	$car_budget = get_terms( array(
						    'taxonomy' => 'car_budget',
						    'hide_empty' => true
						) );

                    ?>

                    <?php if( !empty($car_budget) ) : ?>
		                <div class="footer__catalog">

		                    <span class="footer__main-title">Авто по бюджетам</span>


		                    <ul class="navbar menu">

		                    	<?php foreach( $car_budget as $budget ) : ?>

		                    		<?php $term_link = get_term_link( $budget ); ?>

			                        <li class="menu-item">
			                            <a href="<?php echo $term_link ; ?>"><?php echo $budget->name ; ?></a>
			                        </li>

			                    <?php endforeach ; ?>

		                    </ul>

		                </div>
		            <?php endif ; ?>

	            <?php endif ; ?>

            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            <div class="footer__copyright-wrapper">
                <p class="footer__copyright-copy">Copyright © <?php echo date('Y') ; ?>. All rights reserved.</p>
                <p class="footer__copyright-dev">
                    <span class="title">Разработка сайта</span>
                    <a href="#" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev-logo.svg" alt="header
                        logo">
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>
</div>

<?php

	$call_back_form = get_field('call_back_form', 'option') ;
	$title_call_back_form = get_field('title_call_back_form', 'option') ;

	$form_call_title = get_field('form_call_title', 'option') ;
	$form_call = get_field('form_call', 'option') ;

	$form_price_title = get_field('form_price_title', 'option') ;
	$form_price_code = get_field('form_price_code', 'option') ;

?>

<div class="modals">

	<?php if( $call_back_form ) : ?>

	    <div class="modal" id="modal-phone" style="display: none;">

            <div class="modal__item">
                <span class="title h3">Позвонить на номер:</span>
                <?php if( $default_phone = get_field('default_phone', 'option') ) : ?>
                    <a href="tel:<?php echo clean_phone($default_phone) ?>" class="modal__phone"><?php echo
                        $default_phone ?></a>
                <?php endif ; ?>
                <span class="title h4">или</span>
            </div>
            <?php if( $title_call_back_form ) : ?>
                <span class="title h3"><?php echo $title_call_back_form ; ?></span>
            <?php endif ; ?>

            <?php echo do_shortcode( $call_back_form ) ; ?>

	    </div>

	<?php endif ; ?>

	<?php if( $form_call ) : ?>

	    <div class="modal" id="modal-phone-cart-call" style="display: none;">

	    	<?php if( $form_call_title ) : ?>
		        <span class="h3"><?php echo $form_call_title ; ?></span>
		    <?php endif ; ?>

	        <?php echo do_shortcode( $form_call ) ; ?>

	    </div>

	<?php endif ; ?>

	<?php if( $form_price_code ) : ?>

	    <div class="modal" id="modal-phone-cart-price" style="display: none;">

	    	<?php if( $form_price_title ) : ?>
		        <span class="h3"><?php echo $form_price_title ; ?></span>
		    <?php endif ; ?>

	        <?php echo do_shortcode( $form_price_code ) ; ?>

	    </div>

	<?php endif ; ?>

    <div class="modal" id="modal-vacancy" style="display: none;">
        <span class="title h3">Подать заявку на вакансию "Менеджер по продажам"</span>
        <form class="apply__form" role="subscription" method="get" action="#">
            <input id="name" name="name" type="text" required="required" placeholder="ФИО">
            <input id="phone" name="phone" type="tel" required="required" placeholder="Ваш телефон">
            <input id="email" name="email" type="email" required="required" placeholder="Ваш email">
            <div class="input-container input-container__file">
                <div class="icon icon-clip"></div>
                <label for="files1">Прикрепить резюме</label>
                <input id="files1" accept="application/pdf,text/plain,application/msword,application/rtf,application/x-rtf,text/richtext,application/rtf,text/richtext,application/vnd.oasis.opendocument.text" type="file" name="files1" data-validate="file" data-error-type="Неверный тип файла" data-error-size="Недопустимый размер файла" data-error-existence="Файл не выбран. Загрузите файл" required="required" class="files">
                <div class="delete"></div>
                <div class="input-container__file-desckt"><span>Размер файла не должен превышать 5 мб</span><span>Разрешены следующие форматы: .pdf, .txt, .doc, .docx, .rtf, .odt</span></div>
                <div class="text-error">Загрузите файл</div>
            </div>
            <button value="Отправить" type="submit" class="btn">
        </form>
    </div>

</div>

<?php wp_footer(); ?>

</body>
</html>
