<?php get_header(); ?>
<div id="main">
	<div class="sidebar">
			<h1 class="back-link"><a href="<?php bloginfo('url'); ?>/blog"><span class="nav-arrow">&larr;</span>  blog</a></h1>
	</div><!--side-bar-->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			<?php
			get_template_part(
				'template-parts/post',
				null,
				array(
					'meta' => in_category( array( 'radio', 'hotinhere', 'mpb' ) ) ? 'date-only' : 'categories',
				)
			);
			?>
			<?php get_template_part( 'template-parts/comment-thread' ); ?>
		<?php endwhile; else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<!-- <?php include (TEMPLATEPATH . "/searchform.php"); ?> -->
	<?php endif; ?>
</div><!--row-->
<?php get_footer(); ?>
