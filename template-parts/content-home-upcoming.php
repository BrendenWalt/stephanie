
<section id="upcoming-appearances">
  <div class="container">
    <h1>Upcoming Appearances</h1>
    <div class="appearances-container">
      <?php
        $appearances_loop = new WP_Query( array(
          'post_type'   => 'upcoming_appearances',
          'orderby'     => 'post_id',
          'order'       => 'DESC',
          'posts_per_page' => '4'
        ));
        if($appearances_loop->have_posts()) : while($appearances_loop->have_posts()) : $appearances_loop->the_post();
      ?>
        <div class="appearance-container">
          <div class="appearance-date">
            <?php 
              $date = get_field('appearance_date', false, false); 
              $date = new DateTime($date);
            ?>
            <?php echo $date->format('M'); ?> <span><?php echo $date->format('j'); ?></span>
            <?php 
              if(get_field('appearance_end_date')) {
                $endDate = get_field('appearance_end_date', false, false);
                $endDate = new DateTime($endDate);
              
            ?>
              - <?php echo $endDate->format('M'); ?> <span><?php echo $endDate->format('j'); ?></span>
            <?php } ?>
          </div>
          <div class="appearance-text-container">
            <div class="appearance-name">
              <?php the_title(); ?>
            </div>
            <div class="appearance-details">
              <?php if(!empty(get_field('appearance_details'))) :
                  echo get_field('appearance_details');
              endif; ?>
            </div>
          </div> 
          
          <div class="appearance-cta">
            <a href="<?php the_field('appearance_link'); ?>" class="btn btn-secondary">Learn More</a>
          </div>
        </div>
      <?php endwhile; else : ?>
        <div class="appearance-container">
          <div class="appearance-date">
          </div>
          <div class="appearance-name">
            Check Back Soon for upcoming shows!
          </div>
          <div class="appearance-cta">
          </div>
        </div>

        <?php endif; ?>
      <?php wp_reset_postdata(); // reset the query ?>
    </div>
  </div>
</section>