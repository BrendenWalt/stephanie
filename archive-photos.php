<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stephanie_VanAlstine
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main post-archive">

			<!-- Page header -->
			<section class="hero">
				<div class="hero-body">
					<div class="container">
						<h1>Photos<h1>
					</div>
				</div>
			</section>

			<div class="container">

			<?php if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', 'archive-photos', get_post_type() );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
