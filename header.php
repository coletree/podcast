<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>

<!-- meta数据 -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="两个人的时间手帐，两棵树的年轮轨迹"/>
<meta name="keywords" content="晓禾依树,coletree,电台,独立电台,网络电台,podcast,诗意生活,诗意栖居" />

<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no," />
<!--IOS7.1可以在上面viewport使用 minimal-ui减化safari的UI-->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="MobileOptimized" content="320">
<meta name="HandheldFriendly" content="True">
<meta name="apple-mobile-web-app-status-bar-style" content="white">


<!-- 网站图标 -->
<link href="http://www.coletree.com/favicon.ico" rel="shortcut icon">
<link href="apple-touch-icon.png" rel="apple-touch-icon">
<link href="apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
<link href="apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
<link href="apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon">

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!-- 其他外链 -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!-- <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/mmenu/css/jquery.mmenu.all.css" media="all"/>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/mmenu/css/extensions/jquery.mmenu.widescreen.css" media="all and (min-width: 1025px)" /> -->


<!-- 页面标题 -->
<title>
	<?php
	/*
	* Print the <title> tag based on what is being viewed.
	*/
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	// bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		// echo " | $site_description";
	?>
</title>


<?php // wordpress head functions ?>
<?php wp_head(); ?>
<?php // end of wordpress head ?>


</head>


<body <?php body_class(); ?>>

	<div id="container">

		<header class="header" role="banner">

			<div id="inner-header" class="wrap cf">

				<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
				<div class="site-branding">
					<h1 id="logo" class="h1 site-title">
						<a href="#container" rel="nofollow"><?php bloginfo('name'); ?></a>
					</h1>
				</div>

				<!-- Switch -->
				<div id="menuSwitchWrap" class="">
					<a id="menuSwitch" href="javascript:void(0)">&#9776;</a>
				</div>

				<div id="navMenuWrap">
					<nav role="navigation">
						<?php wp_nav_menu(array(
						'container' => false,                           // remove nav container
						'container_class' => 'menu cf',                 // class of container (should you choose to use it)
						'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
						'menu_class' => 'nav top-nav cf',               // adding custom nav class
						'theme_location' => 'main-nav',                 // where it's located in the theme
						'before' => '',                                 // before the menu
	    				'after' => '',                                  // after the menu
	    				'link_before' => '',                            // before each link
	    				'link_after' => '',                             // after each link
	    				'depth' => 0,                                   // limit the depth of the nav
						'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
					</nav>
				</div>

			</div>

		</header>
