<?php

/**
 * Create sections using the WordPress Customizer API.
 */
function startright_kirki_section_help( $wp_customize ) {

	/**
	 * Add sections
	 */
	//Help
	$wp_customize->add_section( 'startright_section_help_help', array(
		'title'			 => __( 'StartRight Help', 'startright' ),
		'panel'			 => 'startright_panel_help',
		'priority'		 => 10,
		'description'	 => __( 'Get help', 'startright' ),
	) );
	$wp_customize->add_section( 'startright_section_help_support', array(
		'title'			 => __( 'StartRight Support', 'startright' ),
		'panel'			 => 'startright_panel_help',
		'priority'		 => 10,
		'description'	 => __( 'Get premium customer support', 'startright' ),
	) );
}

add_action( 'customize_register', 'startright_kirki_section_help' );
