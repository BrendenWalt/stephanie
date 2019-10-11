<?php
  $main_image                              = get_field('main_image');
?>

<!-- Home -->
<section id="home" class="hero is-fullheight">
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