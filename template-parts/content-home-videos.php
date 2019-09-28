<?php
  $featured_video                          = get_field('featured_video');
  $video_2                                 = get_field('video_2');
  $video_3                                 = get_field('video_3');
?>

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