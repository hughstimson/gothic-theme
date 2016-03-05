<?php
// activate optional per-category single post templates
add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;' ));

// http://markjaquith.wordpress.com/2009/12/23/new-in-wordpress-2-9-post-thumbnail-images/
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 118, 118, true );

// modification of comment thread styling
// instructions from http://www.artarmstrong.com/wordpress-custom-comment-display/
function gothic_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
<div class="metadata">
	<div class="avatar">
		<?php echo get_avatar($comment,$size='64',$default='identicon' ); ?><br />
	</div>
	<div class="commentAuthor">
	<?php printf(__('%s'), get_comment_author_link()) ?>
	</div>
	<a title="comment permalink" alt="comment permalink" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date('j M Y')) ?></a>
	<?php edit_comment_link(__(' (edit)'),'  ','') ?>
</div>
<div class="post">
	<div class="comment text" id="comment-<?php comment_ID(); ?>">
	<div class="bar"> </div>
	<?php if ($comment->comment_approved == '0') : ?>
		<h1><?php _e('your comment is awaiting moderation') ?></h1>
		<br />
	<?php endif; ?>
		<?php comment_text() ?>
	</div>
	<div class="reply">
		<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
</div>
<?php
}

// http://mfields.org/2008/04/02/how-to-activate-excerpts-for-pages-in-wordpress-admin-panel/
add_action( 'admin_menu', 'mf_add_page_excerpt_box' );
function mf_add_page_excerpt_box() {
	add_meta_box( 'mf_page_excerpt', __( 'Excerpt' ), 'mf_page_excerpt_box', 'page', 'normal', 'high' );
}
function mf_page_excerpt_box() {
	global $post;
	$message = __( 'Excerpts are optional hand-crafted summaries of your content. You can <a href="http://codex.wordpress.org/Template_Tags/the_excerpt" target="_blank">use them in your template</a>' );
	print <<<EOF
	<div class="inside">
	<textarea rows="1" cols="40" name="excerpt" tabindex="3" id="excerpt">{$post->post_excerpt}</textarea>
	<p>{$message}</p>
	</div>
EOF;
}
add_action( 'admin_head', 'mf_page_excerpt_css' );
function mf_page_excerpt_css() {
	print '<style type="text/css">#excerpt{ height:10em; }</style>';
}

?>
