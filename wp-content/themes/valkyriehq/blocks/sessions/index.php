<?php
  /**
   * Sessions Block Template.
   */

  $title = get_field('title');
  $text = get_field('text');
  $show_button = get_field('show_button_to_sessions_page');
?>
<div class="component__sessions py-5">
  <div class="container text-center">
    <h2 class="display-5"><?php echo $title; ?></h2>
      <?php if ($text) : ?>
        <div class="border-2 border-primary border-top lead mt-4 pt-3">
          <?php echo $text; ?>
        </div>
      <?php endif; ?>
  </div>
  <div class="container-fluid mt-1">
    <div class="row justify-content-center">
      <?php
        $args = array(
          'post_type' => 'session',
          'posts_per_page' => 3
        );
        $the_query = new WP_Query($args);
        while ($the_query -> have_posts()) : 
          $the_query -> the_post();	  
          $image_id = get_the_ID();
          $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
          $image_src = get_the_post_thumbnail_url($image_id, 'column-16x9');

          $tagline = get_the_field('tagline', get_the_ID());
      ?>
        <div class="col-md-6 col-lg-4 mt-4">
          <a href="<?php the_permalink(); ?>" class="d-block position-relative text-white">
            <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
              <h3 class="bg-black d-inline-block mb-0 px-1"><?php the_title(); ?></h3>
              <small class="bg-black col-lg-10 d-inline-block px-1"><?php echo tagline; ?></small>
            </div>
            <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
          </a>
        </div>
      <?php
        endwhile;
        wp_reset_postdata();
      ?>
    </div>
  </div>
  <?php if ($show_button) : ?>
    <div class="mt-4 pt-3 text-center pb-3">
      <a href="<?php echo get_site_url(); ?>/sessions/" class="btn btn-outline-primary">Find out more</a>
    </div>
  <?php else : ?>
    <div class="pb-3"></div>
  <?php endif; ?>
</div>

