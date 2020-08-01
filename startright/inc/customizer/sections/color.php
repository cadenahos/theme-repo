<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Create sections using the WordPress Customizer API.
 */
function startright_kirki_section_color( $wp_customize ) {

	/**
	 * Add sections
	 */
	//Colors
	$wp_customize->add_section( 'startright_color_section_general', array(
		'title'			 => __( 'General', 'startright' ),
		'panel'			 => 'startright_panel_colors',
		'priority'		 => 10,
		'description'	 => __( 'Manage general colors', 'startright' ),
	) );

	$wp_customize->add_section( 'startright_color_section_container', array(
		'title'			 => __( 'Layout Container', 'startright' ),
		'panel'			 => 'startright_panel_colors',
		'priority'		 => 10,
		'description'	 => __( 'Manage layout container colors', 'startright' ),
	) );

	$wp_customize->add_section( 'startright_color_section_topbar', array(
		'title'			 => __( 'Top bar', 'startright' ),
		'panel'			 => 'startright_panel_colors',
		'priority'		 => 10,
		'description'	 => __( 'Manage top bar colors', 'startright' ),
	) );

	$wp_customize->add_section( 'startright_color_section_header', array(
		'title'			 => __( 'Header', 'startright' ),
		'panel'			 => 'startright_panel_colors',
		'priority'		 => 10,
		'description'	 => __( 'Manage header colors', 'startright' ),
	) );

	$wp_customize->add_section( 'startright_color_section_footer', array(
		'title'			 => __( 'Footer', 'startright' ),
		'panel'			 => 'startright_panel_colors',
		'priority'		 => 10,
		'description'	 => __( 'Manage footer colors', 'startright' ),
	) );
}

add_action( 'customize_register', 'startright_kirki_section_color' );
