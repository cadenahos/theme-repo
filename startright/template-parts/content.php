<?php

/**
 * @package startright
 */
$startright_layout_blog_listing_featured_img = '';
$startright_layout_blog_listing_featured_img = startright_get_option( 'startright_layout_blog_listing_featured_img' );
?>
<?php

if ( ( has_post_thumbnail() ) && ( 'hide' !== $startright_layout_blog_listing_featured_img ) ) {
	get_template_part( 'template-parts/blog', 'loop-item-with-thumb' );
} else {
	get_template_part( 'template-parts/blog', 'loop-item' );
}
?>