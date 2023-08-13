<?php
  /**
   * Testimonials Block Template.
   */

  $title = get_field('title');
?>
<div class="component__testimonials py-5 overflow-hidden">
  <div class="container text-center">
    <h2 class="display-5">Client testimonials</h2>
  </div>
  <div class="container mt-5 pb-3">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="glide">
          <div class="glide__track mx-5 overflow-visible" data-glide-el="track">
            <ul class="glide__slides">
              <?php
                $args = array(
                  'post_type' => 'testimonial'
                );
                $the_query = new WP_Query($args);
                while ($the_query -> have_posts()) : 
                  $the_query -> the_post();	  
                  $image_id = get_the_ID();
                  $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
                  $image_src = get_the_post_thumbnail_url($image_id, 'column-16x9');
              ?>
                <li class="glide__slide">
                  <div class="row bg-secondary py-3 px-1 py-md-4 px-md-3 align-items-center">
                    <div class="col-lg-6">
                      <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
                    </div>
                    <figure class="col-lg-6 mb-0 mt-3 mt-lg-0">
                      <blockquote class="blockquote mb-0">
                        <div>
                          <?php the_field('quote', get_the_ID()) ?>
                        </div>
                        <figcaption class="blockquote-footer">
                          <?php the_title(); ?>
                        </figcaption>
                      </blockquote>
                    </figure>
                  </div>
                </li>
              <?php
                endwhile;
                wp_reset_postdata();
              ?>
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
      </div>
    </div>
  </div>
</div>
