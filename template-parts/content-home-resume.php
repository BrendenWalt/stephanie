<?php
  $special_skills                          = get_field('special_skills');
  $download_resume_link                    = get_field('download_resume_link');
?>

<!-- Resume -->
<section id="resume">
  <div class="container">
    <h1>Resume</h1>

    <div class="resume-details-container">
      <!-- Experience -->
      <div class="resume-container">
        <h2>Experience</h2>
        <div class="experience-list">
          <?php
            $theater_loop = new WP_Query(array(
              'post_type'  => 'experience',
              'category_name' => 'theater',
              'orderby'    => 'date',
              'order'      => 'DESC'
              
            ));
            if($theater_loop->have_posts()) :
            
          ?>
          <div class="experience-category">
            <h4>Theater</h4>
            <?php 
              while($theater_loop->have_posts()) : $theater_loop->the_post()
            ?>
            <div class="experience-list-item">
              <div class="list-item-title">
                <?php the_title(); ?>
              </div>
              <div class="list-item-details">
                <?php echo get_field('detail_1'); ?> | <?php echo get_field('detail_2'); ?> | <?php echo get_field('detail_2'); ?>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
          <?php wp_reset_postdata(); // reset the query ?>
          
          <?php 
            $film_loop = new WP_Query( array(
              'post_type'     => 'experience',
              'category_name' => 'tv-film',
              'orderby'       => 'date',
              'order'         => 'DESC'
            ));

            if($film_loop -> have_posts()) :
          ?>
          <div class="experience-category">
            <h4>TV/Film</h4>
            <?php 
              while($film_loop -> have_posts()) : $film_loop -> the_post()
            ?>
            <div class="experience-list-item">
              <div class="list-item-title">
                <?php the_title(); ?>
              </div>
              <div class="list-item-details">
                <?php echo get_field('detail_1'); ?> | <?php echo get_field('detail_2'); ?> | <?php echo get_field('detail_2'); ?>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); // reset the query ?>
        </div>
      </div>

       <!-- Education -->
       <div class="resume-container">
        <h2>Education</h2>
        <div class="education-list">
          <?php
            $education_loop = new WP_Query(array(
              'post_type' => 'resume_education',
              'orderby'   => 'post_id',
              'order'     => 'DESC'
            ));

            while($education_loop->have_posts()) : $education_loop->the_post()
          ?>
          <div class="education-item">
            <div class="education-title"><?php echo get_field('name_of_degree'); ?></div>
            <div class="education-detail"><?php echo get_field('name_of_school');?> | <?php echo get_field('graduation_year'); ?></div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); // reset the query ?>
        </div>
      </div>

      <!-- Special Skills -->
      <div class="resume-container">
        <h2>Special Skills</h2>
        <div class="skills-list">
          <div class="skills-item">
            <?php echo $special_skills; ?>
          </div>
        </div>
      </div>

    </div>
      
  </div>
    
  <!-- Banner -->
  <div class="resume-banner">
    <div>
      <h3>Download Full Resume</h3>
    </div>
    <div class="btn">
      <a href="<?php echo($download_resume_link); ?>" class="btn btn-secondary">Download</a>
    </div>
  </div>
  

</section><!-- RESUME END -->