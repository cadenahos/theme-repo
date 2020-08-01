<?php

// Typography fields
// Main body fields
startright_Kirki::add_field( 'startright_config', array(
	'type'		 => 'typography',
	'settings'	 => 'startright_typography_mainbody_fontfamily',
	'label'		 => esc_html__( 'Font settings', 'startright' ),
	'section'	 => 'startright_typography_section_mainbody',
	'default'	 => array(
		'font-family'	 => 'Roboto',
		'variant'		 => '300',
		'font-size'		 => '16px',
		'line-height'	 => '1.55',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => 'body, input, textarea, button',
			'property'	 => 'font-family',
		),
	),
) );

// Headings
startright_Kirki::add_field( 'startright_config', array(
	'type'		 => 'typography',
	'settings'	 => 'startright_typography_mainbody_headings',
	'label'		 => esc_html__( 'Headings', 'startright' ),
	'section'	 => 'startright_typography_section_headings',
	'default'	 => array(
		'font-family'	 => 'Roboto',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => 'body h1, body .content-area h2, body .content-area h3, body h4, body .content-area h5, body .content-area h6',
			'property'	 => 'font-family',
		),
	),
) );


// h1
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'typography',
	'settings'		 => 'startright_typography_h1_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'startright' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'startright' ),
	'section'		 => 'startright_typography_section_headings_h1',
	'default'		 => array(
		'font-family'	 => 'Roboto',
		'font-weight'	 => '300',
		'variant'		 => '300',
		'font-size'		 => '42px',
		'line-height'	 => '1.2',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 20,
	'output'		 => array(
		array(
			'element'	 => 'h1',
			'property'	 => 'font-family',
		)
	)
) );

// h2
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'typography',
	'settings'		 => 'startright_typography_h2_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'startright' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'startright' ),
	'section'		 => 'startright_typography_section_headings_h2',
	'default'		 => array(
		'font-family'	 => 'Roboto',
		'variant'		 => '300',
		'font-size'		 => '32px',
		'line-height'	 => '1.3',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 30,
	'output'		 => array(
		array(
			'element'	 => '.content-area h2',
			'property'	 => 'font-family',
		)
	)
) );


// h3
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'typography',
	'settings'		 => 'startright_typography_h3_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'startright' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'startright' ),
	'section'		 => 'startright_typography_section_headings_h3',
	'default'		 => array(
		'font-family'	 => 'Roboto',
		'variant'		 => '300',
		'font-size'		 => '28px',
		'line-height'	 => '1.5',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 40,
	'output'		 => array(
		array(
			'element'	 => '.content-area h3',
			'property'	 => 'font-family',
		)
	)
) );


// h4
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'typography',
	'settings'		 => 'startright_typography_h4_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'startright' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'startright' ),
	'section'		 => 'startright_typography_section_headings_h4',
	'default'		 => array(
		'font-family'	 => 'Roboto',
		'variant'		 => '300',
		'font-size'		 => '24px',
		'line-height'	 => '1.5',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 50,
	'output'		 => array(
		array(
			'element'	 => '.content-area h4',
			'property'	 => 'font-family',
		)
	)
) );


// h5
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'typography',
	'settings'		 => 'startright_typography_h5_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'startright' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'startright' ),
	'section'		 => 'startright_typography_section_headings_h5',
	'default'		 => array(
		'font-family'	 => 'Roboto',
		'variant'		 => '300',
		'font-size'		 => '20px',
		'line-height'	 => '1.5',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 60,
	'output'		 => array(
		array(
			'element'	 => '.content-area h5',
			'property'	 => 'font-family',
		)
	)
) );


// h6
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'typography',
	'settings'		 => 'startright_typography_h6_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'startright' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'startright' ),
	'section'		 => 'startright_typography_section_headings_h6',
	'default'		 => array(
		'font-family'	 => 'Roboto',
		'variant'		 => 'regular',
		'font-size'		 => '16px',
		'line-height'	 => '1.5',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 70,
	'output'		 => array(
		array(
			'element'	 => '.content-area h6',
			'property'	 => 'font-family',
		)
	)
) );
