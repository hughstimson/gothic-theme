<?php
/*
Template Name: hotinhere
*/
get_header(); ?>
<div class="row" id="radio-header">
	<img id="hotinhere-staff" src="<?php bloginfo('template_url'); ?>/images/ihihstaff2.jpg" />
	<div class="content-with-double-sidebar">
		<div id="radio-title">It's Hot In Here</div>
		<h1><a href="http://wcbn.org">WCBN</a>'s environmental talk show</h1>
		<p>
			noon to 1pm alternate Mondays<br />
			<a href="http://feeds.feedburner.com/hotinhere"><img src="http://hughstimson.org/files/feed.png" id="feed">podcast</a> / 88.3fm / <a href="http://wcbn.org">wcbn.org</a><br />
			<a href="mailto:hotinhere.radio@gmail.com">hotinhere.radio@gmail.com</a>
		</p>
	</div>		
</div> <!--radio-header -->
<div class="row collapsible-sidebar narrow">
	<div class="side-bar" id="host-profiles">
		<h1 class="back-link"><a href="<?php bloginfo('url'); ?>/projects/radio"><span class="nav-arrow">&larr;</span> radio</a></h1>
		<p> </p>
		<h1>your hosts:</h1>
		<p>host profiles will show up here real soon</p>
		<h1 class="back-link">correspondants:</h1>
		<p>likewise</p>
		<h1>engineers:</h1>
		<p>likewise</p>
		<h1>alumni:</h1>
		<p>likewise</p>
	</div><!--side-bar-->
	<?php query_posts('cat=25&posts_per_page=-1'); ?>	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<div class="content-with-sidebar post" id="post-<?php the_ID(); ?>">
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
					<div class="entry radio">
						<h2>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="text radio">
							<?php the_content('Read the rest of this entry &raquo;'); ?>
						</div>
					</div><!-- entry -->
					<?php trackback_rdf(); ?>
					<div class="comments-thread">
						<?php comments_template(); ?>
					</div>
			</div><!-- post -->
		<?php endwhile; else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<!-- <?php include (TEMPLATEPATH . "/searchform.php"); ?> -->
	<?php endif; ?>
	<div class="content-with-double-sidebar" id="posts-nav">
		<h1><?php posts_nav_link(' &#183; ', '&larr; newer posts', 'older posts &rarr;'); ?></h1>
	</div>
</div><!--row-->
<?php get_footer(); ?>
