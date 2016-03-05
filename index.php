<?php get_header(); ?>
<div class="row">
	<div class="sideBar">
		<div class="pageNav">
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			<!-- <h1>Archive</h1> -->
			<h1><a href="<?php bloginfo('url'); ?>/feed">Feed</a></h1>
			<!-- <h1><img src="<?php bloginfo('template_url'); ?>/images/triangleRight.png" />Topics</h1> -->
		</div>
	</div><!--sideBar-->
	<?php query_posts($query_string . '&cat=-14,-25,-71'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- if it's a tweet display this way - except I removed tweets in the arguments in the above query, because I don't like them anymore -->
		<?php if ( in_category('71') ) { ?>
			<div class="contentWithSidebar post tweet" id="post-<?php the_ID(); ?>">
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
					<div>
						<?php edit_post_link('edit', '', ''); ?>
					</div>
				</div><!--metadata-->
				<div class="entry">
					<div class="text">
						<a href="http://twitter.com/#!/hughstimson" class="tweetBird"><img src="<?php bloginfo('template_url'); ?>/images/tweet.png" class="tweetBird" /></a>
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
				</div><!-- entry -->
				<?php trackback_rdf(); ?>
				<div class="commentsThread">
					<?php comments_template(); ?>
				</div>
			</div><!-- post -->
		<!-- for all other (non-tweet) posts display the normal way -->
		<?php } else { ?>
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
				<div class="commentsThread">
					<?php comments_template(); ?>
				</div>
			</div><!-- post -->
		<?php } ?>
	<?php endwhile; else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<!-- <?php include (TEMPLATEPATH . "/searchform.php"); ?> -->
	<?php endif; ?>
	<div class="contentWithDoubleSidebar" id="postsNav">
		<h1><?php posts_nav_link(' &#183; ', '<span class="navArrow">&larr;</span> newer posts', 'older posts <span class="navArrow">&rarr;</span>'); ?></h1>
	</div>
</div><!--row-->
<?php get_footer(); ?>
