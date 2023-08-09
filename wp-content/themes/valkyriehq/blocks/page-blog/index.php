<?php
  /**
   * Blog Page Block Template.
   */

   global $post;
?>
<div class="component__page--blog overflow-hidden">
  <div class="container">
    <div class="row align-items-center pb-5">
	  <?php
      $count = 0;
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'paged' => $paged
      );
      $custom_query = new WP_Query($args);
      $temp_query = $wp_query;
      $wp_query = null;
      $wp_query = $custom_query;
      $max_num_page = $custom_query->max_num_pages;

      while ($custom_query -> have_posts()) : 
        $custom_query -> the_post();	  
        $post_id = get_the_ID();
        $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
        $image_src = get_the_post_thumbnail_url($post_id, 'column-16x9');

        if ($count == 0 && $paged == 1) :
          $content_mobile = wp_trim_words(wp_strip_all_tags(get_the_content($post_id)), 15, '...');
          $content = wp_trim_words(wp_strip_all_tags(get_the_content($post_id)), 30, '...');
          $content_large = wp_trim_words(wp_strip_all_tags(get_the_content($post_id)), 50, '...');
		?>
		  <div class="blog-post__first bg-secondary pb-5">
		    <div class="container">
          <div class="row align-items-center">
            <div class="col-lg mt-5">
              <a href="<?php the_permalink(); ?>">
              <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
            </a>
            </div>
            <div class="col-lg mt-4 mt-lg-5">
              <div class="text-center text-lg-start">
                <h2><?php the_title(); ?></h2>
                <small class="d-block mt-3">Posted by <span class="text-primary"><?php the_author(); ?></span> on <span class="text-primary"><?php the_date(); ?></span></small>
              </div>
              <p class="mt-3">
                <span class="d-xl-none"><?php echo $content_mobile; ?></span>
                <span class="d-none d-xl-block d-xxl-none"><?php echo $content; ?></span>
                <span class="d-none d-xxl-block"><?php echo $content_large; ?></span>
              </p>
              <div class="text-center text-lg-start">
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary mt-2">Read full post</a>
              </div>
            </div>
          </div>
		    </div>
		  </div>
    <?php else : ?>
		  <div class="col-md-6 col-lg-4 mt-5">
		    <a href="<?php the_permalink(); ?>" class="col-md-6 col-lg-3 text-center">
          <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
          <h2 class="mt-3"><?php the_title(); ?></h2>
		    </a>
		    <small class="d-block text-center">Posted by <span class="text-primary"><?php the_author(); ?></span> on <span class="text-primary"><?php the_date(); ?></span></small>
		  </div>
    <?php
      endif;
      $count++;
      endwhile;
    ?>	
    </div>
  </div>
</div>
<?php wp_reset_postdata();?>

<div class="container">
  <div class="row justify-content-center mt-4 mb-5">
      <div class="col-auto">
        <?php if ($paged != 1) : ?> 
          <a class="btn btn-outline-primary" href="<?php echo get_previous_posts_page_link();?>">Newer posts</a>
        <?php else : ?>
          <a class="btn btn-outline-primary disabled">Newer posts</a>
        <?php endif; ?>
      </div>
      <div class="col-auto">
        <?php if ($paged != $max_num_page) : ?> 
          <a class="btn btn-outline-primary" href="<?php echo get_next_posts_page_link($max_num_page); ?>">Older posts</a>
        <?php else : ?>
          <a class="btn btn-outline-primary disabled">Older posts</a>
        <?php endif; ?>
      </div>
  </div>
</div>

<?php
  $wp_query = NULL;
  $wp_query = $temp_query;
?>
