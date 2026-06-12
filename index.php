<?php get_header(); ?>
<div id="main">
	<div class="sidebar">
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
		<?php get_template_part( 'template-parts/post' ); ?>
	<?php endwhile; else : ?>
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<!-- <?php include (TEMPLATEPATH . "/searchform.php"); ?> -->
	<?php endif; ?>
	<div id="posts-nav">
		<h1><?php posts_nav_link(' &#183; ', '<span class="nav-arrow">&larr;</span> newer posts', 'older posts <span class="nav-arrow">&rarr;</span>'); ?></h1>
	</div>
</div><!--row-->
<?php get_footer(); ?>
