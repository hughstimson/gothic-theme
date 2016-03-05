<?php
/*
Template Name: projects
*/
?>
<?php get_header(); ?>
<div class="row">
	<div class="sideBar">
			<h1>Topics</h1>
			<ul class="topics">
<!--				<?php wp_list_categories('title_li=&child_of=17'); ?> -->
			</ul>
	</div><!--sideBar-->
	<?php query_posts('cat=17'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="contentWithSidebar project">
		<?php the_post_thumbnail(); ?>
		<div class="description">
			<h2>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>				 
			<ul class="topics">
				<li><?php the_time('M Y'); ?>: </li>
				<?php
				$igc=0;
				foreach((get_the_category()) as $category) {
					 if ($category->cat_name != 'project') {
				if($igc != 0) { echo ', '; }; $igc++;
					 echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "show %s projects" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
				}
				}
				?>
			</ul>
			<?php the_excerpt(); ?>
			</div><!--descrtiption-->
		</div><!-- project -->
		<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	<div class="contentWithDoubleSidebar" id="postsNav">
		<h1><?php posts_nav_link(' &#183; ', '&larr; newer posts', 'older posts &rarr;'); ?></h1>
	</div>
</div><!--row-->
</body>
</html>
