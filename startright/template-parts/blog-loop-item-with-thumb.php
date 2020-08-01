<?php
$startright_layout_blog_listing_featured_img = '';
$startright_layout_blog_listing_featured_img = startright_get_option( 'startright_layout_blog_listing_featured_img' );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'startright-blog-loop-item' ); ?>>
	<?php {
		echo startright_blog_image();
		echo startright_blog_loop_item();
	}
	?>
</article><!-- #post-## -->