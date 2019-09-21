<?php
/*
  Template Name: Front Page
*/

// ACF Variables
$main_image                              = get_field('main_image');
$contact_form_shortcode                  = get_field('contact_form_shortcode');

// Social media
$instagram_url                           = get_field('instagram_url');
$facebook_url                            = get_field('facebook_url');
$youtube_url                             = get_field('youtube_url');

// GALLERY
$gallery_shortcode                       = get_field('gallery_shortcode');

// ABOUT
$about_header                            = get_field('about_header');
$about_text                              = get_field('about_text');
$about_image                             = get_field('about_image');

// RESUME
$special_skills                          = get_field('special_skills');
$download_resume_link                    = get_field('download_resume_link');

// VIDEOS
$featured_video                          = get_field('featured_video');
$video_2                                 = get_field('video_2');
$video_3                                 = get_field('video_3');

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <!-- Home -->
      <section id="hero" class="hero is-fullheight">
        <a name="home"></a>
        <div class="hero-body">
          <div class="container">
            <div id="hero-headshot">
              <?php if (!empty($main_image)): ?>
                <img src="<?php echo($main_image['url']) ?>" alt="<?php echo($main_image['alt'])?>">
              <?php endif; ?>
            </div>
            <div class="hero-site-info">
              <div class="name-container">
                <h1 id="site-name">
                  <div class="name-line">
                    <div>
                      Stephanie
                    </div>
                  </div>
                  <div class="name-line">
                    <div>
                      VanAlstine
                    </div>
                  </div>
                  
                </h1>
              </div>
              
              <h3><?php echo(get_bloginfo('description')) ?></h3>
            </div>
          </div>
        </div>
      </section><!-- HOME END -->

      <!-- Gallery -->
      <section id="gallery">
        <div class="container">
          <div class="gallery">
          <?php
            echo do_shortcode($gallery_shortcode);
          ?>
          </div>
          <div class="gallery-cta"> 
            <button class="btn btn-primary">Gallery</button>
          </div>
          
        </div>
        
      </section><!-- GALLERY END -->

      <!-- About -->
      <section id="about">
        <div class="container">
          
          <div class="about-img">
            <?php if(!empty($about_image)): ?>
              <img src="<?php echo($about_image['url']); ?>" alt="<?php echo($about_image['alt']); ?>">
            <?php endif; ?>
          </div>
          <div class="about-text-container">
            <h1>
              <?php echo($about_header); ?>
            </h1>
            <p>
              <?php echo($about_text); ?>
            </p>
            <a href="#contact" class="btn btn-primary">Contact Me</a>
          </div>
        </div>
      </section><!-- ABOUT END-->

      <!-- Resume -->
      <section id="resume">
        <div class="container">
          <h1>Resume</h1>

          <div class="resume-details-container">
            <!-- Experience -->
            <div class="resume-container">
              <h2>Experience</h2>
              <div class="experience-list">
                <div class="experience-category">
                  <h4>Theater</h4>
                  <div class="experience-list-item">
                    <div class="list-item-title">
                      Show Title
                    </div>
                    <div class="list-item-details">
                      Role Name | Production Company | 2019
                    </div>
                  </div>
                  <div class="experience-list-item">
                    <div class="list-item-title">
                      Show Title
                    </div>
                    <div class="list-item-details">
                      Role Name | Production Company | 2019
                    </div>
                  </div>
                  <div class="experience-list-item">
                    <div class="list-item-title">
                      Show Title
                    </div>
                    <div class="list-item-details">
                      Role Name | Production Company | 2019
                    </div>
                  </div>
                </div>
                <div class="experience-category">
                  <h4>TV/Film</h4>
                  <div class="experience-list-item">
                    <div class="list-item-title">
                      Show Title
                    </div>
                    <div class="list-item-details">
                      Role Name | Production Company | 2019
                    </div>
                  </div>
                  <div class="experience-list-item">
                    <div class="list-item-title">
                      Show Title
                    </div>
                    <div class="list-item-details">
                      Role Name | Production Company | 2019
                    </div>
                  </div>
                </div>
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

      <!-- Videos -->
      <section id="videos">
        <div class="container">
          <div class="video-grid">
            <div class="video-item">
              <iframe width="100%" height="100%" src="<?php echo($featured_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="height: 100%;" allowfullscreen></iframe>
            </div>
            <div class="video-item">
              <iframe width="100%" height="100%" src="<?php echo($video_2); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="height: 100%;" allowfullscreen></iframe>
            </div>
            <div class="video-item">
              <iframe width="100%" height="100%" src="<?php echo($video_3); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="height: 100%;" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </section><!-- VIDEOS END -->

      <!-- Upcoming -->
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
              if($appearances_loop->have_posts()) {
              while($appearances_loop->have_posts()) : $appearances_loop->the_post();
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
            <?php 
              endwhile; 
            } else {
            ?>
              <div class="appearance-container">
                <div class="appearance-date">
                </div>
                <div class="appearance-name">
                  Check Back Soon for upcoming shows!
                </div>
                <div class="appearance-cta">
                </div>
              </div>

            <?php } ?>

          </div>
        </div>
      </section><!--UPCOMING END -->

      <!-- Instagram Feed -->
      <section id="follow-on-instagram">
        <div class="container">
          <div class="social-menu-item">
            <a href="<?php echo($instagram_url); ?>" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
          <div class="gallery-grid">
            <?php echo do_shortcode('[instagram-feed]'); ?>
          </div>
          
        </div>
      </section><!-- INSTAGRAM END -->

      <!-- Contact -->
      <section id="contact">
        <div class="container">
          <div class="contact-header">
            <h1>
              Contact
            </h1>
            <div class="social-container">
              <div class="social-menu-item">
                <a href="<?php echo($instagram_url); ?>" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
              <div class="social-menu-item">
                <a href="<?php echo($facebook_url); ?>" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </div>
              <div class="social-menu-item">
                <a href="<?php echo($youtube_url); ?>" target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </div>
            </div>
          </div>
          
          <div class="contact-info-container">
            <div>
              <h3>Header</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos mollitia repudiandae, amet nisi non?</p>
            </div>
            <div>
              <div class="contact-form">
                <?php echo do_shortcode($contact_form_shortcode); ?>
              </div>
            </div>
          </div>
        
        </div>
      </section><!-- CONTACT END -->

      <div id="scroll-to-top">
        <button>
          <i class="fas fa-angle-up"></i>
        </button>
      </div>

      <!-- Social -->
      <aside id="social-menu">
        <div class="container">
          <div class="social-menu">
            <?php if($instagram_url) { ?>
              <div class="social-menu-item">
                <a href="<?php echo($instagram_url); ?>" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            <?php } ?>
            <?php if($facebook_url) { ?>
              <div class="social-menu-item">
                <a href="<?php echo($facebook_url); ?>" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </div>
            <?php } ?>
            <?php if($youtube_url) { ?>
              <div class="social-menu-item">
                <a href="<?php echo($youtube_url); ?>" target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </aside>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
