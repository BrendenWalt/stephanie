<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stephanie_VanAlstine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bulma.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/fonts/css/all.min.css">

	<link href="https://fonts.googleapis.com/css?family=Muli:300,600,800|Oswald:700&display=swap" rel="stylesheet">
  <!-- jQuery -->
  <script src="<?php bloginfo('stylesheet_directory')?>/assets/js/jquery-3.4.1.min.js" defer></script>
  <!-- Javascript -->
	<script src="<?php bloginfo('stylesheet_directory')?>/assets/js/scripts.js" defer></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stephanie-vanalstine' ); ?></a>

	<header>
		<div class="menu-wrap">
			<div class="menu-container">
				<?php 
					wp_nav_menu( array(
						'theme_location'	=> 'primary',
						'container'				=> 'nav',
						'container_class'	=> 'navbar-collapse navbar closed',
						'menu_class'			=> 'nav navbar-nav navbar-right'
					))
				?>
			</div>
			<div id="nav-icon3" class="ham-container">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		
		
	</header>

	<div id="content" class="site-content">
		<!-- Fixed social bar -->
		<aside>
		
		</aside>
