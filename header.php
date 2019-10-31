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

	<link href="https://fonts.googleapis.com/css?family=Muli:300,600,800|Oswald:700&display=swap" rel="stylesheet">
  
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stephanie-vanalstine' ); ?></a>

	<header>
		<?php if(is_page_template('page-main.php')) { ?>
		<div class="menu-wrap">
			<div class="menu-logo">

			</div>
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
		<?php } else { ?>
			<div class="menu-wrap alt-page-menu">
				<div class="to-home spacer">
					<a href="/">Home</a>
				</div>
				<div class="menu-logo">
					<a href="/"><div><span>Stephanie</span></div><div><span>VanAlstine</span></div></a>
				</div>
				<div class="spacer"></div>
				<!-- <div class="menu-container"> -->
					<?php 
						// wp_nav_menu( array(
						// 	'theme_location'	=> 'primary',
						// 	'container'				=> 'nav',
						// 	'container_class'	=> 'navbar-collapse navbar closed',
						// 	'menu_class'			=> 'nav navbar-nav navbar-right'
						// ))
					?>
				<!-- </div> -->
				<!-- <div id="nav-icon3" class="ham-container">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div> -->
			</div>
		<?php } ?>
		
		
	</header>

	<div id="content" class="site-content">
		<!-- Fixed social bar -->
		<aside>
		
		</aside>
