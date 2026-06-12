<?php
/*
Template Name: djhugonaut
*/
?>
<?php get_header(); ?>
<div class="row" id="radio-header">
	<img id="hotinhere-staff" src="<?php bloginfo('template_url'); ?>/images/wcbnboard.jpg" />
	<div id="radio-header-text">
		<div id="radio-title" style="margin:0 0 10px 0;">dj Hugonaut</div>
		<h1>Freeform music live on WCBN</h1>
		<p>
			 Fall 2006 Monday 6am; Winter 2007 to Fall 2008 Thur 1pm<br />
			 WCBN 88.3fm / wcbn.org / <a href="http://hughstimson.org/category/radio/feed"><img src="http://hughstimson.org/files/feed.png" id="feed">podcast</a><br />
		</p>
	</div>		
</div> <!--radio-header -->
<div class="row">
	<div class="sidebar" id="host-profiles">
		<h1 class="back-link"><a href="<?php bloginfo('url'); ?>/projects/radio"><span class="nav-arrow">&larr;</span> radio</a></h1>
	</div><!--side-bar-->
	<?php query_posts('cat=14&posts_per_page=-1'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<div class="content-and-meta" id="post-<?php the_ID(); ?>">
					<div class="meta">
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
