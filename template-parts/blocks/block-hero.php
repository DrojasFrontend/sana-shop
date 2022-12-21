<?php
  $hero_background = get_field('hero_background');
  $hero_video = get_field('hero_video');
  $hero_subtitle = get_field('hero_subtitle');
  $hero_title = get_field('hero_title');
?>
<section class="block-hero" data-scroll-section>
  <div class="hero">
    <video id="video" title="Advertisement" autoplay="true" muted="muted" loop src="<?= $hero_video ?>" class="hero__video"></video>
      <source src="movie.mp4" type="video/mp4">
      <source src="movie.ogg" type="video/ogg">
      Your browser does not support the video tag.
    </video>
    <div class="hero__wrapper">
      <h2 class="h4 uppercase hero__subtitle" data-scroll data-scroll-speed="8" data-scroll-position="top" data-scroll-delay="0.05"><?php echo $hero_subtitle ?></h2>
      <h1 class="h1 uppercase hero__title" data-scroll data-scroll-speed="3" data-scroll-position="top" data-scroll-delay="0.05"><?php echo $hero_title ?></h1>
    </div>
  </div>
</section>