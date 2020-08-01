<?php
/**
 * @package startright
 */
$startright_layout_blog_listing_sidebar	 = '';
$startright_layout_blog_listing_sidebar	 = startright_get_option( 'startright_layout_blog_listing_sidebar' );
$startright_featured_image_class		 = '';
$startright_header_image_style			 = '';

get_header();
?>

<div class="startright-content">

	<?php
	if ( is_home() && get_option( 'page_for_posts' ) ) {
		$startright_header_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_option( 'page_for_posts' ) ), 'full' );

		if ( $startright_header_image ) {
			$startright_header_image_style	 = 'background-size: cover; background-position: center center; background-image: url(' . $startright_header_image[0] . '); ';
			$startright_featured_image_class = 'has-featured-image';
		}
	}
	?> 

	<header class="entry-header <?php echo $startright_featured_image_class; ?>" style="<?php echo $startright_header_image_style; ?>">

		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?php
					if ( is_home() && get_option( 'page_for_posts' ) ) {
						$startright_blog_page_title = get_option( 'page_for_posts' );
						echo '<h1 class="animated fadeInUp">' . get_page( $startright_blog_page_title )->post_title . '</h1>';
					} else { ?>
						<h1 class="animated fadeInUp"><?php echo _e( 'Latest Posts', 'startright' ); ?></h1>
					<?php }
					?>

				</div>
			</div>
		</div>
	</header><!-- .entry-header -->

	<?php
		if ( function_exists('yoast_breadcrumb') ) {
		echo ('<div class="startright-breadcrumbs"><div class="container"><div class="row"><div class="col-lg-12 col-md-12">');
		yoast_breadcrumb('<p>','</p>');
		echo ('</div></div></div></div>');
		}
	?>

	<div class="container">
		<div class="row">
			<?php if ( ( 'left' == $startright_layout_blog_listing_sidebar ) || ( '' == $startright_layout_blog_listing_sidebar ) ) { ?>
				<div class="col-lg-9 col-md-9 col-md-push-3 col-lg-push-3 right-content">
					<?php get_template_part( 'template-parts/blog', 'list' ); ?>
				</div>
				<div class="col-lg-3 col-md-3 col-md-pull-9 col-lg-pull-9">
					<?php get_sidebar(); ?>
				</div>
			<?php } else if ( 'right' == $startright_layout_blog_listing_sidebar ) { ?>
				<div class="col-lg-9 col-md-9 left-content">
					<?php get_template_part( 'template-parts/blog', 'list' ); ?>
				</div>
				<div class="col-lg-3 col-md-3">
					<?php get_sidebar(); ?>
				</div>
			<?php } else if ( 'none' == $startright_layout_blog_listing_sidebar ) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<?php get_template_part( 'template-parts/blog', 'list' ); ?>
				</div>
			<?php }
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
