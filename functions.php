<?php

// Переменные для путей
define('THEME_ROOT', get_template_directory_uri());

define('CSS_DIR', THEME_ROOT . '/assets/css');
define('MAGNIFIC_DIR', THEME_ROOT . '/assets/magnific-popup');
define('IMG_DIR', THEME_ROOT . '/assets/images');
define('JS_DIR', THEME_ROOT . '/assets');

// Навешивание функций на события с помощью хуков
add_action( 'wp_enqueue_scripts', 'dream_house_style' );
add_action( 'wp_enqueue_scripts', 'dream_house_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'init', 'register_post_types' );

function register_post_types() {

	add_theme_support( 'post-thumbnails' );

	register_post_type( 'features', [
		'labels' => [
			'name'               => 'Features', // основное название для типа записи
			'singular_name'      => 'Feature', // название для одной записи этого типа
			'add_new'            => 'Добавить feature', // для добавления новой записи
			'add_new_item'       => 'Добавление feature', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование feature', // для редактирования типа записи
			'new_item'           => 'Новое feature', // текст новой записи
			'view_item'          => 'Смотреть feature', // для просмотра записи этого типа.
			'search_items'       => 'Искать feature', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Features', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-awards',
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
}

function theme_register_nav_menu() {
	register_nav_menu( 'header_menu', 'Меню в header' );
	register_nav_menu( 'footer_menu', 'Меню в footer' );
	register_nav_menu( 'burger_menu', 'Burger-меню в header' );
}

function dream_house_style() {
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/magnific-popup//magnific-popup.css' );
}

function dream_house_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );


// Не подключаются эти скрипты //
	wp_enqueue_script( 'swiper-script', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(''), null, true );
	wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/main.js', array('jquery'), null, true );
}

function getFeatures() {
	$args = array(
		'orderby'     => 'date',
		'order'       => 'DESC',
		'post_type'   => 'features',
	);

	$features = [];

	foreach(get_posts($args) as $post) {

		$feature = get_fields($post->ID);

		$feature['img'] = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
		$feature['title'] = $post->post_title;
		$feature['text'] = $post->post_content;

		$features[] = $feature;
	}

	return $features;
}

// var_dump(getFeatures());

