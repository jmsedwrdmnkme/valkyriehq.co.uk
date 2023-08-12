<?php get_header(); ?>

<main id="main">
  <?php echo do_blocks('<!-- wp:acf/hero {"name":"acf/hero","data":{"field_64c92d131c364":"","field_64c92d131c3a7":{"title":"","url":"","target":""}},"mode":"preview"} /-->'); ?>
  <div class="container pb-5">
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
  <?php echo do_blocks('<!-- wp:block {"ref":209} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":212} /-->'); ?>
</main>

<?php get_footer(); ?>
