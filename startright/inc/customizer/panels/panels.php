<?php

function startright_kirki_panels( $wp_customize ) {

	$wp_customize->add_panel( 'startright_panel_general', array(
		'priority'		 => 10,
		'title'			 => __( 'General Settings', 'startright' ),
		'description'	 => __( 'Manage general theme settings', 'startright' ),
	) );
	$wp_customize->add_panel( 'startright_panel_colors', array(
		'priority'		 => 10,
		'title'			 => __( 'Color', 'startright' ),
		'description'	 => __( 'Manage theme colors', 'startright' ),
	) );
	$wp_customize->add_panel( 'startright_panel_typography', array(
		'priority'		 => 10,
		'title'			 => __( 'Typography', 'startright' ),
		'description'	 => __( 'Manage theme typography', 'startright' ),
	) );
	$wp_customize->add_panel( 'startright_panel_layout', array(
		'priority'		 => 10,
		'title'			 => __( 'Layout', 'startright' ),
		'description'	 => __( 'Manage theme header, footer and more', 'startright' ),
	) );
	$wp_customize->add_panel( 'startright_panel_help', array(
		'priority'		 => 10,
		'title'			 => __( 'Help and Support', 'startright' ),
		'description'	 => __( 'Get help and support', 'startright' ),
	) );
	$wp_customize->add_panel( 'startright_panel_blog', array(
		'priority'		 => 10,
		'title'			 => __( 'Blog', 'startright' ),
		'description'	 => __( 'Manage blog settings', 'startright' ),
	) );
}

add_action( 'customize_register', 'startright_kirki_panels' );
