<?php
  /**
   * About Page Block Template.
   */

  $tagline = get_field('tagline');
  $text = get_field('text');

  $button_link = get_field('button_link');
  if ($button_link) {
    $link_url = $button_link['url'];
    $link_title = $button_link['title'];
    $link_target = $button_link['target'] ? $button_link['target'] : '_self';
  }
?>
<div class="component__page--about pb-5">
  <div class="container-fluid mt-n5 d-none d-lg-block">
    <div class="row justify-content-center">
      <?php if(have_rows('photos')) :
        while(have_rows('photos')) : the_row();
          $image_id = get_sub_field('image');
          $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
          $image_src = wp_get_attachment_image_src($image_id, 'column-16x9')[0];
      ?>
          <div class="col-md-6 col-lg-4 mt-4">
            <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100 grayscale" width="735" height="415">
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="container pb-3">
    <div class="h3 h4 text-center pt-5"><?php echo $tagline; ?></div>
    <?php if ($text) : ?>
      <div class="border-2 border-primary border-top mt-4 pt-4">
        <div class="columns pt-2">
          <?php echo $text; ?>
          <?php if ($button_link) : ?>
            <div class="text-center">
              <a href="<?php echo esc_url($link_url); ?>"  target="<?php echo esc_attr($link_target); ?>" class="btn btn-outline-primary mt-3"><?php echo esc_html($link_title); ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>
