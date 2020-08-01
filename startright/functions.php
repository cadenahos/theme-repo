<?php
/**
 * Startright functions and definitions
 *
 * @package startright
 */

/**
 * Assign the theme version to a var
 */
$theme				 = wp_get_theme( 'startright' );
$startright_version	 = $theme['Version'];

/**
 * Global Paths
 */
define( 'CC_CORE', get_template_directory() . '/inc/core' );

/**
 * Load styles
 */
function startright_load_styles() {
	global $startright_live_preview;
	wp_enqueue_style( 'startright-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/font-awesome.min.css' );
	wp_enqueue_style( 'startright-ionicons', get_template_directory_uri() . '/css/ionicons.css' );
	wp_enqueue_style( 'startright-kingcomposer', get_template_directory_uri() . '/css/kingcomposer.css' );
	wp_enqueue_style( 'startright-elementor', get_template_directory_uri() . '/css/elementor.css' );
	wp_enqueue_style( 'startright-animate', get_template_directory_uri() . '/css/animate.css' );
}

add_action( 'wp_enqueue_scripts', 'startright_load_styles' );

/**
 * TGM Plugin Activation
 */
require_once( CC_CORE . '/functions/class-tgm-plugin-activation.php' );
add_action( 'tgmpa_register', 'startright_register_required_plugins' );

/**
 * Recommended plugins
 *
 * @package startright
 */
function startright_register_required_plugins() {
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'		 => 'Kirki', // The plugin name
			'slug'		 => 'kirki', // The plugin slug (typically the folder name)
			'required'	 => false, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'		 => 'Contact Form 7', // The plugin name
			'slug'		 => 'contact-form-7', // The plugin slug (typically the folder name)
			'required'	 => false, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'		 => 'Elementor', // The plugin name
			'slug'		 => 'elementor', // The plugin slug (typically the folder name)
			'required'	 => false, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'		 => 'Crelly Slider', // The plugin name
			'slug'		 => 'crelly-slider', // The plugin slug (typically the folder name)
			'required'	 => false, // If false, the plugin is only 'recommended' instead of required.
		),
	);

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'		 => 'startright', // Text domain - likely want to be the same as your theme.
		'default_path'	 => '', // Default absolute path to pre-packaged plugins
		'parent_slug'	 => 'themes.php', // Default parent menu slug
		'menu'			 => 'tgmpa-install-plugins', // Menu slug
		'has_notices'	 => true, // Show admin notices or not
		'is_automatic'	 => false, // Automatically activate plugins after installation or not
		'message'		 => '', // Message to output right before the plugins table.
		'strings'		 => array(
			'page_title'						 => esc_html__( 'Install Required Plugins', 'startright' ),
			'menu_title'						 => esc_html__( 'Install Plugins', 'startright' ),
			'installing'						 => esc_html__( 'Installing Plugin: %s', 'startright' ), // %1$s = plugin name
			'oops'								 => esc_html__( 'Something went wrong with the plugin API.', 'startright' ),
			'notice_can_install_required'		 => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'startright' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'	 => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'startright' ), // %1$s = plugin name(s)
			'notice_cannot_install'				 => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'startright' ), // %1$s = plugin name(s)
			'notice_can_activate_required'		 => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'startright' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'	 => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'startright' ), // %1$s = plugin name(s)
			'notice_cannot_activate'			 => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'startright' ), // %1$s = plugin name(s)
			'notice_ask_to_update'				 => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'startright' ), // %1$s = plugin name(s)
			'notice_cannot_update'				 => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'startright' ), // %1$s = plugin name(s)
			'install_link'						 => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'startright' ),
			'activate_link'						 => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'startright' ),
			'return'							 => esc_html__( 'Return to Required Plugins Installer', 'startright' ),
			'plugin_activated'					 => esc_html__( 'Plugin activated successfully.', 'startright' ),
			'complete'							 => esc_html__( 'All plugins installed and activated successfully. %s', 'startright' ), // %1$s = dashboard link
			'nag_type'							 => 'updated', // Determines admin notice type - can only be 'updated' or 'error'.
		)
	);
	tgmpa( $plugins, $config );
}

