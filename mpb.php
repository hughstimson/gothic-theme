<?php
/*
Template Name: mpb
*/
?>
<?php get_header(); ?>
<div id="radio-header">
	<img id="hotinhere-staff" src="<?php bloginfo('template_url'); ?>/images/heroicshovel.jpg" />
	<div id="radio-header-text">
		<div id="radio-title">Mountain Pine Beats</div>
		<h1>Music From the Clearcuts</h1>
		<p>
			 Thursdays 9-10pm Summer 2008<br />
			 CIDO 97.7fm / crestonradio.ca / <a href="http://hughstimson.org/category/mpb/feed"><img src="http://hughstimson.org/files/feed.png" id="feed">podcast</a><br />
		</p>
	</div>		
</div> <!--radio-header -->
<div id="main">
	<div class="sidebar" id="host-profiles">
		<h1 class="back-link"><a href="<?php bloginfo('url'); ?>/projects/radio"><span class="nav-arrow">&larr;</span> radio</a></h1>
		<p> </p>
		<p>
			The good folks at CIDO let me take over the radio while I was in town for a treeplanting contract.
		</p>
		<p>
			This was the result.
		</p>
	</div><!--side-bar-->
	<?php query_posts('cat=28'); ?>	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			<?php
			get_template_part( 'template-parts/post', null, array( 'meta' => 'date-only' ) );
			?>
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
