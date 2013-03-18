<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<?php
	$sitewide_hover_color = get_option('sitewide_hover_color');
	$padding_top_text_header = get_option('padding_top_text_header');
	$search_bar_top = get_option('search_bar_top');
	$search_bar_top_bg_color = get_option('search_bar_top_bg_color');
	$page_container_shadow = get_option('page_container_shadow');
	$page_container_color_transparent = get_option('page_container_color_transparent');
	$page_container_color = get_option('page_container_color');
?>
<style>
	.site-header h1 a:hover, .site-header h2 a:hover { color: <?php echo $sitewide_hover_color; ?>; }
	<?php 
		if ($padding_top_text_header){ ?>
			.site-header h1 { padding-top: 20px; }
	<?php } ?>
	<?php 
		if ($search_bar_top){ ?>
			#searchsubmittop { background-color: <?php echo $search_bar_top_bg_color; ?>; }
	<?php } ?>
	<?php 
		if (!$page_container_shadow){ ?>
		@media screen and (min-width: 960px) {
			body .site {
				box-shadow: none;
			}
		}
	<?php } ?> 	
	<?php 
		if ($page_container_color_transparent){ ?>
		.site {
			background-color: transparent;
		}
	<?php } else { ?>
	.site {
		background-color: <?php echo $page_container_color; ?>;
	}
	<?php } ?>
	
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
		
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header_image"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
		
		<?php if ($search_bar_top) { ?>
		<form role="search" method="get" id="searchformtop" action="<?php bloginfo( 'home' ); ?>">
			<div><label class="screen-reader-text" for="s">Search for:</label>
			<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="stop">
			<input type="submit" id="searchsubmittop" value="Search">
			</div>
		</form>
		<?php } ?>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="main" class="wrapper">