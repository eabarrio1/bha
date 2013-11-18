<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>
<?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?>
</title>
<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
<?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
<?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
<?php /* Remove the Less Framework CSS line to not include the CSS Reset, basic styles/positioning, and Less Framework itself */?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/slicknav.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/lessframework.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<?php wp_head(); ?>
<script src="<?php bloginfo( 'template_url' ); ?>/js/dropdown.js"></script>
</head>

<body>
<div id="bluetexture">
<div id="leaves">

<!--.none-->
<header>
  <div class="container">
    <div id="logo"><a href="<?php bloginfo('url'); ?>/">Her Dream Vacation</a> </div>
  </div>
  <div id="greenbar">
    <div class="container"> New Agents: (855) 596-2157  •  Existing Agents: (855) 596-2158 <span class="text"> |  Get a CPL indication within 24 hours! </span><a href="http://www.facebook.com/pages/Beacon-Hill-Associates-Inc/113143938836" title="Be Our Friend" target="_blank"><img  src="<?php bloginfo('template_url'); ?>/images/icon_facebook.png"/></a>  <a href="http://twitter.com/BeaconHillAssoc" title="Follow Me" target="_blank"><img  src="<?php bloginfo('template_url'); ?>/images/icon_twitter.png"/></a>  <a href="http://www.linkedin.com/companies/699494/Beacon%20Hill%20Associates,%20Inc" title="Be Our Friend" target="_blank"><img  src="<?php bloginfo('template_url'); ?>/images/icon_linkedin.png"/> </a><a href="http://www.environmentalinsuranceblog.com" title="Read Our Blog" target="_blank"><img  src="<?php bloginfo('template_url'); ?>/images/icon_blog.png"/></a><a id="p_lt_zoneGlobalRss_globalNewsRSSFeed_lnkFeedImg" class="FeedLink" href="http://www.b-h-a.com/Home.aspx?rss=news" target="_blank"> <img  src="<?php bloginfo('template_url'); ?>/images/icon_rss.png"/></a> </div>
  </div>
  <div id="navybar">
    <div class="container">
      <form class="searchform" action="<?php bloginfo('url'); ?>/" method="get">
        <input id="s" type="text" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" value="" name="s">
      </form>
      <div id="nav">
        <?php wp_nav_menu( array('menu' => 'main',	'container'       => 'nav','container_class' => '','container_id'    => '', 'menu_class'      => '', 	'items_wrap'      => '<ul>%3$s</ul>',)); ?>
      </div>
      <div id="mobmenu"><a href="#menu" class="menu-link">Menu</a>
        <?php wp_nav_menu( array('menu' => 'main',	'container'       => 'nav','container_class' => 'mob-menu','container_id'    => 'menu1', 'menu_class'      => '', 	'items_wrap'      => '<ul>%3$s</ul>',)); ?>
      </div>
      <div style="clear:both;"></div>
    </div>
  </div>
  <!--container--->
  
  <?php if ( ! dynamic_sidebar( 'Header' ) ) : ?>
  <!-- Wigitized Header -->
  <?php endif ?>
</header>
<!--#header--> 

