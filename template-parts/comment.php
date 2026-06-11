<div class="metadata">
	<div class="avatar">
		<?php echo get_avatar( $comment, 64, 'identicon' ); ?><br />
	</div>
	<div class="comment-author">
		<?php printf( __( '%s' ), get_comment_author_link() ); ?>
	</div>
	<a title="comment permalink" href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
		<time datetime="<?php comment_time( 'c' ); ?>"><?php echo esc_html( get_comment_date( 'j M Y', $comment ) ); ?></time>
	</a>
	<?php edit_comment_link( __( 'edit' ), ' ', '' ); ?>
</div>
<div class="post">
	<div <?php comment_class( 'comment text', $comment ); ?> id="comment-<?php comment_ID(); ?>">
		<div class="bar"> </div>
		<?php if ( '0' === $comment->comment_approved ) : ?>
			<h1><?php _e( 'your comment is awaiting moderation' ); ?></h1>
			<br />
		<?php endif; ?>
		<?php comment_text(); ?>
	</div>
	<div class="reply">
		<?php
		comment_reply_link( array_merge( $args, array(
			'add_below' => 'comment',
			'depth'     => $depth,
			'max_depth' => $args['max_depth'],
		) ) );
		?>
	</div>
</div>
