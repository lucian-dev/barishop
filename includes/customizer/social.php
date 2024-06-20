<?php

function ya_social_customizer_section( $wp_customize ) {

	$wp_customize->add_setting( 'ya_facebook_handle', [
		'default' => ''
	]);

	$wp_customize->add_setting( 'ya_instagram_handle', [
		'default' => ''
	]);

	$wp_customize->add_setting( 'ya_youtube_handle', [
		'default' => ''
	]);

	$wp_customize->add_setting( 'ya_twitter_handle', [
		'default' => ''
	]);

	$wp_customize->add_setting( 'ya_linkedin_handle', [
		'default' => ''
	]);

	$wp_customize->add_setting( 'ya_tiktok_handle', [
		'default' => ''
	]);

	$wp_customize->add_setting( 'ya_address_handle', [
		'default' => ''
	]);

	$wp_customize->add_setting( 'ya_email', [
		'default' => ''
	]);

	$wp_customize->add_setting( 'ya_phone_number', [
		'default' => ''
	]);

	$wp_customize->add_section( 'ya_social_section', [
		'title'     => __( 'Yabu Social Settings', 'yabu'),
		'priority'  => 30,
		'panel'     => 'yabu'
	]);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ya_social_facebook_input',
		array(
			'label'     => __( 'Facebook Handle','yabu' ),
			'section'   => 'ya_social_section',
			'settings'  => 'ya_facebook_handle',
			'type'      => 'text',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ya_social_instagram_input',
		array(
			'label'     => __( 'Instagram Handle','yabu' ),
			'section'   => 'ya_social_section',
			'settings'  => 'ya_instagram_handle',
			'type'      => 'text',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ya_social_youtube_input',
		array(
			'label'     => __( 'Youtube Handle','yabu' ),
			'section'   => 'ya_social_section',
			'settings'  => 'ya_youtube_handle',
			'type'      => 'text',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ya_social_twitter_input',
		array(
			'label'     => __( 'Twitter Handle','yabu' ),
			'section'   => 'ya_social_section',
			'settings'  => 'ya_twitter_handle',
			'type'      => 'text',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ya_social_linkedin_input',
		array(
			'label'     => __( 'Linkedin Handle','yabu' ),
			'section'   => 'ya_social_section',
			'settings'  => 'ya_linkedin_handle',
			'type'      => 'text',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ya_social_tiktok_input',
		array(
			'label'     => __( 'TikTok Handle','yabu' ),
			'section'   => 'ya_social_section',
			'settings'  => 'ya_tiktok_handle',
			'type'      => 'text',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ya_social_address_input',
		array(
			'label'     => __( 'Address','yabu' ),
			'section'   => 'ya_social_section',
			'settings'  => 'ya_address_handle',
			'type'      => 'text',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ya_social_email_input',
		array(
			'label'     => __( 'Email','yabu' ),
			'section'   => 'ya_social_section',
			'settings'  => 'ya_email',
			'type'      => 'text',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ya_social_phone_number_input',
		array(
			'label'     => __( 'Phone Number','yabu' ),
			'section'   => 'ya_social_section',
			'settings'  => 'ya_phone_number',
			'type'      => 'text',
		)
	));
}