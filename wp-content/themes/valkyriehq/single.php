<?php get_header(); ?>

<main id="main">
  <div class="bg-secondary">
    <div class="container">
      <div class="h1"><?php echo esc_html(get_the_title()); ?></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md my-5">
        <?php the_content(); ?>
      </div>
      <aside class="col-md-3 col-lg-2 my-5">
        <div class="bg-secondary p-5">
          ASIDE
        </div>
      </aside>
    </div>
  </div>
</main>

<?php get_footer(); ?>
