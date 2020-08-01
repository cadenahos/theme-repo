<?php

/**
 * Theme onboarding and help.
 *
 * @package StartRight
 */
class Startright_Help {

	/**
	 * Constructor
	 * Sets up the welcome screen
	 */
	public function __construct() {

		add_action( 'admin_menu', array( $this, 'startright_help_register_menu' ) );
		add_action( 'load-themes.php', array( $this, 'startright_help_activation_admin_init' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'startright_help_assets' ) );

		add_action( 'startright_help', array( $this, 'startright_help_intro' ), 10 );
		add_action( 'startright_help', array( $this, 'startright_help_freepro' ), 20 );
		add_action( 'startright_help', array( $this, 'startright_help_themeclub' ), 30 );
	}

// end constructor

	/**
	 * Redirect to Onboarding page upon theme switch/activation
	 */
	public function startright_help_activation_admin_init() {
		global $pagenow;

		if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) { // input var okay
			add_action( 'admin_notices', array( $this, 'startright_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 * @since 1.0.3
	 */
	public function startright_welcome_admin_notice() {
		?>
			<div class="updated notice is-dismissible">
				<p><?php echo sprintf( esc_html__( 'Thanks for choosing StartRight! You can read hints and tips on how get the most out of your new theme in the %sHelp Centre%s.', 'startright' ), '<a href="' . esc_url( admin_url( 'themes.php?page=startright-help' ) ) . '">', '</a>' ); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=startright-help' ) ); ?>" class="button" style="text-decoration: none;"><?php _e( 'Get started with StartRight', 'startright' ); ?></a></p>
			</div>
		<?php
	}

	// Help assets
	public function startright_help_assets( $hook_suffix ) {
		global $startright_version;

		if ( 'appearance_page_startright-help' == $hook_suffix ) {
			wp_enqueue_style( 'startright-help', get_template_directory_uri() . '/inc/setup/help.css', $startright_version );
			wp_enqueue_style( 'thickbox' );
			wp_enqueue_script( 'thickbox' );
			wp_enqueue_script( 'startright-help', get_template_directory_uri() . '/inc/setup/help.js', array( 'jquery' ), '1.0.0', true );
		}
	}

	// Quick Start menu 
	public function startright_help_register_menu() {
		add_theme_page( 
			__( 'StartRight Help', 'startright' ),
			__( 'StartRight Help', 'startright' ),
			'activate_plugins', 
			'startright-help', 
			array( $this, 'startright_help_screen' ) );
	}

	/**
	 * The welcome screen
	 *
	 * @since 1.0.0
	 *
	 */
	public function startright_help_screen() {
	?>
		<div class="ccfw-help container">

			<h1 class="ccfw-help-title"><?php _e( 'StartRight Help Centre', 'startright' ); ?></h1>
			<h2 class="ccfw-help-desc"><?php _e( 'Everything you need to know to get the most out of StartRight.', 'startright' ); ?></h2>
			<ul class="ccfw-nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#intro" aria-controls="getting_started" role="tab" data-toggle="tab"><?php esc_html_e( 'Getting Started', 'startright' ); ?></a></li>
				<li role="presentation"><a href="#freepro" aria-controls="freepro" role="tab" data-toggle="tab"><?php esc_html_e( 'Free vs Pro', 'startright' ); ?></a></li>
				<li role="presentation"><a href="#themeclub" aria-controls="themeclub" role="tab" data-toggle="tab"><?php esc_html_e( 'Theme Club and Discount', 'startright' ); ?></a></li>
			</ul>

			<div class="ccfw-tab-content">
				<?php
				/**
				 * @hooked startright_welcome_intro - 10
				 */
				do_action( 'startright_help' );
				?>


			</div>
		</div>
		<?php
	}

	public function startright_help_intro() {
		require_once( get_template_directory() . '/inc/setup/sections/intro.php' );
	}

	public function startright_help_freepro() {
		require_once( get_template_directory() . '/inc/setup/sections/freepro.php' );
	}

	public function startright_help_themeclub() {
		require_once( get_template_directory() . '/inc/setup/sections/themeclub.php' );
	}

}

$GLOBALS['startright_help'] = new Startright_Help();
