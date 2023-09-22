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

  $video_file = get_field('video_file');
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
  <?php if( have_rows('video_file') ): ?>
    <?php while( have_rows('video_file') ): the_row(); 
      $webm = get_sub_field('webm');
      $mp4 = get_sub_field('mp4');
    ?>
      <div class="ratio ratio-16x9 pe-none component__hero-home--video">
        <video width="1920" height="780" preload="metadata" autoplay loop muted playsinline>
          <?php if ($webm) : ?>
            <source src="<?php echo $webm; ?>" type="video/webm" />
          <?php endif; ?>
          <?php if ($mp4) : ?>
            <source src="<?php echo $mp4; ?>" type="video/mp4" />
          <?php endif; ?>
        </video>
      </div>
    <?php endwhile; ?>
  <?php elseif ($vimeo_url) : ?>
    <div class="ratio ratio-16x9 pe-none component__hero-home--video">
      <iframe title="Valkyrie HQ strength and fitness gym" src="<?php echo $vimeo_url; ?>&autoplay=1&loop=1&autopause=0&?background=1&muted=1" width="1920" height="780" frameborder="0" allow="autoplay; fullscreen" autoplay muted loop playsinline></iframe>
    </div>
  <?php else : ?>
    <picture class="opacity-50 w-100">
      <source media="(max-width: 767.98px)" srcset="<?php echo $image_mobile; ?>">
      <source media="(min-width: 768px)" srcset="<?php echo $image_desktop; ?>">
      <img class="img-fluid w-100" src="<?php echo $image_desktop; ?>" height="768" width="1366" alt="<?php echo $image_alt; ?>">
    </picture>
  <?php endif; ?>
</div>
