<?php

show_admin_bar(false);

//Default Dashboard color
function yabu_admin_color( $result ) {
    return 'light';
}
add_filter( 'get_user_option_admin_color', 'yabu_admin_color' );

//ACF Yabu Options
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' => 'Theme Options',
		'menu_title' => 'Theme Options',
		'menu_slug' => 'theme-options',
		'capability' => 'edit_posts',
		'icon_url' => get_template_directory_uri().'/assets/images/options_yabu.png',
		'redirect' => false
	));

}

// Disable ACF notice
add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );