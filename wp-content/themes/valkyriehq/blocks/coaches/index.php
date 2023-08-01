<?php
  /**
   * Coaches Block Template.
   */

  global $post;

  $title = get_field('title');
  $text = get_field('text');

?>
<div class="component__coaches py-5">
  <div class="container text-center">
    <div class="h2 display-5"><?php echo $title; ?></div>
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
          'post_type' => 'coach',
          'posts_per_page' => '4'
        );
        $the_query = new WP_Query($args);
        while ($the_query -> have_posts()) : 
          $the_query -> the_post();	  
          $image_id = get_the_ID();
          $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
          $image_src = get_the_post_thumbnail_url($image_id, 'column-16x9');
      ?>
          <div class="col-md-6 col-lg-3 mt-4">
            <a href="<?php echo esc_url($page_link); ?>" class="d-block position-relative text-white">
              <div class="top-50 start-50 position-absolute translate-middle z-1 pe-none">
                <h2 class="h3 bg-black d-inline-block px-1"><?php echo $page_title; ?></h2>
              </div>
              <img loading="lazy" src="<?php echo $page_image_src; ?>" alt="<?php echo $page_image_alt; ?>" class="img-fluid w-100" width="735" height="415">
            </a>
          </div>
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
    </div>
  </div>
  <div class="container">
    <div class="border-2 border-primary border-top mt-5 pt-3">
    </div>
  </div>
</div>
