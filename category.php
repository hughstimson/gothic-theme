<?php get_header(); ?>
<div id="main">
	<div class="sidebar">
			<h1 class="back-link"><a href="<?php bloginfo('url'); ?>">&larr; back to blog</a></h1>
			<p>showing posts in <span class="topics"><?php single_cat_title(); ?></span></p>
	</div><!--side-bar-->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			<?php get_template_part( 'template-parts/post' ); ?>
		<?php endwhile; else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<!-- <?php include (TEMPLATEPATH . "/searchform.php"); ?> -->
		<?php endif; ?>
			<div id="posts-nav">
			<h1><?php posts_nav_link(' &#183; ', '&larr; newer posts', 'older posts &rarr;'); ?></h1>
		</div>
</div><!--row-->
<?php get_footer(); ?>
