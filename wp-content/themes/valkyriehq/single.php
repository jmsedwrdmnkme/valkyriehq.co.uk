<?php get_header(); ?>

<main id="main">
  <div class="bg-secondary">
    <div class="container">
      <div class="h1"><?php echo esc_html(get_the_title()); ?></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 my-5">
        <?php the_content(); ?>
      </div>
      <aside class="col-lg-4 col-xl-3 mb-5 my-lg-5">
        <div class="bg-secondary p-5">
          ASIDE
        </div>
      </aside>
    </div>
  </div>
</main>

<?php get_footer(); ?>
