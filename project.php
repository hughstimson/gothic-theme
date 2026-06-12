<?php
/*
Template Name: project
*/
?>
<?php get_header(); ?>
<div id="main" class="row project-page">
	<div class="sidebar">
			<h1 class="back-link"><a href="<?php bloginfo('url'); ?>/projects"><span class="nav-arrow">&larr;</span> projects</a></h1>
	</div><!--side-bar-->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<div class="meta">
						<div class="bar"></div>
						status: <span class="status">
							<?php
								$mykey_values = get_post_custom_values('status');
								foreach ( $mykey_values as $key => $value ) {
									echo "$value";
								}
							?>
						</span><br />
						updated <?php the_time('j M Y') ?>
						<ul class="topics">
						<?php
							$mykey_values = get_post_custom_values('topic');
							foreach ( $mykey_values as $key => $value ) {
								echo "<li>$value</li>";
							}
						?>
						</ul>
						<div>
							<?php edit_post_link('edit', '', ''); ?>
						</div>
					</div><!--metadata-->
					<div class="content">
						<h2>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="text">
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
</div><!--row-->
<?php get_footer(); ?>
