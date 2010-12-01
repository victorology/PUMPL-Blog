<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
	<?php if ( is_tag() ) {
			echo 'Tag Archive for &quot;'.$tag.'&quot; » '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(); echo ' Archive » '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; » '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'name' ); echo ' » '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found » '; bloginfo( 'name' );
		} else {
			echo wp_title( ' » ', false, right ); bloginfo( 'name' );
		} ?>
	</title>
	<!--
		Semi dynamic meta keywords and meta description. Google likes meta info that changes for each page.
		While these meta keywords are not ideal and the meta description could be better, they are better than nothing.
	-->
	<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php the_permalink() ?>" />
	<meta property="og:image" content="http://pumpl.com/images/pumpl_logo.png"/>
	<meta property="og:site_name" content="PUMPL"/>
	<meta property="og:app_id" content="170977086255854" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<!-- Loads jQuery if it hasn't been loaded already -->
	<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" media="all" href="http://pumpl.com/stylesheets/application.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_head(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-68188-6']);
	  _gaq.push(['_setDomainName', '.pumpl.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>

<body <?php body_class(); ?>>

<div class="container">

<div id="header">
	<?php if( is_front_page() || is_home() ) { ?>
		<h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
	<?php } else { ?>
		<h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h2>	
	<?php } ?>
	<div id="header_blogright">
		<div id="header_subscribe">구독하기:</div>
		<div id="header_twitter">
			<a href="http://twitter.com/pumpl" target="_blank">펌플 트위터</a>
		</div> <!-- #header_twitter -->
			<div class="header_divider"></div>
		<div id="header_facebook">
			<a href="http://www.facebook.com/pages/peompeul-PUMPL/104009903004026" target="_blank">펌플 페이스북</a>
		</div> <!-- #header_facebook -->
			<div class="header_divider"></div>
		<div id="header_gotopumpl">
			<a href="http://pumpl.com">펌플으로 가기</a>
		</div> <!-- #header_gotopumpl -->
	</div> <!-- #header_right -->
</div> <!-- #header -->