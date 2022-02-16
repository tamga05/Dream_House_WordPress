<footer class="footer">

        <div class="footer__container">

            <h2 hidden>Footer</h2>

            <!-- Подключение Меню в footer (Menu 2) -->
            <?php wp_nav_menu([
                'theme_location'  => 'footer_menu',
                'menu_class'      => 'footer__list',
                'menu_id'         => 'menu2',
            ]); ?>

            <a class="footer__logo-link" href="<?php echo home_url(); ?>" title="Follow in Dream House"><img class="logo"
                    src="<?php echo IMG_DIR; ?>/header/logo.svg" alt="logo"></a>

        </div>

    </footer>

    <?php wp_footer(); ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>
