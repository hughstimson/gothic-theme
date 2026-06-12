<?php
/*
Template Name: hotinhere-single
*/
get_header(); ?>
<div id="radio-header">
	<img id="hotinhere-staff" src="<?php bloginfo('template_url'); ?>/images/ihihstaff.jpg" />
	<div id="radio-header-text">
		<div id="radio-title">It's Hot In Here</div>
		<h1><a href="http://wcbn.org">WCBN</a>'s environmental talk show</h1>
		<p>
			noon to 1pm alternate Mondays<br />
			<a href="http://feeds.feedburner.com/hotinhere"><img src="http://hughstimson.org/files/feed.png" id="feed">podcast</a> / 88.3fm / <a href="http://wcbn.org">wcbn.org</a><br />
			<a href="mailto:hotinhere.radio@gmail.com">hotinhere.radio@gmail.com</a>
		</p>
	</div>		
</div> <!--radio-header -->
<div id="main">
	<div class="sidebar" id="host-profiles">
		<h1 class="back-link"><a href="<?php bloginfo('url'); ?>/hotinhere"><span class="nav-arrow">&larr;</span> all episodes</a></h1>
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
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			<?php get_template_part( 'template-parts/post', null, array( 'meta' => 'date-only' ) ); ?>
			<?php get_template_part( 'template-parts/comment-thread' ); ?>
		<?php endwhile; else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<!-- <?php include (TEMPLATEPATH . "/searchform.php"); ?> -->
	<?php endif; ?>
</div><!--row-->
<?php get_footer(); ?>
