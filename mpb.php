<?php
/*
Template Name: mpb
*/
?>
<?php get_header(); ?>
<div class="row" id="radio-header">
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
<div class="row">
	<div class="side-bar" id="host-profiles">
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
				<div class="post-and-metadata" id="post-<?php the_ID(); ?>">
					<div class="metadata">
						<div class="bar"></div>
						<div class="date">
							<?php the_time('j M Y') ?>
						</div>
						<div class="comments-link">
							<?php comments_popup_link ('comment', '<span class="blue">1</span> comment', '<span class="blue">%</span> comments', ''); ?>
						</div>
						<div>
							<?php edit_post_link('edit', '', ''); ?>
						</div>
					</div><!--metadata-->
					<div class="post radio">
						<h2>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="text radio">
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
		<h1><?php posts_nav_link(' &#183; ', '&larr; newer posts', 'older posts &rarr;'); ?></h1>
	</div>
</div><!--row-->
<?php get_footer(); ?>
