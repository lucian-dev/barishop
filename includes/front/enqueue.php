<?php

function ya_enqueue() {

	$uri = get_template_directory_uri();
	$css_timestamp = filemtime(get_stylesheet_directory() . '/assets/css/main.css');
	define('YA_VERSION', $css_timestamp);

	wp_enqueue_style( 'ya_main_css', $uri . '/assets/css/main.css', array(), YA_VERSION);

	wp_enqueue_script('ya_main_js', $uri . '/assets/js/main.js', array('jquery'), '1.0', true );

}