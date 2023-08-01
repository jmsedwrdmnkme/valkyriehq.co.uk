<?php
  /**
   * Testimonials Block Template.
   */
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
              <li class="glide__slide">
                <div class="row bg-secondary py-3 px-1 py-md-4 px-md-3 align-items-center">
                  <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" loading="lazy" class="img-fluid w-100" alt="">
                  </div>
                  <figure class="col-lg-6 mb-0 mt-3 mt-lg-0">
                    <blockquote class="blockquote mb-0">
                      <p>Duis aute irurwe dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                      <figcaption class="blockquote-footer">
                        John Smith
                      </figcaption>
                    </blockquote>
                  </figure>
                </div>
              </li>
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
