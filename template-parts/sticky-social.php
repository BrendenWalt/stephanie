<?php
  $instagram_url                           = get_field('instagram_url');
  $facebook_url                            = get_field('facebook_url');
  $youtube_url                             = get_field('youtube_url');
?>

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