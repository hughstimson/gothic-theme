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
				<li><a href="<?php bloginfo('url'); ?>/projects/cartography">cartography</a></li>
				<li><a href="<?php bloginfo('url'); ?>/projects/complex-systems">complex systems</a></li>
				<li><a href="<?php bloginfo('url'); ?>/projects/ecology">ecology</a></li>
				<li><a href="<?php bloginfo('url'); ?>/projects/modeling">modeling</a></li>
				<li><a href="<?php bloginfo('url'); ?>/projects/radio">radio</a></li>
				<li><a href="<?php bloginfo('url'); ?>/projects/remote-sensing">remote sensing</a></li>
				<li><a href="<?php bloginfo('url'); ?>/projects/web">web</a></li>
			</ul>
			<p>Some projects cross-posted at <a href="http://hughstimson.com/projects">hughstimson.com</a>.</p>
	</div><!--sideBar-->
	<!-- query from diceone http://wordpress.org/support/topic/297090#post-1186292 -->
	<?php the_ID(); ?>
	<?php $parent = $post->ID; ?>
	<?php
	query_posts('post_type=page&meta_key=topic&posts_per_page=-1'); 
	 while (have_posts()) : the_post();
	?>
	<div class="contentWithSidebar project">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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
							echo "$value, </li>"; 
						}
					?>
				</ul>
			</div>
			<?php the_excerpt(); ?>
			</div><!--descrtiption-->
		</div><!-- project -->	
	<?php endwhile; ?>
	<div class="contentWithDoubleSidebar" id="postsNav">
		<h1><?php posts_nav_link(' &#183; ', '&larr; newer projects', 'older projects &rarr;'); ?></h1>
	</div>
</div><!--row-->
<?php get_footer(); ?>
