<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package startright
 */
$startright_layout_page_listing_sidebar	 = '';
$startright_featured_image_class		 = '';
$startright_header_image_style			 = '';
$startright_layout_page_listing_sidebar	 = startright_get_option( 'startright_layout_page_listing_sidebar' );

$startright_header_image = '';

get_header();
?>

<div class="startright-content">

	<?php
	if ( has_post_thumbnail( $post->ID ) ) {
		$startright_header_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
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
					<?php the_title( '<h1 class="entry-title animated fadeInUp">', '</h1>' ); ?>
					<?php if ( has_excerpt() ) { the_excerpt(); } ?>
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

			<?php if ( ( 'left' == $startright_layout_page_listing_sidebar ) || ( '' == $startright_layout_page_listing_sidebar ) ) { ?>
				<div class="col-lg-9 col-md-9 col-md-push-3 col-lg-push-3 right-content">
					<div id="primary" class="content-area">
						<main id="main" class="site-main">

							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'template-parts/content', 'page' ); ?>

								<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>

							<?php endwhile; // end of the loop.  ?>

						</main>
					</div>
				</div>
	            <div class="col-lg-3 col-md-3 col-md-pull-9 col-lg-pull-9">
					<?php dynamic_sidebar( 'sidebar-pages' ); ?>
	            </div>

			<?php } else if ( 'right' == $startright_layout_page_listing_sidebar ) { ?>

				<div class="col-lg-9 col-md-9 left-content">
					<div id="primary" class="content-area">
						<main id="main" class="site-main">

							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'template-parts/content', 'page' ); ?>

								<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>

							<?php endwhile; // end of the loop.  ?>

						</main>
					</div>
				</div>
	            <div class="col-lg-3 col-md-3">
					<?php dynamic_sidebar( 'sidebar-pages' ); ?>
	            </div>

			<?php } else if ( 'none' == $startright_layout_page_listing_sidebar ) { ?>

	            <div class="col-lg-12 col-md-12">
					<div id="primary" class="content-area">
						<main id="main" class="site-main">

							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'template-parts/content', 'page' ); ?>

								<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>

							<?php endwhile; // end of the loop.  ?>

						</main>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
</div>
<?php get_footer(); ?>
