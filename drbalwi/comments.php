<?php
/**
 * The template for displaying Comments.
 */

	/*
	* If the current post is protected by a password and
	* the visitor has not yet entered the password we will
	* return early without loading the comments.
	*/
	if ( post_password_required() ) {
		return;
	}
?>
<div id="comments">

	<?php if ( comments_open() && ! have_comments() ) : ?>
		<h2 id="comments-title">
			<?php
				_e( 'Noch keine Kommentare!', 'elit' );
			?>
		</h2>
	<?php endif; ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'elit' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s Reply to &ldquo;%2$s&rdquo;',
							'%1$s Replies to &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'elit'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above">
			<span class="assistive-text"><?php _e( 'Comment navigation', 'elit' ); ?></span>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'elit' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'elit' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>
		
		<ol class="commentlist">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use theme_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define theme_comment() and that will be used instead.
				 * See theme_comment() in my-theme/functions.php for more.
				 */
				wp_list_comments( array( 'callback' => 'elit_comment' ) );
			?>
		</ol>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<span class="assistive-text"><?php _e( 'Comment navigation', 'elit' ); ?></span>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'elit' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'elit' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<h2 id="comments-title" class="nocomments"><?php _e( 'Comments are closed.', 'elit' ); ?></h2>
		
	<?php
		endif;
		$fields = array(
			'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'responsive' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
			'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" /></p>',
			'email'  => '<p class="comment-form-email"><label for="email">' . __( 'E-mail', 'responsive' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
			'<input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" /></p>',
			'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website', 'responsive' ) . '</label>' .
			'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
		);
		
		$defaults = array( 'fields' => apply_filters( 'comment_form_default_fields', $fields ),'label_submit'=>__('KOMMENTIEREN') );
		
		comment_form( $defaults );
		?>
		<!-- // Show Comment Form (customized in functions.php!)
		comment_form();
	?> -->
</div><!-- /#comments -->