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

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <!-- Home -->
      <section class="hero is-fullheight">
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
            <div class="hero-bg"></div>
          </div>
        </div>
      </section><!-- HOME END -->

      <!-- Gallery -->
      <section id="gallery">
        <div class="container">
          <div class="gallery">
          <?php
            if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'home-page-gallery', 'slug' ); }
          ?>
            <!-- <div class="gallery-item">
              <img src="https://placekitten.com/500/250" alt="">
            </div>
            <div class="gallery-item">
              <img src="https://placekitten.com/500/250" alt="">
            </div>
            <div class="gallery-item">
              <img src="https://placekitten.com/500/250" alt="">
            </div>
            <div class="gallery-item">
              <img src="https://placekitten.com/550/700" alt="">
            </div>
            <div class="gallery-item">
              <img src="https://placekitten.com/500/250" alt="">
            </div>
            <div class="gallery-item">
              <img src="https://placekitten.com/500/250" alt="">
            </div>
            <div class="gallery-item">
              <img src="https://placekitten.com/500/250" alt="">
            </div> -->
            
          </div>
          <div class="gallery-cta"> 
            <button class="btn btn-primary">Gallery</button>
          </div>
          
        </div>
        
      </section><!-- GALLERY END -->

      <!-- About -->
      <section id="about">
        <div class="container">
          <div class="about-text-container">
            <h1>About Me</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quam mollitia doloribus, reprehenderit, eveniet voluptatum eaque necessitatibus illum nihil placeat rerum voluptates consequatur qui ratione. Ad voluptates deleniti voluptate pariatur, error hic nihil nesciunt esse doloremque, sequi in alias quod?</p>
            <button class="btn btn-primary">Contact Me</button>
          </div>
          <div class="about-img">
            <img src="https://placekitten.com/600/600" alt="">
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
            <!-- Special Skills -->
            <div class="resume-container">
              <h2>Special Skills</h2>
              <div class="skills-list">
                <div class="skills-item">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae esse odit dolorum accusamus consequuntur quidem fuga voluptate nulla assumenda. Dolorum!
                </div>
              </div>
            </div>
            <!-- Education -->
            <div class="resume-container">
              <h2>Education</h2>
              <div class="education-list">
                <div class="education-item">
                  <div class="education-title">Name of Degree Here</div>
                  <div class="education-detail">Name of School | 2012</div>
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
            <button class="btn btn-secondary">Download</button>
          </div>
          
          
        </div>
      </section><!-- RESUME END -->

      <!-- Videos -->
      <section id="videos">
        <div class="container">
          <div class="video-grid">
            <div class="video-item">
              <img src="https://placekitten.com/1920/1080" alt="">
            </div>
            <div class="video-item">
              <img src="https://placekitten.com/1920/1080" alt="">
            </div>
            <div class="video-item">
              <img src="https://placekitten.com/1920/1080" alt="">
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
              while($appearances_loop->have_posts()) : $appearances_loop->the_post();
             
              
            ?>
              <div class="appearance-container">
                <div class="appearance-date">
                  <?php 
                    $date = get_field('appearance_date', false, false); 
                    $date = new DateTime($date);
                  ?>
                  <span><?php echo $date->format('j'); ?></span><?php echo $date->format('M'); ?>
                </div>
                <div class="appearance-name">
                  <?php the_title(); ?>
                </div>
                <div class="appearance-cta">
                  <a href="<?php the_field('appearance_link'); ?>" class="btn btn-secondary">Learn More</a>
                </div>
              </div>
            <?php endwhile; ?>

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

      <!-- Social -->
      <aside id="social-menu">
        <div class="container">
          <div class="social-menu">
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
      </aside>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
