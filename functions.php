<?php

//Includes
include ( get_theme_file_path('/includes/front/enqueue.php' ) );
include ( get_theme_file_path('/includes/setup.php' ) );
include ( get_theme_file_path('/includes/admin/yabu.php'));
include ( get_theme_file_path('/includes/theme-customizer.php'));
include ( get_theme_file_path('/includes/customizer/social.php'));

//Woo
include( get_theme_file_path( '/includes/woo/woo.php' ));

//Hooks
add_action( 'wp_enqueue_scripts','ya_enqueue' );
add_action( 'after_setup_theme', 'ya_setup' );
add_action( 'customize_register','ya_customize_register');