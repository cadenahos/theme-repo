<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package startright
 */
if ( !function_exists( 'startright_paging_nav' ) ) :

	/**
	 * Display navigation to next/previous set of posts when applicable.
	 */
	function startright_paging_nav() {
		// Don't print empty markup if there's only one page.
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return;
		}
		?>
		<nav class="navigation paging-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'startright' ); ?></h1>
			<div class="nav-links">

				<?php if ( get_next_posts_link() ) : ?>
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'startright' ) ); ?></div>
				<?php endif; ?>

				<?php if ( get_previous_posts_link() ) : ?>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'startright' ) ); ?></div>
				<?php endif; ?>

			</div><!-- .nav-links -->
		</nav><!-- .navigation -->
		<?php
	}

endif;

if ( !function_exists( 'startright_post_nav' ) ) :

	/**
	 * Display navigation to next/previous post when applicable.
	 */
	function startright_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous	 = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next		 = get_adjacent_post( false, '', false );

		if ( !$next && !$previous ) {
			return;
		}
		?>
		<nav class="navigation post-navigation">

			<?php
			global $post;
			$prev_post	 = get_previous_post();
			$next_post	 = get_next_post();
			$startright_nextprev_img_size = '';
			if ( $prev_post && $next_post ) {
				$startright_nextprev_img_size = 'startright-blog-nextprev-half';
			} else {
				$startright_nextprev_img_size = 'startright-blog-nextprev-full';				
			}
			
			if ( ( $prev_post ) && ( has_post_thumbnail( $prev_post->ID ) ) ) {
				$startright_prev_nav_bg = wp_get_attachment_image_src( get_post_thumbnail_id( $prev_post->ID ), $startright_nextprev_img_size, array(), false, '' );
				?>
				<style>
					.nav-previous .nav-post-background { background-image: url(<?php echo $startright_prev_nav_bg[0]; ?> ) }
				</style>
				<?php
			}

			if ( ( $next_post ) && ( has_post_thumbnail( $next_post->ID ) ) ) {
				$startright_next_nav_bg = wp_get_attachment_image_src( get_post_thumbnail_id( $next_post->ID ), $startright_nextprev_img_size, array(), false, '' );
				?>

				<style>
					.nav-next .nav-post-background { background-image: url(<?php echo $startright_next_nav_bg[0]; ?> ) }
				</style>

				<?php
			}
			?>
			<?php ?>
			<div class="nav-links">
				<?php previous_post_link( '%link', _x( '<div class="nav-post nav-previous"><div class="nav-post-background"></div><span class="meta-nav">Previous</span><span class="meta-title">%title</span><span class="meta-date">%date</span></div>', 'Previous post link', 'startright' ) ); ?>
				<?php next_post_link( '%link', _x( '<div class="nav-post nav-next"><div class="nav-post-background"></div><span class="meta-nav">Next</span><span class="meta-title">%title</span><span class="meta-date">%date</span></div>', 'Next post link', 'startright' ) );
				?>
			</div><!-- .nav-links -->
		</nav><!-- .navigation -->
		<?php
	}

endif;

if ( !function_exists( 'startright_pagination' ) ) :

	function startright_pagination() {

		if ( is_singular() ) {
			return;
		}

		global $wp_query;

		/** Stop execution if there's only 1 page */
		if ( $wp_query->max_num_pages <= 1 ) {
			return;
		}

		$paged	 = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$max	 = intval( $wp_query->max_num_pages );

		/** 	Add current page to the array */
		if ( $paged >= 1 )
			$links[] = $paged;

		/** 	Add the pages around the current page to the array */
		if ( $paged >= 3 ) {
			$links[] = $paged - 1;
			$links[] = $paged - 2;
		}

		if ( ( $paged + 2 ) <= $max ) {
			$links[] = $paged + 2;
			$links[] = $paged + 1;
		}

		echo '<div class="startright-blog-pagination"><ul>' . "\n";

		/** 	Previous Post Link */
		if ( get_previous_posts_link() )
			printf( '<li class="startright-pagination-prev">%s</li>' . "\n", get_previous_posts_link() );

		/** 	Link to first page, plus ellipses if necessary */
		if ( !in_array( 1, $links ) ) {
			$class = 1 == $paged ? ' class="active"' : '';

			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

			if ( !in_array( 2, $links ) )
				echo '<li>&hellip;</li>';
		}

		/** 	Link to current page, plus 2 pages in either direction if necessary */
		sort( $links );
		foreach ( (array) $links as $link ) {
			$class = $paged == $link ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
		}

		/** 	Link to last page, plus ellipses if necessary */
		if ( !in_array( $max, $links ) ) {
			if ( !in_array( $max - 1, $links ) )
				echo '<li>&hellip;</li>' . "\n";

			$class = $paged == $max ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
		}

		/** 	Next Post Link */
		if ( get_next_posts_link() )
			printf( '<li class="startright-pagination-next">%s</li>' . "\n", get_next_posts_link() );

		echo '</ul></div>' . "\n";
	}

endif;

if ( !function_exists( 'startright_posted_on' ) ) :

	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function startright_posted_on() {
		global $post;

		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf( $time_string, esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ), esc_attr( get_the_modified_date( 'c' ) ), esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'startright' ), '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		if ( is_singular() ) { 
			$author_id = $post->post_author;
			$post_author = get_user_by( 'id', $author_id );
			$display_name = $post_author->display_name;

			$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'startright' ), '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( $display_name ) . '</a></span>'
			);
		} else {
			$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'startright' ), '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
			);
		}

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

		if ( !is_single() && !post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'startright' ), esc_html__( '1 Comment', 'startright' ), esc_html__( '% Comments', 'startright' ) );
			echo '</span>';
		}
	}

