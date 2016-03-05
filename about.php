<?php
/*
Template Name: about
*/
?>
<?php get_header(); ?>
<div class="row">
	<div class="sideBar">
		<div class="pageNav">
			<h1><a href="#blurb">Blurb</a></h1>
			<h1><a href="#work">Work</a></h1>
			<h1><a href="#academic">Academic</a></h1>
			<h1><a href="#website">Website</a></h1>
<!--			<h1><a href="#flag">Flag</a></h1> -->
		</div><!--pageNav--> 
	</div><!--sidebar-->
	<div class="sideBar" id="contact">
		<a href="http://hughstimson.org/photos/sprucelake/self+portrait+with+alpine.jpg.php" alt="mugshot" title="self portrait with alpine"><img src="<?php bloginfo('template_url'); ?>/images/alpineprofile.jpg" /></a>
		<p><a href="mailto:hugh@hughstimson.org">hugh@hughstimson.org</a></p>
		<p>604.440.1989 (new!)</p>
		<p><a href="https://twitter.com/#!/hughstimson">@hughstimson</a>
		<p>1155 Union St<br /> 
		Vancouver BC<br />
		V6A 2C7</p>	
	</div><!--sideBar-->
	<div class="contentWithDoubleSidebar"> 
		<h2 id="blurb">Blurb</h2>
		<div class="text">
			<p>I'm an <a href="http://hughstimson.com">environmental GIS consultant</a> in Vancouver, Canada. I often collaborate with <a href="http://geomemes.com/">Geomemes Research</a> and <a href="http://mcallister-research.com/">McAllister Opinion Research</a>, and I'm interested in working with your gung-ho conservation organization.</p>
						
			<p>I grew up in a former shipyard town on the shores of Georgian Bay in Ontario, in the crook of the Niagara Peninsula. Most of my family still live in there.</p>
		</div>
		<h2 id="work">Work</h2>	
		<div class="text">						
			<p>I have previously worked at the <a href="http://cstars.ucdavis.edu">University of California at Davis</a> and the <a href="http://nationalzoo.si.edu/scbi/ConservationGIS/">Smithsonian Institution</a>, where we used sensors on satellites and planes to investigate the environmental status of landscapes. In my other life in the service of the logging industry, I have planted more than a million trees in the majestic clearcuts of the Canadian interior.</p>
		</div>
		<h2 id="academic">Academic</h2>
		<div class="text">
			<p>I have an MSc. from the <a href="http://www.snre.umich.edu/degree_programs/environmental_informatics/overview">Environmental Informatics program</a> at the <a href="http://snre.umich.edu">University of Michigan</a>, where my <a href="http://hughstimson.org/projects/drylandpattern/">Masters research</a> was on the self-organization of vegetation in the American drylands.</p>
			
			<p>I also have a <a href="http://www.uoguelph.ca/registrar/calendars/undergraduate/current/c10/c10bsc-ecol.shtml">BSc. in Ecology</a> from the <a href="http://www.uoguelph.ca/ib/">University of Guelph</a>. I miss ecology whenever I'm not doing it.</p>
		</div>
		<h2 id="website">Website</h2>
		<div class="text">
			<p>This is a <a href="http://wordpress.org">Wordpress</a> site with a custom theme developed with the help of a heap of different WP nerds on WP forums. It's a new site, and I'll add more creation details soon.</p>
		</div>
	</div>
</div><!--row-->
<?php get_footer(); ?>