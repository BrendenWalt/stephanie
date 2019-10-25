<?php
/*
  Template Name: Front Page
*/

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <!-- content -->
      <?php get_template_part('template-parts/content','home-hero'); ?>
      <?php get_template_part('template-parts/content','home-gallery'); ?>
      <?php get_template_part('template-parts/content','home-about'); ?>
      <?php get_template_part('template-parts/content','home-resume'); ?>
      <?php get_template_part('template-parts/content','home-videos'); ?>
      <?php get_template_part('template-parts/content','home-upcoming'); ?>
      <?php get_template_part('template-parts/content','home-ig-feed'); ?>
      <?php get_template_part('template-parts/content','home-contact'); ?>
      
      <!-- social -->
      <?php get_template_part('template-parts/sticky','social'); ?>

      <!-- Scroll button -->
      <?php get_template_part('template-parts/sticky','scroll'); ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
