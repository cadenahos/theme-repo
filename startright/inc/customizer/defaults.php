<?php

if ( !function_exists( 'startright_get_option_defaults' ) ) {

	// Set sane theme option defaults - hattip - https://make.wordpress.org/themes/2014/07/09/using-sane-defaults-in-themes/
	function startright_get_option_defaults() {
		$defaults = array(
			// Layout
			'startright_layout_topbar'						 => 'show',
			'startright_layout_first_footer'				 => 'show',
			'startright_layout_second_footer'				 => 'show',
			'startright_layout_blog_listing_sidebar'		 => 'left',
			'startright_layout_page_listing_sidebar'		 => 'left',
			'startright_layout_blog_listing_featured_img'	 => 'above',
			// Color
			'startright_color_general_swatch'				 => '#117abc',
			'startright_color_general_text'					 => '#343434',
			'startright_color_overall_background'			 => '#333',
			'startright_color_wrapper_background'			 => '#fff',
			'startright_color_topbar_background'			 => '#434752',
			'startright_color_topbar_color'					 => '#fff',
			'startright_body_background_color'				 => '#000',
			'startright_color_general_links'				 => '#117abc',
			'startright_color_general_links_hover'			 => '#000000',
			'startright_color_section_topbar'				 => '#fff',
			'startright_color_header_background'			 => '#fff',
			'startright_color_header_site_title'			 => '#333',
			'startright_color_header_site_desc'				 => '#333',
			'startright_color_header_text'					 => '#333',
			'startright_color_footer_first_bg'				 => '#222',
			'startright_color_footer_first_text'			 => '#fff',
			'startright_color_footer_first_links'			 => '#fff',
			'startright_color_footer_first_link_hover'		 => '#ccc',
			'startright_color_footer_copyright_bg'			 => '#282828',
			'startright_color_footer_copyright_text'		 => '#ccc',
			'startright_color_footer_copyright_links'		 => '#fff',
		);

		return apply_filters( 'startright_get_option_defaults', $defaults );
	}

}