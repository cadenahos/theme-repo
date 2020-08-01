<?php
/**
 * Getting started template
 *
 * @package CreateandCode
 * @subpackage StartRight
 */

$customizer_url = admin_url() . 'customize.php';
?>

<div id="intro" class="ccfw-tab-pane active">

	<div class="primary-left">

	<div class="ccfw-tab-pane-center">

		<h1 class="ccfw-welcome-title"><?php esc_html_e( 'Welcome to StartRight!', 'startright' ); ?></h1>

		<h2>
		<?php
		$theme_data = wp_get_theme();
		echo $theme_data->get( 'Description' );
		?>
			
		</h2>

		<hr />

		<h2 class="larger"><?php esc_html_e( 'StartRight Theme Documentation', 'startright' ); ?></h2>
		<p><?php esc_html_e( 'We provide lots of theme documentation articles including a detailed installation and setup guide on our website. A demo data file is also provided to get you up and running quickly.', 'startright' ); ?></p>
		<p><a href="<?php echo esc_url( 'https://createandcode.com/startright-documentation' ); ?>" class="button button-primary"><?php esc_html_e( 'View Theme Documentation', 'startright' ); ?></a></p>

		<hr />

		<h2 class="larger"><?php esc_html_e( 'Theme Options', 'startright' ); ?></h2>
		<p><?php esc_html_e( 'The startright Theme Customizer enables you to customize many elements of the theme directly without any coding skills. This includes options such as uploading your logo, changing the primary color, and much more.', 'startright' ); ?></p>
		<ul>
		<li><?php esc_html_e( 'To access the Customizer, go to', 'startright' ); ?> <strong><?php esc_html_e( 'Appearance → Customize', 'startright' ); ?></strong> <?php esc_html_e( 'in the WordPress admin menu.', 'startright' ); ?></li>
		<li><?php esc_html_e( 'When you are finished making changes, click', 'startright' ); ?> <strong><?php esc_html_e( 'Save & Publish', 'startright' ); ?></strong> <?php esc_html_e( 'to save the settings. Check out your site to confirm your changes.', 'startright' ); ?></li>
		</ul>

		<p><a href="<?php echo esc_url( $customizer_url ); ?>" class="button button-primary"><?php esc_html_e( 'Launch the Customizer', 'startright' ); ?></a></p>

		<hr />

		<h2 class="larger"><?php esc_html_e( 'How to Speed up WordPress', 'startright' ); ?></h2>
		<p><?php esc_html_e( 'If you are having performance problems with your site, you’ve come to the right place. By the end of this journey you will be rocking a blisteringly fast WordPress website!', 'startright' ); ?></p>

		<p><a href="<?php echo esc_url( 'https://createandcode.com/how-to-speed-up-wordpress-part-1/' ); ?>" class="button button-primary"><?php esc_html_e( 'Read our Speed Article', 'startright' ); ?></a></p>

		<hr />

		<h2 class="larger"><?php esc_html_e( 'How to Translate your Website', 'startright' ); ?></h2>
		<p><?php esc_html_e( 'In this article we describe how you can easily make your website multilingual without investing dozens of hours into translation.', 'startright' ); ?></p>

		<p><a href="<?php echo esc_url( 'https://createandcode.com/weglot-review/' ); ?>" class="button button-primary"><?php esc_html_e( 'Read our Translation Article', 'startright' ); ?></a></p>


	</div>

	</div><!--/primary-left -->

	<div class="primary-right">

	<div class="theme-club-intro">
	<img src="<?php echo get_template_directory_uri() . '/inc/setup/images/woman-laptop.jpg'; ?>" alt="" />
		<div class="theme-club-copy">
			<h2><?php esc_html_e( 'The Create and Code Theme Club', 'startright' ); ?></h2>
			<p><?php esc_html_e( 'Download our entire collection of premium themes, new releases and get expert support!', 'startright' ); ?></p>

		<div class="discount">
			<p><?php esc_html_e( 'Exclusive Discount! Use the code', 'startright' ); ?>
			<strong><?php esc_html_e( 'CCTHEME30', 'startright' ); ?></strong>
			<?php esc_html_e( 'to get 30% off Theme Club membership.', 'startright' ); ?></p>
		</div>

		<a class="button-primary" href="<?php echo esc_url( 'https://createandcode.com/get-theme-club' ); ?>"><?php esc_html_e( 'Shop Themes Now', 'startright' ); ?> &rarr;</a>
		</div>
	</div>

	<div class="ccfw-review">
		<h2><?php esc_html_e( 'Do you like StartRight?', 'startright' ); ?></h2>
		<p><?php esc_html_e( 'Could you please do us a HUGE favor and give the theme a 5-star rating on WordPress? Help us spread the word!', 'startright' ); ?></p>

		<a class="button-primary" href="https://wordpress.org/support/theme/startright/reviews/#new-post"><?php esc_html_e( 'Leave a Review', 'startright' ); ?></a>
		<p><em><?php esc_html_e( 'Thank you so much!', 'startright' ); ?></em></p>
		<i class="dashicons dashicons-wordpress"></i>
	</div>

	<div class="ccfw-review">
		<h2><?php esc_html_e( 'Join our Facebook group!', 'startright' ); ?></h2>
		<p><?php esc_html_e( 'Get tips, tricks and support from the Create & Code Community. We would also love to see what you have created with our WordPress thenes. Share your work with the community!', 'startright' ); ?></p>

		<a class="button-primary" href="https://www.facebook.com/groups/1974135042612016/"><?php esc_html_e( 'Join Now', 'startright' ); ?></a>
		<i class="dashicons dashicons-groups"></i>
	</div>

	</div><!--/primary-right -->

	<div class="ccfw-clear"></div>

</div>
