<?php
function gothic_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	require locate_template( 'template-parts/comment.php' );
}

function gothic_comment_end() {}