endif;

if ( !function_exists( 'startright_entry_footer' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function startright_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' == get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'startright' ) );
			if ( $categories_list && startright_categorized_blog() ) {
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'startright' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'startright' ) );
			if ( $tags_list ) {
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'startright' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
	}

endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function startright_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'startright_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'	 => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'	 => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'startright_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so startright_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so startright_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in startright_categorized_blog.
 */
function startright_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'startright_categories' );
}

add_action( 'edit_category', 'startright_category_transient_flusher' );
add_action( 'save_post', 'startright_category_transient_flusher' );


if ( !function_exists( 'startright_blog_image' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function startright_blog_image() {
		$startright_layout_blog_listing_sidebar	 = '';
		$startright_layout_blog_listing_sidebar	 = startright_get_option( 'startright_layout_blog_listing_sidebar' );
		?>
		<div class="startright-blog-image">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php 
				if ( ( $startright_layout_blog_listing_sidebar == 'left' ) || ( $startright_layout_blog_listing_sidebar == 'right' ) )  {
					the_post_thumbnail( 'startright-blog-featured-top-withsidebar' ); 
				} else {
					the_post_thumbnail( 'startright-blog-featured-top-nosidebar' ); 				
				}
			?>
			</a>
		</div>

		<?php
	}

endif;


if ( !function_exists( 'startright_blog_loop_item' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function startright_blog_loop_item() {
		?>

		<header class="startright-entry-header">
			<?php the_title( sprintf( '<h2 class="startright-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="startright-entry-meta">
					<?php startright_posted_on(); ?>
				</div>
			<?php endif; ?>
		</header>

		<div class="startright-entry-content">
			<?php if ( has_post_format( 'link' ) ) : ?>
				<?php the_content(); ?>
			<?php elseif ( has_post_format( 'quote' ) ) : ?>
				<?php the_content(); ?>
			<?php else : ?>
				<?php
				the_content( __( 'Read More', 'startright' ) );
				wp_link_pages( array(
					'before' => '<div class="startright-page-links">' . __( 'Pages:', 'startright' ),
					'after'	 => '</div>',
				) );
			endif;
			?>
		</div><!-- .entry-content -->

		<footer class="startright-entry-footer">
			<?php startright_entry_footer(); ?>
		</footer><!-- .entry-footer -->	

		<?php
		if ( function_exists( 'sharing_display' ) ) {
			sharing_display( '', true );
		}

		if ( class_exists( 'Jetpack_Likes' ) ) {
			$custom_likes = new Jetpack_Likes;
			echo $custom_likes->post_likes( '' );
		}
		?>

		<?php
	}

endif;

if ( !function_exists( 'startright_blog_single_image' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function startright_blog_single_image() {
		?>
		<div class="startright-blog-image">
			<?php the_post_thumbnail(); ?>
		</div>

		<?php
	}

endif;


if ( !function_exists( 'startright_blog_single_item' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function startright_blog_single_item() {
		?>

		<div class="startright-entry-content">
			<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="startright-page-links">' . __( 'Pages:', 'startright' ),
				'after'	 => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="startright-entry-footer">
			<?php startright_entry_footer(); ?>
		</footer><!-- .entry-footer -->

		<?php
	}

endif;

if ( !function_exists( 'startright_comment' ) ) :

	/**
	 * Template for comments and pingbacks.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 */
	function startright_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;

		if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) :
			?>

			<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
				<div class="comment-body">
					<?php _e( 'Pingback:', 'startright' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'startright' ), '<span class="edit-link">', '</span>' ); ?>
				</div>

			<?php else : ?>

			<li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent'  ); ?>>
				<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
					<footer class="comment-meta">
						<div class="comment-author vcard">
							<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
							<?php printf( __( '%s <span class="says">says:</span>', 'startright' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
						</div><!-- .comment-author -->

						<div class="comment-metadata">
							<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
								<time datetime="<?php comment_time( 'c' ); ?>">
									<?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'startright' ), get_comment_date(), get_comment_time() ); ?>
								</time>
							</a>
							<?php edit_comment_link( __( 'Edit', 'startright' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .comment-metadata -->

						<?php if ( '0' == $comment->comment_approved ) : ?>
							<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'startright' ); ?></p>
						<?php endif; ?>
					</footer><!-- .comment-meta -->

					<div class="comment-content">
						<?php comment_text(); ?>
					</div><!-- .comment-content -->

					<div class="reply">
						<?php
						comment_reply_link( array_merge( $args, array(
							'add_below'	 => 'div-comment',
							'depth'		 => $depth,
							'max_depth'	 => $args['max_depth'],
							'before'	 => '<div class="reply">',
							'after'		 => '</div>',
						) ) );
						?>
					</div>
				</article><!-- .comment-body -->

			<?php
			endif;
		}

	endif; // ends check for startright_comment()

	if ( !function_exists( 'startright_get_sidebar' ) ) {

		/**
		 * Display startright sidebar
		 * @uses get_sidebar()
		 * @since 1.0.0
		 */
		function startright_get_sidebar() {
			dynamic_sidebar( 'shop-sidebar' );
		}

	}

// Menu walker adding "has-children" class to menu li's with children menu items
	class startright_primary_nav_walker extends Walker_Nav_Menu {

		function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args, &$output ) {
			$id_field = $this->db_fields['id'];
			if ( !empty( $children_elements[$element->$id_field] ) ) {
				$element->classes[] = 'has-children';
			}
			Walker_Nav_Menu::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
		}

	}
