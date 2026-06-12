<?php
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' === basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die( 'Please do not load this page directly. Thanks!' );
}

if ( post_password_required() ) : ?>
	<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php return; ?>
<?php endif; ?>

<?php if ( have_comments() ) : ?>
	<h1 id="comments"><?php comments_number( 'no comments', '1 comment:', '% comments:' ); ?></h1>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="navigation">
			<div class="alignleft"><?php previous_comments_link(); ?></div>
			<div class="alignright"><?php next_comments_link(); ?></div>
		</div>
	<?php endif; ?>

	<div class="content-and-metadata comment-list">
		<?php
		wp_list_comments( array(
			'callback'     => 'gothic_comment',
			'end-callback' => 'gothic_comment_end',
			'style'        => 'div',
			'avatar_size'  => 64,
		) );
		?>
	</div>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="navigation">
			<div class="alignleft"><?php previous_comments_link(); ?></div>
			<div class="alignright"><?php next_comments_link(); ?></div>
		</div>
	<?php endif; ?>
<?php elseif ( ! comments_open() ) : ?>
	<p class="nocomments">Comments are closed.</p>
<?php endif; ?>

<?php
$commenter          = wp_get_current_commenter();
$required           = get_option( 'require_name_email' );
$required_attribute = $required ? ' required="required" aria-required="true"' : '';
$required_label     = $required ? ' (required)' : '';

comment_form( array(
	'class_container'     => 'comment-respond',
	'title_reply'         => 'leave a comment',
	'title_reply_to'      => 'leave a comment',
	'title_reply_before'  => '<h1 id="reply-title" class="comment-reply-title">',
	'title_reply_after'   => '</h1>',
	'cancel_reply_link'   => 'cancel reply',
	'label_submit'        => 'Submit Comment',
	'comment_notes_before' => '',
	'comment_notes_after'  => '',
	'fields'              => array(
		'author' => '<p class="comment-form-author"><input type="text" name="author" id="author" value="' . esc_attr( $commenter['comment_author'] ) . '" size="22"' . $required_attribute . ' /> <label for="author">name' . $required_label . '</label></p>',
		'email'  => '<p class="comment-form-email"><input type="email" name="email" id="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="22"' . $required_attribute . ' /> <label for="email">email (will not be published)' . $required_label . '</label></p>',
		'url'    => '<p class="comment-form-url"><input type="url" name="url" id="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="22" /> <label for="url">website</label></p>',
	),
	'comment_field'       => '<p class="comment-form-comment"><textarea name="comment" id="comment-box" required="required" aria-required="true"></textarea></p>',
) );
?>
