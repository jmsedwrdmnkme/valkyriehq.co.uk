<?php
  /**
   * Coaches Block Template.
   */

  $title = get_field('title');
  $text = get_field('text');
  $showPhysio = get_field('show_physio');
?>
<div class="component__coaches py-5">
  <div class="container text-center">
    <h2 class="display-5"><?php echo $title; ?></h2>
    <?php if ($text) : ?>
      <div class="border-2 border-primary border-top lead mt-4 pt-3">
        <?php echo $text; ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="container-fluid mt-1">
    <div class="row justify-content-center position-relative">
      <?php
        $args = array(
          'post_type' => 'coach'
        );

        $the_query = new WP_Query($args);
        while ($the_query -> have_posts()) :
          $the_query -> the_post();
          $post_id = get_the_ID();
          $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
          $image_src = get_the_post_thumbnail_url($post_id, 'column-16x9');
      ?>
          <div class="col-md-6 col-lg-3 mt-4">
            <a href="<?php the_permalink(); ?>" class="d-block position-relative text-white">
              <div class="bottom-0 start-00 position-absolute z-1 m-3 pe-none">
                <h3 class="bg-black d-inline-block px-1 text-center mb-0"><?php the_title(); ?></h3>
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
  <div class="mt-4 pt-3 text-center pb-3">
    <a href="<?php echo get_site_url(); ?>/coaches/" class="btn btn-outline-primary">Meet our coaches</a>
  </div>
</div>
