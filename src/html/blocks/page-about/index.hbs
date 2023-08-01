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
<div class="component__page--about pb-5 mt-n5">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <?php if(have_rows('photos')) :
        while(have_rows('photos')) : the_row();
          $image_id = get_sub_field('sub_field');
          $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
          $image_src = get_the_post_thumbnail_url($image_id, 'column-16x9');
      ?>
          <div class="col-md-6 col-lg-4 mt-4">
            <img loading="lazy" src="<?php echo $page_image_src; ?>" alt="<?php echo $page_image_alt; ?>" class="img-fluid w-100 grayscale" width="735" height="415">
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="container mt-4 pb-3">
    <div class="h3 text-center py-2"><?php echo $tagline; ?></div>
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
