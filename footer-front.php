</main>
<footer class="footer">
    <div class="footer__info">
        <div class="container">
            <div class="footer__info-wrapper">
                <a href="#" class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="header logo">
                </a>
                <a href="#" class="footer__btn btn">Внести депозит</a>
                <div class="footer__messengers">
                    <span class="title">МЫ В мессенжерах</span>
                    <ul class="social-list">
                        <li class="social-item">
                            <a href="https://telegram.me/groupe_name" class="icon icon-telegram" target="_blank"></a>
                        </li>
                        <li class="social-item">
                            <a href="viber://chat/?number=%2B380966771503" class="icon icon-viber"
                               target="_blank"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__main">
        <div class="container">
            <div class="footer__main-wrapper">
                <div class="footer__contacts">
                    <span class="footer__main-title">Контакты</span>
                    <ul class="footer__contacts-list">
                        <li>
                            <span class="icon icon-phone"></span>
                            <a href="tel:+380936164441">+38 (093) 616-44-41</a>
                        </li>
                        <li>
                            <span class="icon icon-phone"></span>
                            <a href="tel:+380936164441">+38 (093) 616-44-42</a>
                        </li>
                        <li>
                            <span class="icon icon-map"></span>
                            <address>5031 S.W. 100th Avenue <br> Cooper City FL 33328</address>
                        </li>
                        <li>
                            <span class="icon icon-mail"></span>
                            <a href="mailto:dealer@gmail.com">dealer@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__menu">
                    <span class="footer__main-title">меню сайта</span>
                    <ul class="navbar menu">
                        <li class="menu-item current-menu-item">
                            <a href="#">О нас</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Отзывы</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Акции</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Вакансии</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Новости</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Кредит</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Сотрудничество</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Страхование</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Доставка/Растаможка</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__catalog">
                    <span class="footer__main-title">Авто по бюджетам</span>
                    <ul class="navbar menu">
                        <li class="menu-item current-menu-item">
                            <a href="#">Авто от 7$ до 10$ тыс</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Авто от 11$ до 14$ тыс</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Авто от 15$ до 18$ тыс</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Авто от 19$ до 22$ тыс</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Авто от 23$ до 25$ тыс</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Авто от 26$ до 29$ тыс</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Авто от 30$ до 33$ тыс</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Авто от 34$ до 37$ тыс</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Авто от 38$ до 41$ тыс</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Авто от 42$ до 45$ тыс</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            <div class="footer__copyright-wrapper">
                <p class="footer__copyright-copy">Copyright © 2020. All rights reserved.</p>
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
<div class="modals">
    <div id="modal-phone" style="display: none;" class="modal modal_phone">
        <span class="h3 modal__title">Заказать звонок:</span>
        <form class="modal__form" action="#">
            <input id="name" type="text" name="name" required="required" placeholder="ФИО">
            <input id="phone" name="phone" type="tel"  placeholder="Контактный телефон">
            <button type="submit" class="btn btn_form btn_big">Перезвоните мне</button>
        </form>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
