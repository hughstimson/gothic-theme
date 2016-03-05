<!DOCTYPE html>
<head>
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 8]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta3)/IE8.js"></script>
	<![endif]-->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-8450480-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<?php wp_head(); ?>
</head>
<body>
<div class="row" id="banner">
	<div id="hughstimsonorg">
		<a href="<?php bloginfo('url'); ?>">
		<img width="63" height="32" src="<?php bloginfo('template_url'); ?>/images/flag.png" /><span id="hughstimson">hughStimson</span><span id="org">.org</span>
		</a>
	</div>
	<div id="siteNav">
		<a				
			<?php if (is_home()) { echo " id=\"current\""; } ?>
			href="<?php bloginfo('url'); ?>">blog</a>
		<a
			<?php if (is_page('projects')) { echo " id=\"current\""; } ?>
			href="<?php bloginfo('url'); ?>/projects">projects</a> 
		<a 
			<?php if (is_page('gallery')) { echo " id=\"current\""; } ?>
			href="<?php bloginfo('url'); ?>/photos">photos</a>
		<a 
			<?php if (is_page('about')) { echo " id=\"current\""; } ?>
			href="<?php bloginfo('url'); ?>/about">about</a>
	</div><!--siteNav-->
	<div class="clear"> </div>
</div><!--banner row-->
