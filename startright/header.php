<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package startright
 */
$startright_layout_topbar	 = '';
$startright_layout_topbar	 = startright_get_option( 'startright_layout_topbar' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper">	
			<header id="startright-header-wrap">
				<?php if ( "show" == $startright_layout_topbar ) { ?>
					<div class="startright-header-topbar">
						<div class="container">
							<div class="row">
								<div class="col-sm-9 col-md-6 col-lg-6 top-bar-left">
									<?php do_action( 'startright_topbar' ); ?>
									<?php if ( is_active_sidebar( 'top-bar-left' ) ) : ?>
										<?php dynamic_sidebar( 'top-bar-left' ); ?>   
									<?php endif; ?>
								</div>
								<div class="col-sm-3 col-md-6 col-lg-6 top-bar-right">
									<?php do_action( 'startright_topbar' ); ?>
									<?php if ( is_active_sidebar( 'top-bar-right' ) ) : ?>
										<?php dynamic_sidebar( 'top-bar-right' ); ?>   
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="startright-header-main">
					<div class="container">
						<div class="row vertical-align">
							<div class="col-sm-12 col-md-12 col-lg-12 vertical-align">
								<div class="startright-header-branding">
									<?php do_action( 'startright_header' ); ?>
										<div class="startright-header-details">
											<?php if ( is_active_sidebar( 'header-left' ) ) : ?>
												<div class="startright-header-details">
													<?php dynamic_sidebar( 'header-left' ); ?>
												</div>
											<?php endif; ?> 
										</div>
								</div>
								<?php if ( is_active_sidebar( 'header-right' ) ) : ?>
									<div class="startright-header-details-right">
										<?php dynamic_sidebar( 'header-right' ); ?>
									</div>
								<?php endif; ?>                
							</div>
						</div>
					</div>
				</div>
				<div class="startright-header-nav">
					<?php do_action( 'startright_header_navigation' ); ?>
				</div>
				<div class="startright-header-before-content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<?php do_action( 'startright_header_before_content' ); ?>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="sticky-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 display-table">
							<?php do_action( 'startright_header' ); ?>
							<?php do_action( 'startright_header_navigation' ); ?>
						</div>
					</div>
				</div>
			</div>
			<div id="startright-page-wrap" class="hfeed site">