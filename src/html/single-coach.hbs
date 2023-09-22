<?php get_header(); ?>
<?php
  $tagline = get_field('tagline');
  $about = get_field('about');
  $booking_email = get_field('booking_email');
  $gallery = get_field('gallery');
  $sessions = get_field('sessions');
?>
<main id="main">
  <?php echo do_blocks('<!-- wp:acf/hero {"name":"acf/hero","data":{"field_64c92d131c364":"","field_64c92d131c3a7":{"title":"","url":"","target":""}},"mode":"preview"} /-->'); ?>
  <?php the_content(); ?>

  <div class="container">
    <div class="mt-5 pb-5 border-bottom border-primary border-2 lead text-center">
      <?php echo $tagline; ?>
    </div>

    <div class="row mb-5">
      <div class="col-xl mt-5 columns">
        <?php echo $about; ?>
      </div>

      <?php if($gallery): ?>
        <div class="col-xl-6 mt-4 mt-lg-5 ps-xl-5 text-center">
          <div class="glide d-none d-md-block mb-4">
            <div class="glide__track mx-5 mx-xl-4" data-glide-el="track">
              <ul class="glide__slides">
                <?php foreach($gallery as $media): 
                  $photo = $media['photo'];
                  $photo_alt = get_post_meta($photo, '_wp_attachment_image_alt', TRUE);
                  $photo_src = wp_get_attachment_image_url($photo, 'column-16x9');
                ?>
                  <li class="glide__slide">
                    <img loading="lazy" src="<?php echo $photo_src; ?>" alt="<?php echo $photo_alt; ?>" class="img-fluid w-100" width="735" height="415">
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;">
                <span class="visually-hidden">
                  prev
                </span>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">
                <span class="visually-hidden">
                  next
                </span>
              </button>
            </div>
          </div>
          <?php 
            $link = get_field('booking_email');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <?php if($sessions): ?>
    <div class="component__coaches pb-5 mb-4">
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
