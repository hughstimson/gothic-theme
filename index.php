<?php get_header(); ?>
<div class="row">
	<div class="side-bar">
		<div class="page-nav">
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			<!-- <h1>Archive</h1> -->
			<h1><a href="<?php bloginfo('url'); ?>/feed">Feed</a></h1>
			<!-- <h1><img src="<?php bloginfo('template_url'); ?>/images/triangleRight.png" />Topics</h1> -->
		</div>
	</div><!--side-bar-->
    <?php /*
            Category 14 = "radio" (DJ Hugonaut, I think), 25 = Hot in Here, 71 = tweets.
            No special handling of Mountain Pine Beats here?
            An overall refactoring to a modern taxonomy system is probably warranted.
    */ ?>
	<?php query_posts($query_string . '&cat=-14,-25,-71'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="post-and-metadata" id="post-<?php the_ID(); ?>">
			<div class="metadata">
				<div class="bar"></div>
				<div class="date">
					<?php the_time('j M Y') ?>
				</div>
				<ul class="topics">
				<?php
				foreach((get_the_category()) as $category) {
					 if ($category->cat_name != 'Uncategorized') {echo '<li><a href="'. get_category_link( $category->term_id ).'" title="' . sprintf( __( "View all posts in %s" ), $category->name ).'"'.'>'.$category->name.'</a></li>'; } }
				?>
				</ul>
				<div class="comments-link">
					<?php comments_popup_link ('comment', '<span class="blue">1</span> comment', '<span class="blue">%</span> comments', ''); ?>
				</div>
				<div>
					<?php edit_post_link('edit', '', ''); ?>
				</div>
			</div><!--metadata-->
			<div class="post">
				<h2>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="text">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
			</div><!-- entry -->
			<?php trackback_rdf(); ?>
		</div><!-- post -->
	<?php endwhile; else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<!-- <?php include (TEMPLATEPATH . "/searchform.php"); ?> -->
	<?php endif; ?>
	<div id="posts-nav">
		<h1><?php posts_nav_link(' &#183; ', '<span class="nav-arrow">&larr;</span> newer posts', 'older posts <span class="nav-arrow">&rarr;</span>'); ?></h1>
	</div>
</div><!--row-->
<?php get_footer(); ?>
