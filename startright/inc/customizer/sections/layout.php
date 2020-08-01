<?php

/**
 * Create sections using the WordPress Customizer API.
 */
function startright_kirki_section_layout( $wp_customize ) {

	/**
	 * Add sections
	 */
	//Layout
	$wp_customize->add_section( 'startright_layout_section_topbar', array(
		'title'			 => __( 'Top bar settings', 'startright' ),
		'panel'			 => 'startright_panel_layout',
		'priority'		 => 10,
		'description'	 => __( 'Manage the top bar', 'startright' ),
	) );

	$wp_customize->add_section( 'startright_layout_section_footer', array(
		'title'			 => __( 'Footer layout settings', 'startright' ),
		'panel'			 => 'startright_panel_layout',
		'priority'		 => 10,
		'description'	 => __( 'Manage Footer Layout', 'startright' ),
	) );
}

add_action( 'customize_register', 'startright_kirki_section_layout' );
