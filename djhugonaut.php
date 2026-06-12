<?php
/*
Template Name: djhugonaut
*/
?>
<?php get_header(); ?>
<div id="radio-header">
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
<div id="main">
	<div class="sidebar" id="host-profiles">
		<h1 class="back-link"><a href="<?php bloginfo('url'); ?>/projects/radio"><span class="nav-arrow">&larr;</span> radio</a></h1>
	</div><!--side-bar-->
	<?php query_posts('cat=14&posts_per_page=-1'); ?>
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