if ( ! function_exists( 'startright_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function startright_setup() {
		/* Help */
		if ( is_admin() ) {
			// Welcome page.
			require_once( get_template_directory() . '/inc/setup/help.php' );
		}

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on startright, use a find and replace
		 * to change 'startright' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'startright', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Custom Thumbnails.
		if ( function_exists( 'add_theme_support' ) ) {
			add_theme_support( 'post-thumbnails' );
			add_image_size( 'startright-blog-featured-top-withsidebar', 760, 380, true );
			add_image_size( 'startright-blog-featured-top-nosidebar', 1070, 535, true );
			add_image_size( 'startright-blog-featured-top', 760, 380, true );
			add_image_size( 'startright-blog-nextprev-full', 1270, 233, true );
			add_image_size( 'startright-blog-nextprev-half', 635, 233, true );
		}

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'startright' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Adds support for selective refresh of widgets
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'startright_custom_background_args', array(
			'default-color'	 => 'ffffff',
			'default-image'	 => '',
		) ) );

		add_editor_style( 'css/editor-style.css' );

		// Add theme support for Custom Logo.
		add_theme_support( 'custom-logo', array(
			'width'       => 240,
			'height'      => 51,
			'flex-width'  => true,
		) );

		require_once( trailingslashit( get_template_directory() ) . 'trt-customize-pro/example-1/class-customize.php' );
	}
endif; // startright_setup.
add_action( 'after_setup_theme', 'startright_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function startright_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'startright_content_width', 760 );
}

add_action( 'after_setup_theme', 'startright_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function startright_widgets_init() {
	register_sidebar( array(
		'name'			 => esc_html__( 'Sidebar', 'startright' ),
		'id'			 => 'sidebar-1',
		'description'   => __( 'Main sidebar.', 'startright' ),
		'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</aside>',
		'before_title'	 => '<h4 class="widget-title">',
		'after_title'	 => '</h4>',
	) );

	register_sidebar( array(
		'name'			 => __( 'Top Bar Left', 'startright' ),
		'id'			 => 'top-bar-left',
		'description'   => __( 'This widget area appears in the top left of the screen in the top bar.', 'startright' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title"><span>',
		'after_title'	 => '</span></h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Top Bar Right', 'startright' ),
		'id'			 => 'top-bar-right',
		'description'   => __( 'This widget area appears in the top right of the screen in the top bar.', 'startright' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title"><span>',
		'after_title'	 => '</span></h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Header Left', 'startright' ),
		'id'			 => 'header-left',
		'description'   => __( 'This widget area appears in the top left of the header.', 'startright' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title"><span>',
		'after_title'	 => '</span></h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Header Right', 'startright' ),
		'id'			 => 'header-right',
		'description'   => __( 'This widget area appears in the top right of the header.', 'startright' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title"><span>',
		'after_title'	 => '</span></h4>',
	) );

	register_sidebar( array(
		'name'			 => __( 'Pages Sidebar', 'startright' ),
		'id'			 => 'sidebar-pages',
		'description'   => __( 'This widget appears on pages only.', 'startright' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title"><span>',
		'after_title'	 => '</span></h4>',
	) );

	register_sidebar( array(
		'name'			 => __( 'Footer Column 1', 'startright' ),
		'id'			 => 'first-footer-1',
		'description'   => __( 'The first footer widget area.', 'startright' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title">',
		'after_title'	 => '</h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Footer  Column 2', 'startright' ),
		'id'			 => 'first-footer-2',
		'description'   => __( 'The second footer widget area.', 'startright' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title">',
		'after_title'	 => '</h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Footer  Column 3', 'startright' ),
		'id'			 => 'first-footer-3',
		'description'   => __( 'The third footer widget area.', 'startright' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title">',
		'after_title'	 => '</h4>',
	) );

}

add_action( 'widgets_init', 'startright_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function startright_scripts() {
	wp_enqueue_style( 'startright-style', get_stylesheet_uri() );
	wp_enqueue_script( 'startright-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20161205', true );
	wp_enqueue_script( 'startright-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '20161205', true );
	wp_enqueue_script( 'startright-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'startright_scripts' );

/**
 * Wrap Read More in a Div
 */
function startright_wrap_readmore($more_link) {
    return '<div class="ccfw-readmore">'.$more_link.'</div>';
}
add_filter('the_content_more_link', 'startright_wrap_readmore', 10, 1);

/**
 * Load Globals
 */
require_once( CC_CORE . '/menus/wp_bootstrap_navwalker.php' );

/**
 * Load build hooks.
 */
require get_template_directory() . '/inc/structure/hooks.php';
require get_template_directory() . '/inc/structure/header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Recommend the Kirki plugin
 */
require get_template_directory() . '/inc/include-kirki.php';

/**
 * Load the Kirki Fallback class
 */
require get_template_directory() . '/inc/kirki-fallback.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */

