<?php
  /**
   * Blog Template.
   */
?>
<div class="bg-secondary component__blog-posts py-5">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <h2 class="col-auto display-5">Blog</h2>
      <div class="col-auto">
        <a href="<?php echo get_site_url(); ?>/blog/" class="btn btn-outline-light">View all posts</a>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-1 pb-3">
    <div class="row">
      <div class="col-lg-6 mt-4">
        <?php
          $the_query = new WP_Query( 'posts_per_page=1' );
          while ($the_query -> have_posts()) : 
            $the_query -> the_post();	  
            $image_id = get_the_ID();
            $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
            $image_src = get_the_post_thumbnail_url($image_id, 'column-16x9');
        ?>
          <a href="<?php the_permalink() ?>" class="d-block position-relative text-white">
            <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
              <h3 class="bg-black d-inline-block px-1"><?php the_title(); ?></h3>
              <div>
                <small class="bg-black col-lg-10 d-inline px-1">Posted by <span class="text-primary"><?php the_author(); ?></span> on <span class="text-primary"><?php the_date('d m Y'); ?></span></small>
              </div>
              <small class="bg-black col-lg-10 d-inline-block mt-3 px-1"><?php echo substr(get_the_excerpt(), 260); ?></small>
            </div>
            <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
          </a>
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
      </div>
      <div class="col-lg-6 d-none d-md-block">
        <div class="row">
          <?php
             $args = array(
               'post_type'     => 'post',
               'showposts'     => 4,
               'offset'        => 1,
             );
            $the_query = new WP_Query($args);
            while ($the_query -> have_posts()) : 
              $the_query -> the_post();
              $image_id = get_the_ID();
              $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
              $image_src = get_the_post_thumbnail_url($image_id, 'column-16x9');
          ?>
            <div class="col-md-6 mt-4">
              <a href="<?php the_permalink() ?>" class="d-block position-relative text-white">
                <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
                  <h3 class="bg-black d-inline-block mb-0 px-1"><?php the_title(); ?></h3>
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
    </div>
  </div>
</div>
