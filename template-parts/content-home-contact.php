<?php
  $contact_form_shortcode                  = get_field('contact_form_shortcode');
  $instagram_url                           = get_field('instagram_url');
  $facebook_url                            = get_field('facebook_url');
  $youtube_url                             = get_field('youtube_url');
  $contact_header                          = get_field('contact_header');
  $contact_message                         = get_field('contact_message');
?>

<!-- Contact -->
<section id="contact">
  <div class="container">
    <div class="contact-header">
      <h1>
        Contact
      </h1>
      <div class="social-container">
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
    
    <div class="contact-info-container">
      <div>
        <h3><?php echo($contact_header); ?></h3>
        <p><?php echo($contact_message); ?></p>
      </div>
      <div>
        <div class="contact-form">
          <?php echo do_shortcode($contact_form_shortcode); ?>
        </div>
      </div>
    </div>
  
  </div>
</section><!-- CONTACT END -->