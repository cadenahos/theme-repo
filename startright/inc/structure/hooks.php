<?php

/**
 * startright hooks
 *
 * @package startright
 */
add_action( 'startright_header', 'startright_branding', 20 );
add_action( 'startright_header_navigation', 'startright_navigation_primary', 20 );
