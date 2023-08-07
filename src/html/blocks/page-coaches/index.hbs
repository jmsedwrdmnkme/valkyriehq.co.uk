<?php
  /**
   * Coaches Page Block Template.
   */

  $text = get_field('text');
?>
<div class="page__coaches py-5">
  <div class="container-fluid pb-3">
    <div class="row justify-content-center">
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
          <div class="col-md-6 col-lg-3 mt-4 mx-md-n4">
            <a href="<?php the_permalink(); ?>" class="d-block position-relative text-white">
              <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
              <h2 class="bg-black d-inline-block px-1 text-center mb-0"><?php the_title(); ?></h2>
            </a>
          </div>
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
    </div>
  </div>
  <?php if ($text) : ?>
    <div>
      <?php echo $text; ?>
    </div>
  <?php endif; ?>
</div>
