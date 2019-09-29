<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Stephanie_VanAlstine
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'stephanie-vanalstine' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="image-404">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/404.jpg" alt="404 image" />
					</div>
					<a href="/">Back to home</a>
					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
