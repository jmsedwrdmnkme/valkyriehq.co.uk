<?php
  /**
   * Get Started Block Template.
   */

  $title = get_field('title');
  $text = get_field('text');
?>
<div class="component__book py-4 bg-primary">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5 col-xl-4 text-center text-lg-start pb-1">
        <h2 class="display-5"><?php echo $title; ?></h2>
        <a href="<?php echo get_site_url(); ?>/contact-us/" class="btn btn-outline-light mt-3">Any questions?</a>
        <a href="<?php echo get_site_url(); ?>/book-a-session/" class="btn btn-dark mt-3 ms-3">Book a session</a>
      </div>
      <div class="col-lg-6 col-xl-7 mt-4 lead mt-lg-0">
        <?php echo $text; ?>
      </div>
    </div>
  </div>
</div>
