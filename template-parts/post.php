<?php
/*
 * Arguments:
 * - meta: chooses which metadata variant to render.
 *   - categories: date, category/topic links, comments, edit link.
 *   - date-only: date, comments, edit link; used when category links would repeat page context.
 *   - status-updated: project-style status and updated date, comments, edit link.
 */
$args = wp_parse_args(
	isset( $args ) && is_array( $args ) ? $args : array(),
	array(
		'meta' => 'categories',
	)
);
?>
<div class="post" id="post-<?php the_ID(); ?>">
	<div class="meta">
		<div class="bar"></div>
		<?php if ( 'status-updated' === $args['meta'] ) : ?>
			status: <span class="status">
				<?php
				$mykey_values = get_post_custom_values( 'status' );
				foreach ( $mykey_values as $key => $value ) {
					echo esc_html( $value );
				}
				?>
			</span><br />
			updated: <?php the_time( 'j M Y' ); ?>
			<ul class="topics">
			</ul>
		<?php else : ?>
			<div class="date">
				<?php the_time( 'j M Y' ); ?>
			</div>
			<?php if ( 'categories' === $args['meta'] ) : ?>
				<ul class="topics">
				<?php
				foreach ( get_the_category() as $category ) {
					if ( 'Uncategorized' !== $category->cat_name ) {
						printf(
							'<li><a href="%s" title="%s">%s</a></li>',
							esc_url( get_category_link( $category->term_id ) ),
							esc_attr( sprintf( __( 'View all posts in %s' ), $category->name ) ),
							esc_html( $category->name )
						);
					}
				}
				?>
				</ul>
			<?php endif; ?>
		<?php endif; ?>
		<div class="comments-link">
			<?php comments_popup_link( 'comment', '<span class="blue">1</span> comment', '<span class="blue">%</span> comments', '' ); ?>
		</div>
		<div>
			<?php edit_post_link( 'edit', '', '' ); ?>
		</div>
	</div>
	<div class="content">
		<h2>
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<div class="text">
			<?php the_content( 'Read the rest of this entry &raquo;' ); ?>
		</div>
	</div>
	<?php trackback_rdf(); ?>
</div>
