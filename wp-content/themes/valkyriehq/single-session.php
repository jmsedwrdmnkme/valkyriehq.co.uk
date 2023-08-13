<?php get_header(); ?>
<?php
?>
<main id="main">
  <?php echo do_blocks('<!-- wp:acf/hero {"name":"acf/hero","data":{"field_64c92d131c364":"","field_64c92d131c3a7":{"title":"","url":"","target":""}},"mode":"preview"} /-->'); ?>
  <?php the_content(); ?>

  <?php 
    global $post;
    $coaches = get_posts(
      array(
        'post_type'=>'coach',
        'meta_query'=>array(
          array(
            'key' => 'sessions',
            'value' => '"'.$post->ID.'"',
            'compare' => 'LIKE'
          )
        )
      )
    );
  ?>
  <?php if($coaches): ?>
    <div class="container-fluid mt-1">
      <div class="row justify-content-center position-relative">
        <?php foreach($coaches as $coach) : ?>
          <?php 
            $coach_id = $coach->ID;
            $image_alt = get_post_meta($coach_id, '_wp_attachment_image_alt', TRUE);
            $image_src = get_the_post_thumbnail_url($coach_id, 'column-16x9');
            $title = get_the_title($coach_id);
            $permalink = get_permalink($coach_id);
            $role = get_field('role', $coach_id);
          ?>
          <div class="col-md-6 col-lg-4 mt-4">
            <a href="<?php echo $permalink; ?>" class="d-block position-relative text-white">
              <div class="bottom-0 start-00 position-absolute z-1 m-3 pe-none">
                <div class="bg-black d-inline-block px-1 text-center mb-0">
                  <h2><?php echo $title; ?></h2>
                  <div><?php echo $role; ?></div>
                </div>
              </div>
              <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php echo do_blocks('<!-- wp:acf/testimonials {"name":"acf/testimonials","data":{"field_64c806de1c00d":"","field_64c806de1c058":""},"mode":"preview"} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":209} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":212} /-->'); ?>
</main>

<?php get_footer(); ?>
