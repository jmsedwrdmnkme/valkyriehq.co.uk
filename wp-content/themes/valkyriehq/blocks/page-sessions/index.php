<?php
  /**
   * Sessions Page Block Template.
   */

  $title = get_field('title');
  $text = get_field('text');
  $show_button = get_field('show_button_to_sessions_page');
?>
<div class="component__page--sessions py-5">
  <div class="pb-3">
    <?php
      $args = array(
        'post_type' => 'session'
      );
      $the_query = new WP_Query($args);
      while ($the_query -> have_posts()) : 
        $the_query -> the_post();	  
        $image_id = get_the_ID();
        $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
        $image_src = get_the_post_thumbnail_url($image_id, 'column-16x9');
    ?>
    <div class="component__page--sessions-row container-fluid">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg mt-4">
          <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
        </div>
        <div class="col-lg mt-4">
          <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
          </a>
          <p><?php the_field('tagline', get_the_ID()) ?></p>
        </div>
      </div>
    </div>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </div>
</div>

