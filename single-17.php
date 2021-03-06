<?php get_header(); ?>
<div class="row">
	<div class="sideBar">		
			<h1 class="backLink"><a href="<?php bloginfo('url'); ?>"><span class="navArrow">&larr;</span> projects</a></h2>
	</div><!--sideBar-->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<div class="contentWithSidebar post" id="post-<?php the_ID(); ?>">
					<div class="metadata">
						<div class="bar"></div>
						status: <span class="status">
							<?php
								$mykey_values = get_post_custom_values('status');
								foreach ( $mykey_values as $key => $value ) {
									echo "$value"; 
								}
							?>
						</span><br />
						updated: <?php the_time('j M Y') ?>
						<ul class="topics">
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
