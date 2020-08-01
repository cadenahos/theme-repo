<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package startright
 */
$startright_layout_first_footer					 = '';
$startright_layout_second_footer				 = '';
$startright_color_footer_copyright_background	 = '';
$startright_layout_first_footer					 = startright_get_option( 'startright_layout_first_footer' );
?>
<footer class="startright-footer-container"> 
	<?php if ( "show" == $startright_layout_first_footer ) { ?>
		<div class="startright-first-footer-wrapper">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'first-footer-1' ) ) : ?>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<?php dynamic_sidebar( 'first-footer-1' ); ?>   
						</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'first-footer-2' ) ) : ?>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<?php dynamic_sidebar( 'first-footer-2' ); ?>   
						</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'first-footer-3' ) ) : ?>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<?php dynamic_sidebar( 'first-footer-3' ); ?>   
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php } ?>
    <!-- /first footer -->
    
    <div class="startright-last-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="startright-footer-msg">
						<div class="site-info">
            				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'startright' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'startright' ), 'WordPress' ); ?></a>
            				<span class="sep"></span>
            				<?php printf( __( 'Theme: %2$s by %1$s.', 'startright' ), 'Create and Code', '<a href="https://createandcode.com/wordpress-themes/startright/" rel="designer">StartRight</a>' ); ?>
        				</div><!-- /site-info -->
					</div>
                </div>
            </div>
        </div>
    </div>
   
    <a href="#" id="ccfw-back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
</footer>
</div><!-- /#startright-page-wrap -->
</div><!-- /#wrapper -->
<?php wp_footer(); ?>
</body>
</html>