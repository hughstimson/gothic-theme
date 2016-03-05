<?php
/*
Template Name: mpb
*/
?>
<?php get_header(); ?>
<div class="row" id="radioHeader">
	<img id="hotinhereStaff" src="<?php bloginfo('template_url'); ?>/images/heroicshovel.jpg" />
	<div class="contentWithDoubleSidebar">
		<div id="radioTitle">Mountain Pine Beats</div>
		<h1>Music From the Clearcuts</h1>
		<p>
			 Thursdays 9-10pm Summer 2008<br />
			 CIDO 97.7fm / crestonradio.ca / <a href="http://hughstimson.org/category/mpb/feed"><img src="http://hughstimson.org/files/feed.png" id="feed">podcast</a><br />
		</p>
	</div>		
</div> <!--radioHeader -->
<div class="row">
	<div class="sideBar" id="hostProfiles">
		<h1>
			<a href="<?php bloginfo('url'); ?>/projects"><h1><span class="navArrow">&larr;</span> projects</h1></a>
		</h1>
		<p> </p>
		<p>
			The good folks at CIDO let me take over the radio while I was in town for a treeplanting contract.
		</p>
		<p>
			This was the result.
		</p>
	</div><!--sideBar-->
	<?php query_posts('cat=28'); ?>	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<div class="contentWithSidebar post" id="post-<?php the_ID(); ?>">
					<div class="metadata">
						<div class="bar"></div>
						<div class="date">
							<?php the_time('j M Y') ?>
						</div>
						<div class="commentsLink">
							<?php comments_popup_link ('comment', '<span class="blue">1</span> comment', '<span class="blue">%</span> comments', ''); ?>
						</div>
						<div>
							<?php edit_post_link('edit', '', ''); ?>
						</div>
					</div><!--metadata-->
					<div class="entry radio">
						<h2>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="text radio">
							<?php the_content('Read the rest of this entry &raquo;'); ?>
						</div>
					</div><!-- entry -->
					<?php trackback_rdf(); ?>
					<div class="commentsThread">
						<?php comments_template(); ?>
					</div>
			</div><!-- post -->
		<?php endwhile; else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<!-- <?php include (TEMPLATEPATH . "/searchform.php"); ?> -->
	<?php endif; ?>
	<div class="contentWithDoubleSidebar" id="postsNav">
		<h1><?php posts_nav_link(' &#183; ', '&larr; newer posts', 'older posts &rarr;'); ?></h1>
	</div>
</div><!--row-->
<?php get_footer(); ?>
