<?php
/**
 * The template used for displaying full width page content in page.php
 *
 * @package startright
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php //startright_get_page_title(); ?>
    <div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'startright' ),
			'after'	 => '</div>',
		) );
		?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
