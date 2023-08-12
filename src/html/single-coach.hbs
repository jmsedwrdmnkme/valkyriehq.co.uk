<?php get_header(); ?>
<?php
  $role = get_field('role');
  $tagline = get_field('tagline');
  $about = get_field('about');
  $gallery = get_field('gallery');
  $links = get_field('links');
  $sessions = get_field('sessions');
?>
<main id="main">
  <?php echo do_blocks('<!-- wp:acf/hero {"name":"acf/hero","data":{"field_64c92d131c364":"","field_64c92d131c3a7":{"title":"","url":"","target":""}},"mode":"preview"} /-->'); ?>
  <?php the_content(); ?>

  <div>
    <?php echo $role; ?>
  </div>

  <div>
    <?php echo $tagline; ?>
  </div>

  <div>
    <?php echo $about; ?>
  </div>

  <?php if($links): ?>
    <?php foreach($links as $link): 
      $url = $link['url'];
    ?>
    <a href="<?php echo $url; ?>" target="_blank">
      Link
    </a>
    <?php endforeach; ?>
  <?php endif; ?>

  <?php if($gallery): ?>
    <?php foreach($gallery as $media): 
      $photo = $media['photo'];
      $photo_alt = get_post_meta($photo, '_wp_attachment_image_alt', TRUE);
      $photo_src = get_the_post_thumbnail_url($photo, 'column-16x9');
    ?>
      <img loading="lazy" src="<?php echo $photo_src; ?>" alt="<?php echo $photo_alt; ?>" class="img-fluid w-100" width="735" height="415">
    <?php endforeach; ?>
  <?php endif; ?>

  <?php if($sessions): ?>
    <div class="component__coaches py-5">
      <div class="container text-center">
        <h2 class="display-5">Sessions <?php the_title(); ?> teaches&hellip;</h2>
      </div>
      <div class="container-fluid mt-1">
        <div class="row justify-content-center position-relative">
          <?php foreach($sessions as $session): 
            $session_id = $session->ID;
            $image_alt = get_post_meta($session_id, '_wp_attachment_image_alt', TRUE);
            $image_src = get_the_post_thumbnail_url($session_id, 'column-16x9');
            $title = get_the_title($session_id);
            $permalink = get_permalink($session_id);
          ?>
            <div class="col-md-6 col-lg-4 mt-4">
              <a href="<?php echo $permalink; ?>" class="d-block position-relative text-white">
                <div class="bottom-0 start-00 position-absolute z-1 m-3 pe-none">
                  <h3 class="bg-black d-inline-block px-1 text-center mb-0"><?php echo $title; ?></h3>
                </div>
                <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php echo do_blocks('<!-- wp:block {"ref":209} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":212} /-->'); ?>
</main>

<?php get_footer(); ?>
