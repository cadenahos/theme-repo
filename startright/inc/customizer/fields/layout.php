<?php

// Layout fields
$startright_default_options = startright_get_option_defaults();

// Top bar fields
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'radio',
	'settings'		 => 'startright_layout_topbar',
	'label'			 => esc_html__( 'Top bar', 'startright' ),
	'description'	 => esc_html__( 'Show or hide the Top bar?', 'startright' ),
	'section'		 => 'startright_layout_section_topbar',
	'default'		 => $startright_default_options['startright_layout_topbar'],
	'priority'		 => 10,
	'transport'		 => 'refresh',
	'choices'		 => array(
		'show'	 => esc_html__( 'Show', 'startright' ),
		'hide'	 => esc_html__( 'Hide', 'startright' ),
	),
) );

// Footer fields
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'radio',
	'settings'		 => 'startright_layout_first_footer',
	'label'			 => esc_html__( 'Show Footer?', 'startright' ),
	'description'	 => esc_html__( 'Show or hide the Footer?', 'startright' ),
	'section'		 => 'startright_layout_section_footer',
	'default'		 => $startright_default_options['startright_layout_first_footer'],
	'priority'		 => 10,
	'transport'		 => 'refresh',
	'choices'		 => array(
		'show'	 => esc_html__( 'Show', 'startright' ),
		'hide'	 => esc_html__( 'Hide', 'startright' ),
	),
) );