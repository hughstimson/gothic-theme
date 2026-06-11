<?php
// activate optional per-category single post templates
add_filter( 'single_template', function( $t ) {
    foreach ( (array) get_the_category() as $cat ) {
        if ( file_exists( get_template_directory() . "/single-{$cat->term_id}.php" ) ) {
            return get_template_directory() . "/single-{$cat->term_id}.php";
        }
    }
    return $t;
} );


// http://markjaquith.wordpress.com/2009/12/23/new-in-wordpress-2-9-post-thumbnail-images/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
set_post_thumbnail_size( 118, 118, true );

require_once get_template_directory() . '/inc/comments.php';

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

// Use a completely different CSS for the retro theme landing page

add_filter('stylesheet_uri', 'my_stylesheet', 10, 2);

function my_stylesheet($stylesheet_uri, $stylesheet_dir_uri){
    if (is_page_template( 'retro-landing.php' ))
        $stylesheet_uri = $stylesheet_dir_uri . '/retro.css';

    return $stylesheet_uri;
}

?>
