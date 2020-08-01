<?php
/**
 * The template for displaying all single posts.
 *
 * @package startright
 */
$startright_layout_blog_listing_sidebar	 = '';
$startright_layout_blog_listing_sidebar	 = startright_get_option( 'startright_layout_blog_listing_sidebar' );

get_header();
?>

<div class="startright-content">

	<header class="entry-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?php the_title( '<h1 class="entry-title animated fadeInUp">', '</h1>' ); ?>
					<?php if ( 'post' == get_post_type() ) : ?>
						<div class="startright-entry-meta">
							<?php startright_posted_on(); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<?php
		if ( function_exists('yoast_breadcrumb') ) {
		echo ('<div class="startright-breadcrumbs"><div class="container"><div class="row"><div class="col-lg-12 col-md-12">');
		yoast_breadcrumb('<p>','</p>');
		echo ('</div></div></div></div>');
		}
	?>

	<div class="container">
		<div class="row">
			<?php if ( $startright_layout_blog_listing_sidebar == 'left' ) { ?>
				<div class="col-lg-9 col-md-9 col-md-push-3 col-lg-push-3 right-content">
					<?php get_template_part( 'template-parts/content', 'single' ); ?>
				</div>
				<div class="col-lg-3 col-md-3 col-md-pull-9 col-lg-pull-9">
					<?php get_sidebar(); ?>
				</div>
			<?php } else if ( $startright_layout_blog_listing_sidebar == 'none' ) { ?>
				<div class="col-lg-12 col-md-12">
					<?php get_template_part( 'template-parts/content', 'single' ); ?>
				</div>
			<?php } else if ( ( $startright_layout_blog_listing_sidebar == 'right' ) || ( $startright_single_blog_sidebar_position == '' ) ) { ?>
				<div class="col-lg-9 col-md-9 left-content">
					<?php get_template_part( 'template-parts/content', 'single' ); ?>
				</div>
				<div class="col-lg-3 col-md-3">
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>

        </div>
    </div>
</div>

<?php startright_post_nav(); ?>

<?php get_footer(); ?>