<?php

// Some wrappers for theme mods/options and their defaults
//Set sensible defaults
require_once get_template_directory() . '/inc/customizer/defaults.php';

if ( !function_exists( 'startright_get_option' ) ) {

	function startright_get_option( $key ) {
		$startright_options	 = startright_get_options();
		$startright_option	 = get_theme_mod( $key, $startright_options[$key] );
		return $startright_option;
	}

}

if ( !function_exists( 'startright_get_options' ) ) {

	// Get theme option defaults
	function startright_get_options() {
		return wp_parse_args(
		get_theme_mods(), startright_get_option_defaults()
		);
	}

}