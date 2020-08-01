<?php

/**
 * Create sections using the WordPress Customizer API.
 */
function startright_kirki_section_typography( $wp_customize ) {

	/**
	 * Add sections
	 */

	//Typography
	$wp_customize->add_section( 'startright_typography_section_mainbody', array(
		'title'       => __( 'Main Body', 'startright' ),
		'panel'		  => 'startright_panel_typography', 
		'priority'    => 10,
		'description' => __( 'Font for the main body text', 'startright' ),
	) );

	//Headings
	$wp_customize->add_section( 'startright_typography_section_headings', array(
		'title'       => __( 'Headings', 'startright' ),
		'panel'		  => 'startright_panel_typography', 
		'priority'    => 10,
		'description' => __( 'Font for the headings', 'startright' ),
	) );

}
add_action( 'customize_register', 'startright_kirki_section_typography' );
