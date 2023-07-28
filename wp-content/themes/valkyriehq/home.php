<?php get_header(); ?>

<main id="main">
  <?php the_content(); ?>

  <div class="align-items-end component__hero-home d-flex justify-content-center position-relative">
    <div class="container my-5 position-absolute pb-md-3 pb-lg-5 z-1">
      <div class="col-lg-8 col-xl-6">
        <div class="h1 display-1">Lorem ipsum sit dolor amet</div>
        <p class="lead mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="btn btn-primary mt-2">Book a session</a>
      </div>
    </div>
    <picture class="opacity-25 w-100">
      <source media="(max-width: 767.98px)" srcset="<?php echo get_template_directory_uri(); ?>/img/placeholder-small.svg">
      <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg">
      <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" height="768px" width="1366px" alt="Placeholder">
    </picture>
  </div>

  <div class="component__sessions py-5">
    <div class="container text-center">
      <h2 class="display-5">Our sessions</h2>
      <div class="border-2 border-primary border-top lead mt-4 pt-3">
        Lorem ipsum sit dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div>
    <div class="container-fluid mt-1">
      <div class="row">
        <div class="col-md-6 col-lg-4 mt-4">
          <a href="#" class="d-block position-relative text-white">
            <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
              <h3 class="bg-black d-inline-block mb-0 px-1">Session title</h3>
              <small class="bg-black col-lg-10 d-inline-block px-1">Lorem ipsum sit dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mt-4">
          <a href="#" class="d-block position-relative text-white">
            <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
              <h3 class="bg-black d-inline-block mb-0 px-1">Session title</h3>
              <small class="bg-black col-lg-10 d-inline-block px-1">Lorem ipsum sit dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mt-4">
          <a href="#" class="d-block position-relative text-white">
            <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
              <h3 class="bg-black d-inline-block mb-0 px-1">Session title</h3>
              <small class="bg-black col-lg-10 d-inline-block px-1">Lorem ipsum sit dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
          </a>
        </div>
      </div>
    </div>
    <div class="mt-4 pt-3 text-center pb-3">
      <a href="#" class="btn btn-outline-primary">Find out more</a>
    </div>
  </div>

  <div class="bg-secondary component__blog-posts py-5">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <h2 class="col-auto display-5">Blog</h2>
        <div class="col-auto">
          <a href="#" class="btn btn-outline-light">View all posts</a>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-1 pb-3">
      <div class="row">
        <div class="col-lg-6 mt-4">
          <a href="#" class="d-block position-relative text-white">
            <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
              <h3 class="bg-black d-inline-block px-1">Blog title</h3>
              <div>
                <small class="bg-black col-lg-10 d-inline px-1">Posted by <span class="text-primary">James</span> on <span class="text-primary">1st August 2023</span></small>
              </div>
              <small class="bg-black col-lg-10 d-inline-block mt-3 px-1">Lorem ipsum sit dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
          </a>
        </div>
        <div class="col-lg-6 d-none d-md-block">
          <div class="row">
            <div class="col-md-6 mt-4">
              <a href="#" class="d-block position-relative text-white">
                <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
                  <h3 class="bg-black d-inline-block mb-0 px-1">Blog title</h3>
                </div>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
              </a>
            </div>
            <div class="col-md-6 mt-4">
              <a href="#" class="d-block position-relative text-white">
                <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
                  <h3 class="bg-black d-inline-block mb-0 px-1">Blog title</h3>
                </div>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
              </a>
            </div>
            <div class="col-md-6 mt-4">
              <a href="#" class="d-block position-relative text-white">
                <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
                  <h3 class="bg-black d-inline-block mb-0 px-1">Blog title</h3>
                </div>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
              </a>
            </div>
            <div class="col-md-6 mt-4">
              <a href="#" class="d-block position-relative text-white">
                <div class="bottom-0 left-0 m-3 position-absolute z-1 pe-none">
                  <h3 class="bg-black d-inline-block mb-0 px-1">Blog title</h3>
                </div>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="component__about py-5">
    <div class="container text-center">
      <div class="h2 display-5">Get to know us</div>
    </div>
    <div class="container-fluid mt-1">
      <div class="row">
        <div class="col-md-6 col-lg-4 mt-4">
          <a href="#" class="d-block position-relative text-white">
            <div class="top-50 start-50 position-absolute translate-middle z-1 pe-none">
              <h2 class="h3 bg-black d-inline-block px-1">About title</h2>
            </div>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mt-4">
          <a href="#" class="d-block position-relative text-white">
            <div class="top-50 start-50 position-absolute translate-middle z-1 pe-none">
              <h2 class="h3 bg-black d-inline-block px-1">About title</h2>
            </div>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mt-4">
          <a href="#" class="d-block position-relative text-white">
            <div class="top-50 start-50 position-absolute translate-middle z-1 pe-none">
              <h2 class="h3 bg-black d-inline-block px-1">About title</h2>
            </div>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.svg" alt="" class="img-fluid w-100" width="735px" height="413px">
          </a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="border-2 border-primary border-top mt-5 pt-3 pb-3">
      </div>
    </div>
  </div>

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
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <span class="visually-hidden">
                  prev
                </span>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
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

  <div class="component__book py-4 bg-primary">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-5 col-xl-4 text-center text-lg-start pb-1">
          <h2 class="display-5">Get started training with us</h2>
          <a href="#" class="btn btn-outline-light mt-3">Any questions?</a>
          <a href="#" class="btn btn-dark mt-3 ms-3">Book a session</a>
        </div>
        <div class="col-lg-6 col-xl-7 mt-4 lead mt-lg-3">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="component__instagram py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center h2 display-5">Get social <a href="//instagram.com/valkyriehq" target="_blank">@valkyriehq</a></div>
        <div class="col-12 mt-4">
          <div class="bg-secondary py-5">
            <div class="p-5 m-4 text-center">
              Instagram feed
            </div>
          </div>
        </div>
        <div class="col-12 text-center mt-4">
          <a href="#" target="_blank" class="d-inline-block mx-1">
            <svg width="40" height="40">
              <use xlink:href="#facebook">
            </svg>
          </a>
          <a href="#" target="_blank" class="d-inline-block mx-1">
            <svg width="40" height="40">
              <use xlink:href="#twitter">
            </svg>
          </a>
          <a href="#" target="_blank" class="d-inline-block mx-1">
            <svg width="40" height="40">
              <use xlink:href="#instagram">
            </svg>
          </a>
          <a href="#" target="_blank" class="d-inline-block mx-1">
            <svg width="40" height="40">
              <use xlink:href="#youtube">
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
