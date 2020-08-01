<?php

//Color fields
$startright_default_options = startright_get_option_defaults();

// General colors
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_general_swatch',
	'label'			 => __( 'Primary Swatch Color', 'startright' ),
	'description'	 => __( 'Select the primary color of your brand.', 'startright' ),
	'section'		 => 'startright_color_section_general',
	'default'		 => $startright_default_options['startright_color_general_swatch'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '
            	#secondary .advanced-sidebar-menu ul li a:hover,
            	.startright-blog-pagination ul li a:hover,
            	.blog-menu ul.children li:hover > a, 
            	.blog-menu ul.sub-menu li:hover > a, 
            	.blog-menu li ul li a:hover,
            	.advanced-sidebar-menu ul li a:hover,
            	.sticky-header .blog-menu > li.current_page_item > a, 
				.sticky-header .blog-menu > li.current_page_ancestor > a, 
				.sticky-header .blog-menu > li.current_page_parent > a,
				.sticky-header .blog-menu > li > a:hover,
				.sticky-header .blog-menu > li:hover > a',
			'property'	 => 'color'
		),
		array(
			'element'	 => '
            	.content-area .more-link,
            	.startright-blog-pagination ul li.active a,
            	.post-navigation span.meta-nav,
            	.mc4wp-form input[type="submit"],
            	.content-area input[type="submit"],
            	.content-area input[type="button"],
            	.startright-content .widget a.button,
            	.advanced-sidebar-menu ul li.current_page_item > a,
				.advanced-sidebar-menu ul li.current_page_item > a:hover,
				.advanced-sidebar-menu ul li.current_page_parent > a,
				.advanced-sidebar-menu ul li.current_page_parent > a:hover,
				.advanced-sidebar-menu ul ul.children li a,
				#ccfw-back-to-top',
			'property'	 => 'background-color'
		),
		array(
			'element'	 => '
            	#secondary .advanced-sidebar-menu ul li.current_page_item > a, 
            	#secondary .advanced-sidebar-menu ul li.current_page_item > a:hover,
				.advanced-sidebar-menu ul li.current_page_parent > a,
				.advanced-sidebar-menu ul li.current_page_parent > a:hover,
				.advanced-sidebar-menu ul li.current_page_item > a,
				.advanced-sidebar-menu ul li.current_page_item > a:hover,
            	.startright-blog-pagination ul li.active a,
            	.startright-blog-pagination ul li a:hover,
            	.advanced-sidebar-menu ul ul.children li a',
			'property'	 => 'border-color'
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '
            	#secondary .advanced-sidebar-menu ul li a:hover,
            	.startright-blog-pagination ul li a:hover,
            	.blog-menu ul.children li:hover > a, 
            	.blog-menu ul.sub-menu li:hover > a, 
            	.blog-menu li ul li a:hover,
            	.advanced-sidebar-menu ul li a:hover,
            	.sticky-header .blog-menu > li.current_page_item > a, 
				.sticky-header .blog-menu > li.current_page_ancestor > a, 
				.sticky-header .blog-menu > li.current_page_parent > a,
				.sticky-header .blog-menu > li > a:hover,
				.sticky-header .blog-menu > li:hover > a',
			'property'	 => 'color'
		),
		array(
			'element'	 => '
            	.content-area .more-link,
            	.startright-blog-pagination ul li.active a,
            	.post-navigation span.meta-nav,
            	.mc4wp-form input[type="submit"],
            	.content-area input[type="submit"],
            	.content-area input[type="button"],
            	.startright-content .widget a.button,
            	.advanced-sidebar-menu ul li.current_page_item > a,
				.advanced-sidebar-menu ul li.current_page_item > a:hover,
				.advanced-sidebar-menu ul li.current_page_parent > a,
				.advanced-sidebar-menu ul li.current_page_parent > a:hover,
				.advanced-sidebar-menu ul ul.children li a,
				#ccfw-back-to-top',
			'property'	 => 'background-color'
		),
		array(
			'element'	 => '
            	#secondary .advanced-sidebar-menu ul li.current_page_item > a, 
            	#secondary .advanced-sidebar-menu ul li.current_page_item > a:hover,
				.advanced-sidebar-menu ul li.current_page_parent > a,
				.advanced-sidebar-menu ul li.current_page_parent > a:hover,
				.advanced-sidebar-menu ul li.current_page_item > a,
				.advanced-sidebar-menu ul li.current_page_item > a:hover,
            	.startright-blog-pagination ul li.active a,
            	.startright-blog-pagination ul li a:hover,
            	.advanced-sidebar-menu ul ul.children li a',
			'property'	 => 'border-color'
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_general_links',
	'label'			 => esc_html__( 'General links', 'startright' ),
	'description'	 => esc_html__( 'Select your general links color.', 'startright' ),
	'section'		 => 'startright_color_section_general',
	'default'		 => $startright_default_options['startright_color_general_swatch'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => 'a',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => 'a',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_general_links_hover',
	'label'			 => esc_html__( 'General link hover', 'startright' ),
	'description'	 => esc_html__( 'Select your general link hover color.', 'startright' ),
	'section'		 => 'startright_color_section_general',
	'default'		 => $startright_default_options['startright_color_general_links_hover'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => 'a:hover',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => 'a:hover',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_wrapper_background',
	'label'			 => esc_html__( 'Wrapper Background Color', 'startright' ),
	'description'	 => esc_html__( 'Select your wrapper background color.', 'startright' ),
	'section'		 => 'startright_color_section_container',
	'default'		 => $startright_default_options['startright_color_wrapper_background'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '#wrapper',
			'property'	 => 'background-color',
		)
	)
) );

