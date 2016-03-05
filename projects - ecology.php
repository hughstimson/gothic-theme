<?php
/*
Template Name: projects - ecology
*/
?>
<?php get_header(); ?>
<div class="row">
	<div class="sideBar">
			<h1 class="backLink"><a href="<?php bloginfo('url'); ?>/projects">&larr; back to projects</a></h1>
	</div><!--sideBar-->
	<?php
	query_posts('post_type=page&meta_key=topic&meta_value=ecology'); 
	 while (have_posts()) : the_post();
	?>
	<div class="contentWithSidebar project">
		<?php the_post_thumbnail(); ?>
		<div class="description">
			<h2>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>				 
			<div class="status">
				<?php the_time('M Y'); ?> -
				<?php
						$mykey_values = get_post_custom_values('status');
						foreach ( $mykey_values as $key => $value ) {
							echo "$value"; 
						}
				?> &#183; 
				<ul class="topics">
					<?php
						$mykey_values = get_post_custom_values('topic');
						foreach ( $mykey_values as $key => $value ) {
							echo "<li>$value, </li>"; 
						}
					?>
				</ul>
			</div>
			<?php the_excerpt(); ?>
			</div><!--descrtiption-->
		</div><!-- project -->	
	<?php endwhile; ?>
	</div>	
	<div class="contentWithDoubleSidebar" id="postsNav">
		<h1><?php posts_nav_link(' &#183; ', '&larr; newer projects', 'older projects &rarr;'); ?></h1>
	</div>
</div><!--row-->
<?php get_footer(); ?>
