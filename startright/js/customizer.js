/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.startright-site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.startright-site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.startright-site-title, .startright-site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
				$( 'body' ).addClass( 'title-tagline-hidden' );
			} else {
				$( '.startight-site-title, .startight-site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.startight-site-description, .startright-site-description a' ).css( {
					'color': to
				} );
				$( 'body' ).removeClass( 'title-tagline-hidden' );
			}
		} );
	} );

	// logo
	wp.customize( 'startright_logo', function( value ) {
		value.bind( function( to ) {
			if ( to == '' ) {
				$( '.startright-site-logo-src' ).hide();
			} else {
				$( '.startright-site-logo-src' ).show();
				$( '.startright-site-logo-src' ).attr( 'src', to );
			}
		} );
	} );


} )( jQuery );
