<?php
/**
 * The template for displaying comments
 *
 * @since	1.0
 */
?>

<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if (comments_open()) {
		$args = array (
			'comment_field' =>  '<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="Comment something*" cols="45" rows="5" aria-required="true"></textarea></p>',
			'label_submit'	=> __( 'Submit' ),
		);
		comment_form($args); 
	}
	?>

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>

		<ul class="commentlist">
			<?php wp_list_comments(); ?>
		</ul>

		<?php 

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'mcstextdomain' ); ?></p>
	
	<?php endif; ?>

</div><!-- #comments -->
