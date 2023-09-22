<?php
  /**
   * Hero Home Block Template.
   */

  global $post;

  $title = get_field('title');
  $text = get_field('text');

  $button_link = get_field('button_link');
  if ($button_link) {
    $link_url = $button_link['url'];
    $link_title = $button_link['title'];
    $link_target = $button_link['target'] ? $button_link['target'] : '_self';
  }

  $vimeo_url = get_field('vimeo_url');

  $image_id = $post->ID;
    $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
    $image_desktop = get_the_post_thumbnail_url($image_id, 'hero-home-desktop');
    $image_mobile = get_the_post_thumbnail_url($image_id, 'hero-home-mobile');
?>
<div class="align-items-end component__hero-home d-flex justify-content-center position-relative">
  <div class="container my-5 position-absolute pb-md-3 pb-lg-5 z-1">
    <div class="col-lg-8 col-xl-6">
      <div class="h1 display-1"><?php echo $title; ?></div>
      <?php if ($text) : ?>
        <p class="lead mt-3"><?php echo $text; ?></p>
      <?php endif; ?>
      <?php if ($button_link) : ?>
        <a href="<?php echo esc_url($link_url); ?>"  target="<?php echo esc_attr($link_target); ?>" class="btn btn-primary mt-2"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>
    </div>
  </div>
  <?php if ($vimeo_url) : ?>
    <div class="ratio ratio-16x9 pe-none component__hero-home--video">
      <lite-vimeo videoid="866817041" style="background-image: url('https://i.vimeocdn.com/video/866817041.webp?h=8c1cfc8bd3&mw=1600&mh=900&q=70');">
        <div class="ltv-playbtn"></div>
      </lite-vimeo>
    </div>
    <script src="http://unpkg.com/lite-vimeo-embed"></script>
  <?php else : ?>
    <picture class="opacity-50 w-100">
      <source media="(max-width: 767.98px)" srcset="<?php echo $image_mobile; ?>">
      <source media="(min-width: 768px)" srcset="<?php echo $image_desktop; ?>">
      <img class="img-fluid w-100" src="<?php echo $image_desktop; ?>" height="768" width="1366" alt="<?php echo $image_alt; ?>">
    </picture>
  <?php endif; ?>
</div>
