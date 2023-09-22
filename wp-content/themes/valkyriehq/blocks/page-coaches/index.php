<?php
  /**
   * Coaches Page Block Template.
   */

  $text = get_field('text');
?>
<div class="page__coaches mt-md-n5 pb-5 position-relative">
  <div class="container-fluid pb-3">
    <div class="row justify-content-center">
      <?php
        $args = array(
          'post_type' => 'coach',
          'tax_query' => array(
            array(
              'taxonomy' => 'coach_type',
              'field' => 'slug',
              'terms' => 'physio',
              'operator'  => 'NOT IN'
            ),
          ),
        );
        $the_query = new WP_Query($args);
        while ($the_query -> have_posts()) :
          $the_query -> the_post();
          $post_id = get_the_ID();
          $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
          $image_src = get_the_post_thumbnail_url($post_id, 'column-16x9');
      ?>
          <div class="col-md-6 col-lg-3 mt-4 mx-md-n4">
            <a href="<?php the_permalink(); ?>" class="d-block text-decoration-none">
              <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
              <h2 class="h5 text-center mt-2 text-primary"><?php the_title(); ?></h2>
            </a>
          </div>
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
    </div>
  </div>
  <?php if ($text) : ?>
    <div class="border-2 border-primary border-top lead mt-4 pt-3 text-center">
      <?php echo $text; ?>
    </div>
  <?php endif; ?>
</div>
