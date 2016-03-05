<?php
/*
Template Name: hotinhere-single
*/
get_header(); ?>
<div class="row" id="radioHeader">
	<img id="hotinhereStaff" src="<?php bloginfo('template_url'); ?>/images/ihihstaff.jpg" />
	<div class="contentWithDoubleSidebar">
		<div id="radioTitle">It's Hot In Here</div>
		<h1><a href="http://wcbn.org">WCBN</a>'s environmental talk show</h1>
		<p>
			noon to 1pm alternate Mondays<br />
			<a href="http://feeds.feedburner.com/hotinhere"><img src="http://hughstimson.org/files/feed.png" id="feed">podcast</a> / 88.3fm / <a href="http://wcbn.org">wcbn.org</a><br />
			<a href="mailto:hotinhere.radio@gmail.com">hotinhere.radio@gmail.com</a>
		</p>
		</p>
	</div>		
</div> <!--radioHeader -->
<div class="row">
	<div class="sideBar" id="hostProfiles">
		<h1>
			<a href="<?php bloginfo('url'); ?>/hotinhere"><h1>&larr; all episodes</h1></a>
		</h1>
		<p> </p>
		<h1>your hosts:</h1>
		<p>host profiles will show up here real soon</p>
		<h1 class="backLink">correspondants:</h1>
		<p>likewise</p>
		<h1>engineers:</h1>
		<p>likewise</p>
		<h1>alumni:</h1>
		<p>likewise</p>
	</div><!--sideBar-->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<div class="contentWithSidebar post" id="post-<?php the_ID(); ?>">
					<div class="metadata">
						<div class="bar"></div>
						<div class="date">
							<?php the_time('j M Y') ?>
						</div>
						<ul class="topics">
						<?php
						foreach((get_the_category()) as $category) {
							 if ($category->cat_name != 'Uncategorized') {echo '<a href="'. get_category_link( $category->term_id ).'" title="' . sprintf( __( "View all posts in %s" ), $category->name ).'"'.'><li>'.$category->name.'</li></a>'; } }
						?>
						</ul>
						<div class="commentsLink">
							<?php comments_popup_link ('comment', '<span class="blue">1</span> comment', '<span class="blue">%</span> comments', ''); ?>
						</div>
						<div>
							<?php edit_post_link('edit', '', ''); ?>
						</div>
					</div><!--metadata-->
					<div class="entry">
						<h2>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="text">
							<?php the_content('Read the rest of this entry &raquo;'); ?>
						</div>
					</div><!-- entry -->
					<?php trackback_rdf(); ?>
			</div><!-- post -->
			<?php comments_template(); ?>
		<?php endwhile; else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<!-- <?php include (TEMPLATEPATH . "/searchform.php"); ?> -->
	<?php endif; ?>
</div><!--row-->
<?php get_footer(); ?>
