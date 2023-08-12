<?php
  /**
   * Hero Block Template.
   */

  global $post;

  $text = get_field('text');

  $button_link = get_field('button_link');
  if ($button_link) {
    $link_url = $button_link['url'];
    $link_title = $button_link['title'];
    $link_target = $button_link['target'] ? $button_link['target'] : '_self';
  }

  $image_id = $post->ID;
    $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
    $image_desktop = get_the_post_thumbnail_url($image_id, 'hero-home-desktop');
    $image_mobile = get_the_post_thumbnail_url($image_id, 'hero-home-mobile');
?>
<div class="component__hero align-items-center d-flex justify-content-center position-relative overflow-hidden py-5">
  <div class="container my-5 py-5 position-relative z-1 text-center">
    <?php if (is_singular()) : ?>
      <div class="h1 display-3 mt-5 col-lg-6 border-primary border-bottom border-2"><?php the_title(); ?></div>
    <?php else : ?>
      <div class="h1 display-3 mt-5"><?php the_title(); ?></div>
      <?php if ($text) : ?>
        <p class="lead mt-3"><?php echo $text; ?></p>
      <?php endif; ?>
      <?php if ($button_link) : ?>
        <a href="<?php echo esc_url($link_url); ?>"  target="<?php echo esc_attr($link_target); ?>" class="btn btn-outline-primary mt-2"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <picture>
    <source media="(max-width: 767.98px)" srcset="<?php echo $image_mobile; ?>">
    <source media="(min-width: 768px)" srcset="<?php echo $image_desktop; ?>">
    <img class="component__hero--image opacity-50 position-absolute top-50 start-50 translate-middle" src="<?php echo $image_desktop; ?>" height="768" width="1366" alt="<?php echo $image_alt; ?>">
  </picture>
</div>
