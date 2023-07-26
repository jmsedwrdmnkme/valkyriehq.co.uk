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
</main>

<?php get_footer(); ?>
