<?php /* Template Name: retro-landing */ ?>
<html>
<head>
    <title>hughstimson.org</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="<?php bloginfo('template_url'); ?>/lib/bootstrap-4.0.0-beta.2-dist/css/bootstrap-grid.min.css"
          type="text/css" media="screen">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
</head>
<body>
<div class="container" id="retro-container">
    <div class="row">
        <div class="col" id="retro-masthead-div">
            <h1 id="retro-title-h1">hughstimson.org</h1>
            <img src="<?php bloginfo('template_url'); ?>/images/star.70.png"/>
            <p>
                <a href="https://mstdn.ca/@hughstimson" rel="me">mastodon</a> |
                <a href="twitter/">twitter archive</a> | 
                <a href="<?php bloginfo('url'); ?>/blog">weblog</a>

            </p>
        </div>
    </div>
</div>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-8450480-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
<?php wp_head(); ?>
</body>
</html>







