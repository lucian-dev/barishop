<?php

function ya_customize_register( $wp_customize ) {

	$wp_customize->get_section( 'title_tagline' )->title = 'General';

	$wp_customize->add_panel( 'yabu', [
		'title'         => __( 'Yabu Theme','yabu' ),
		'description'   => '<p>Yabu Theme Settings</p>',
		'priority'      => 160
	]);

	ya_social_customizer_section( $wp_customize );

}