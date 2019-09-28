<?php
  $about_header                            = get_field('about_header');
  $about_text                              = get_field('about_text');
  $about_image                             = get_field('about_image');
?>

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