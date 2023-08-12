<?php get_header(); ?>

<main id="main">
  <?php echo do_blocks('<!-- wp:acf/hero {"name":"acf/hero","data":{"field_64c92d131c364":"","field_64c92d131c3a7":{"title":"","url":"","target":""}},"mode":"preview"} /-->'); ?>
  <div class="container pb-5">
    <div class="row">
      <div class="single__content col-lg-8 col-xl-9 mt-5">
        <?php the_content(); ?>
      </div>
      <aside class="col-lg-4 col-xl-3 mt-4 mt-lg-5">
        <div class="bg-primary h5 text-uppercase position-sticky">
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
    <div class="mb-5 pt-4 mt-4 border-top border-primary border-2">
      <div class="row align-items-center text-center text-md-start">
        <div class="col-md-auto">
          <img class="rounded-circle" src="" loading="lazy" alt="" width="200" height="200" />
        </div>
        <div class="col-md py-4">
          <p class="text-primary h2"><?php the_author(); ?></p>
          <p class="h3 h6">Author</p>
          <div class="mt-3">
            <a href="//facebook.com/hqvalkyrie/" target="_blank" class="d-inline-block mx-1">
              <svg width="40" height="40">
                <use xlink:href="#facebook">
              </svg>
            </a>
            <a href="#" target="_blank" class="d-inline-block mx-1">
              <svg width="40" height="40">
                <use xlink:href="#twitter">
              </svg>
            </a>
            <a href="youtube.com/watch?v=Fm7xxqp8mYs" target="_blank" class="d-inline-block mx-1">
              <svg width="40" height="40">
                <use xlink:href="#youtube">
              </svg>
            </a>
            <a href="//instagram.com/valkyrie.hq/" target="_blank" class="d-inline-block mx-1">
              <svg width="40" height="40">
                <use xlink:href="#instagram">
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo do_blocks('<!-- wp:block {"ref":209} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":212} /-->'); ?>
</main>

<?php get_footer(); ?>
