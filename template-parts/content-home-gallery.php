<?php
  $gallery_shortcode                       = get_field('gallery_shortcode');
?>

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