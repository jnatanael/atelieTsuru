<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 *
 *
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	?>
	<p class="noComments">Este post é protegido por senha. Digite a senha para ver os comentários.</p>
	<?php
	return;
}
?>

<div id="comments" class="commentsArea">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'atelie' ), get_the_title() );
			} else {
				printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
								'%1$s Reply to &ldquo;%2$s&rdquo;', '%1$s Replies to &ldquo;%2$s&rdquo;', $comments_number, 'comments title', 'atelie'
						), number_format_i18n( $comments_number ), get_the_title()
				);
			}
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'avatar_size' => 100,
				'style' => 'ol',
				'short_ping' => true,
				'reply_text' => __( 'Reply', 'atelie' ),
			) );
			?>
		</ol>

		<?php
		the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'atelie' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'atelie' ) . '</span>',
		) );

	endif; // Check for have_comments().
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( !comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'atelie' ); ?></p>
		<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->
