<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<title>Joyce N Ho</title>
		<meta name="Description" content="Hong Kong born, Australian designer, based in New York City">
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdn.plyr.io/3.5.2/plyr.css" />
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="shortcut icon" href="">
		<?php wp_head(); ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-43841868-1"></script>
		<script>
		 window.dataLayer = window.dataLayer || [];
		 function gtag(){dataLayer.push(arguments);}
		 gtag('js', new Date());
		 gtag('config', 'UA-43841868-1');
		</script>
	</head>
	<body <?php body_class(); ?> id="body" data-barba="wrapper">
	<!-- <?php if ( is_front_page() ) : ?>
	<span id="preload">
		<img class="noclick" src="<?php the_field('loading_animation_gif', 'option'); ?>">
	</span>

	<?php else: ?>
	<span id="preload">
		<img class="noclick" src="<?php the_field('loading_animation_gif', 'option'); ?>">
	</span>
	<?php endif; ?> -->
	<header class="site-header" id="navbar" role="banner">
		<div>
			<a href="<?php echo esc_url( home_url( '/index' ) ); ?>" rel="index">Index</a>
		</div>
		<div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">JN.H</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Joyce N. Ho</a>
		</div>
		<div>
			<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" rel="about">About</a>
		</div>
	</header>
	<main id="barbadook" data-barba="container" data-barba-namespace="<?php if ( is_single() ) {
   echo 'single';
 } ?>">
