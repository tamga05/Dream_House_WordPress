<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php bloginfo( 'template_url' ); ?> ./assets/images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo( 'stylesheet_directory' ); ?>/assets/fonts/fonts.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <title><?php echo bloginfo( 'description' ); ?></title>

    <?php wp_head(); ?>
</head>

<body>

    <header class="header">

        <div class="header__container">

            <h2 hidden>Header</h2>

            <div class="header__left-block">

                <a class="header__logo-link" href="<?php bloginfo('url'); ?>"><img class="header__logo logo"
                        src="<?php bloginfo( 'template_url' ); ?> ./assets/images/header/logo.svg" alt="logo" title="Follow in Dream House"></a>

                        <!-- Подключение Меню в header (Menu 1) -->
                        <?php wp_nav_menu([
                            'theme_location'  => 'header_menu',
                            'menu_class'      => 'header__menu',
                            'menu_id'         => 'menu1',
                        ]); ?>

            </div>

            <div class="header__right-block">

                <a class="header__search-link" href="http://google.com" target="_blanc"><img class="header__search-img"
                        src="<?php bloginfo( 'template_url' ); ?> ./assets/images/header/header-search.svg" alt="search"></a>

                <button class="header__sign-in" type="button">Sign In</button>

                <button class="header__sign-up" type="button">Sign Up</button>

                <!-- Burger Menu -->

                <div id="burger_icon" class="burger_icon"></div>
                <div id="burger_menu" class="burger_menu">

                    <div class="burger_menu__menu">

                        <a class="burger_menu__search-link" href="http://google.com" target="_blanc"><img
                                class="burger_menu__search-img" src="<?php bloginfo( 'template_url' ); ?> ./assets/images/header/header-search.svg"
                                alt="search"></a>

                        <!-- Подключение Burger-меню в header (Menu 3) -->
                        <?php wp_nav_menu([
                            'theme_location'  => 'burger_menu',
                            'menu_class'      => 'burger_menu__list',
                            'menu_id'         => 'menu3',
                        ]); ?>

                        <button class="burger_menu__sign-in" type="button">Sign In</button>

                        <button class="burger_menu__sign-up" type="button">Sign Up</button>

                    </div>

                    <div id="close_icon" class="close_icon">
                    </div>

                </div>

            </div>

        </div>

    </header>
