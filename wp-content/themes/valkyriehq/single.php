<?php get_header(); ?>

<main id="main">
  <div class="bg-secondary">
    <div class="container">
      <div class="h1"><?php echo esc_html(get_the_title()); ?></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-xl-9 mt-5">
        <?php the_content(); ?>
      </div>
      <aside class="col-lg-4 col-xl-3 mt-4 mt-lg-5">
        <div class="bg-primary h5 text-uppercase">
		  <a class="btn btn-primary d-block text-start p-2 d-flex align-items-center" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_canonical_url(); ?>&t=<?php the_title(); ?>" target="_blank">
			<svg width="40" height="40">
              <use xlink:href="#facebook">
            </svg>
			<span class="ps-3">Share on Facebook</span>
		  </a>
		  <a class="btn btn-primary d-block text-start p-2 d-flex align-items-center" href="https://twitter.com/intent/tweet?url=<?php the_title(); ?> - <?php echo wp_get_canonical_url(); ?>">
			<svg width="40" height="40">
              <use xlink:href="#twitter">
            </svg>
			<span class="ps-3">Share on Twitter</span>
		  </a>
        </div>
      </aside>
    </div>
  </div>
</main>

<?php get_footer(); ?>
