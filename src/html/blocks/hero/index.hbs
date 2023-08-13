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

  $post_id = $post->ID;
  $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
  $image_desktop = get_the_post_thumbnail_url($post_id, 'hero-home-desktop');
  $image_mobile = get_the_post_thumbnail_url($post_id, 'hero-home-mobile');
?>
<div class="component__hero align-items-center d-flex justify-content-center position-relative overflow-hidden py-5">
  <div class="container my-5 py-5 position-relative z-1 text-center">
    <?php if (is_singular('post')) : ?>
      <div class="text-lg-start col-lg-6">
        <div class="col-lg-auto d-inline-block">
          <div class="h1 display-3 mt-5 border-primary border-bottom border-2 pb-3"><?php the_title(); ?></div>
          <div class="mt-3 h5 text-uppercase">Posted by <a href="#author" class="text-primary"><?php the_author(); ?></a> on <span class="text-primary"><?php the_date(); ?></span></div>
        </div>
      </div>
    <?php elseif (is_singular('coach')) : ?>
      <?php
        $role = get_field('role', $post_id);
        $links = get_field('links', $post_id);
      ?>
      <div class="text-lg-start col-lg-6 ms-lg-auto">
        <div class="col-lg-auto d-inline-block">
          <div class="h1 display-3 mt-5 border-primary border-bottom border-2 pb-3"><?php the_title(); ?></div>
          <div class="mt-3 h5 text-uppercase"><?php echo $role; ?></div>
          <?php if($links): ?>
            <div class="mt-4 mx-n1">
              <?php foreach($links as $link): 
                $url = $link['url'];
                $url = strtolower($url);
              ?>
              <a href="<?php echo $url; ?>" target="_blank" class="d-inline-block mx-1">
                <svg width="40" height="40">
                  <?php if (str_contains($url, 'facebook')) : ?>
                    <use xlink:href="#facebook">
                  <?php elseif (str_contains($url, 'twitter')) : ?>
                    <use xlink:href="#twitter">
                  <?php elseif (str_contains($url, 'youtube')) : ?>
                    <use xlink:href="#youtube">
                  <?php elseif (str_contains($url, 'instagram')) : ?>
                    <use xlink:href="#instagram">
                  <?php else : ?>
                    <use xlink:href="#link">
                  <?php endif; ?>
                </svg>
              </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php elseif (is_singular('session')) : ?>
      <?php
        $tagline = get_field('tagline', $post_id);
      ?>
      <div class="h1 display-3 mt-5"><?php the_title(); ?></div>
      <p class="lead mt-3"><?php echo $tagline; ?></p>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal">Book a session</button>
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
