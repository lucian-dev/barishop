<?php

function ya_setup() {

	load_theme_textdomain('yabu', get_template_directory() . '/languages');

	//Let WordPress manage the document title
	add_theme_support('title-tag');

	//Theme Logo
	add_theme_support( 'custom-logo' );

	//Enable support for Post Thumbnails on posts and pages
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(1200, 9999);

	//Menus
	register_nav_menus(array(
		'main-header' => __('Main Menu Header','yabu'),
		'main-burger' => __('Main Menu Burger','yabu'),
		'main-footer' => __('Main Menu Footer', 'yabu'),
		'sec-footer' => __('Secondary Menu Footer', 'yabu'),
	));

	//  HTML5 support.
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

}