// Top bar colors
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_topbar_background',
	'label'			 => esc_html__( 'Top bar background', 'startright' ),
	'description'	 => esc_html__( 'Select your top bar background color.', 'startright' ),
	'section'		 => 'startright_color_section_topbar',
	'default'		 => $startright_default_options['startright_color_topbar_background'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-header-topbar',
			'property'	 => 'background-color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-header-topbar',
			'function'	 => 'css',
			'property'	 => 'background-color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_topbar_color',
	'label'			 => esc_html__( 'Top bar text', 'startright' ),
	'description'	 => esc_html__( 'Select your top bar text color.', 'startright' ),
	'section'		 => 'startright_color_section_topbar',
	'default'		 => $startright_default_options['startright_color_topbar_color'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-header-topbar, .startright-header-topbar a',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-header-topbar, .startright-header-topbar a',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

// Header colors
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_header_background',
	'label'			 => esc_html__( 'Header background', 'startright' ),
	'description'	 => esc_html__( 'Select your header background color.', 'startright' ),
	'section'		 => 'startright_color_section_header',
	'default'		 => $startright_default_options['startright_color_header_background'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-header-main',
			'property'	 => 'background-color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-header-main',
			'function'	 => 'css',
			'property'	 => 'background-color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_header_site_title',
	'label'			 => esc_html__( 'Site title', 'startright' ),
	'description'	 => esc_html__( 'Select your site title color.', 'startright' ),
	'section'		 => 'startright_color_section_header',
	'default'		 => $startright_default_options['startright_color_header_site_title'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-site-title a',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-site-title a',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_header_site_desc',
	'label'			 => esc_html__( 'Site description', 'startright' ),
	'description'	 => esc_html__( 'Select your site description color.', 'startright' ),
	'section'		 => 'startright_color_section_header',
	'default'		 => $startright_default_options['startright_color_header_site_desc'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-site-description',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-site-description',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_header_text',
	'label'			 => esc_html__( 'Header text', 'startright' ),
	'description'	 => esc_html__( 'Select your header text color.', 'startright' ),
	'section'		 => 'startright_color_section_header',
	'default'		 => $startright_default_options['startright_color_header_text'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-header-main, .startright-header-main h4',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-header-main, .startright-header-main h4',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

// Footer colors
startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_footer_first_bg',
	'label'			 => esc_html__( 'First footer background color', 'startright' ),
	'description'	 => esc_html__( 'Select your first footer background color.', 'startright' ),
	'section'		 => 'startright_color_section_footer',
	'default'		 => $startright_default_options['startright_color_footer_first_bg'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-first-footer-wrapper',
			'property'	 => 'background-color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-first-footer-wrapper',
			'function'	 => 'css',
			'property'	 => 'background-color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_footer_first_text',
	'label'			 => esc_html__( 'First footer text color', 'startright' ),
	'description'	 => esc_html__( 'Select your first footer text color.', 'startright' ),
	'section'		 => 'startright_color_section_footer',
	'default'		 => $startright_default_options['startright_color_footer_first_text'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-first-footer-wrapper, .startright-first-footer-wrapper h4, .startright-first-footer-wrapper p',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-first-footer-wrapper, .startright-first-footer-wrapper h4, .startright-first-footer-wrapper p',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_footer_first_links',
	'label'			 => esc_html__( 'First footer links', 'startright' ),
	'description'	 => esc_html__( 'Select your first footer links color.', 'startright' ),
	'section'		 => 'startright_color_section_footer',
	'default'		 => $startright_default_options['startright_color_footer_first_links'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-first-footer-wrapper a',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-first-footer-wrapper a',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_footer_first_link_hover',
	'label'			 => esc_html__( 'First footer link hover', 'startright' ),
	'description'	 => esc_html__( 'Select your first footer link hover color.', 'startright' ),
	'section'		 => 'startright_color_section_footer',
	'default'		 => $startright_default_options['startright_color_footer_first_link_hover'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-first-footer-wrapper a:hover',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-first-footer-wrapper a:hover',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );


startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_footer_copyright_bg',
	'label'			 => esc_html__( 'Copyright Background Color', 'startright' ),
	'description'	 => esc_html__( 'Select your copyright background color.', 'startright' ),
	'section'		 => 'startright_color_section_footer',
	'default'		 => $startright_default_options['startright_color_footer_copyright_bg'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-last-footer',
			'property'	 => 'background-color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-last-footer',
			'function'	 => 'css',
			'property'	 => 'background-color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_footer_copyright_text',
	'label'			 => esc_html__( 'Copyright Text Color', 'startright' ),
	'description'	 => esc_html__( 'Select your copyright text color.', 'startright' ),
	'section'		 => 'startright_color_section_footer',
	'default'		 => $startright_default_options['startright_color_footer_copyright_text'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-last-footer',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-last-footer',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

startright_Kirki::add_field( 'startright_config', array(
	'type'			 => 'color',
	'settings'		 => 'startright_color_footer_copyright_links',
	'label'			 => esc_html__( 'Copyright Links Color', 'startright' ),
	'description'	 => esc_html__( 'Select your copyright links color.', 'startright' ),
	'section'		 => 'startright_color_section_footer',
	'default'		 => $startright_default_options['startright_color_footer_copyright_links'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.startright-last-footer a',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.startright-last-footer a',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );
