<?php get_header(); ?>
<?php
  $youtube_url = get_field('youtube_url');
  preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $youtube_url, $match);
  $youtube_embed = '//youtube.com/embed/' . $match[1];
  $youtube_thumbnail = '//img.youtube.com/vi/' . $match[1] . '/maxresdefault.jpg';
  $description = get_field('description');
?>
<main id="main">
  <?php echo do_blocks('<!-- wp:acf/hero {"name":"acf/hero","data":{"field_64c92d131c364":"","field_64c92d131c3a7":{"title":"","url":"","target":""}},"mode":"preview"} /-->'); ?>
  <?php the_content(); ?>

  <button type="button" class="ratio ratio-16x9 border-0" data-bs-toggle="modal" data-bs-target="#videoModal">
    <img src="<?php echo $youtube_thumbnail; ?>" alt="Session intro video thumbnail" width="1280" height="720">
    <span class="d-none">Play session intro video</span>
  </button>

  <?php
    global $post;
    $coaches = get_posts(
      array(
        'post_type'=>'coach',
        'meta_query'=>array(
          array(
            'key' => 'sessions',
            'value' => '"'.$post->ID.'"',
            'compare' => 'LIKE'
          )
        )
      )
    );
  ?>
  <?php if($coaches): ?>
    <div class="component__coaches mt-5">
      <div class="container text-center">
        <h2 class="display-5">Meet the coaches</h2>
      </div>
      <div class="container-fluid mt-4 pb-3">
        <div class="row justify-content-center position-relative">
          <?php foreach($coaches as $coach) : ?>
            <?php 
              $coach_id = $coach->ID;
              $image_alt = get_post_meta($coach_id, '_wp_attachment_image_alt', TRUE);
              $image_src = get_the_post_thumbnail_url($coach_id, 'column-16x9');
              $title = get_the_title($coach_id);
              $permalink = get_permalink($coach_id);
              $role = get_field('role', $coach_id);
            ?>
            <div class="col-md-6 col-lg-4 mt-4">
              <a href="<?php echo $permalink; ?>" class="d-block position-relative text-white">
                <div class="bottom-0 start-0 position-absolute z-1 m-3 pe-none">
                  <h3 class="bg-black d-inline-block px-1 mb-0"><?php echo $title; ?></h3>
                  <div>
                    <div class="bg-black d-inline-block px-1 mb-0 h6 text-uppercase"><?php echo $role; ?></div>
                  </div>
                </div>
                <img loading="lazy" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid w-100" width="735" height="415">
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="border-bottom border-primary border-2 container mt-5"></div>
    </div>
  <?php endif; ?>

  <?php echo do_blocks('<!-- wp:acf/testimonials {"name":"acf/testimonials","data":{"field_64c806de1c00d":"","field_64c806de1c058":""},"mode":"preview"} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":209} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":212} /-->'); ?>
</main>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-body ratio ratio-16x9">
        <iframe loading="lazy" data-src="<?php echo $youtube_embed; ?>?autoplay=1" autoplay frameborder="0" allowfullscreen></iframe>
      </div>
      <button type="button" class="btn btn-primary position-absolute top-100 end-0 mt-3" data-bs-dismiss="modal">Close</button>
    </div>
  </div>

  <script>
    const videoModal = document.getElementById('videoModal')
    const videoDom = videoModal.querySelector('iframe');
    const videoSrc = videoDom.attribute('data-src');

    videoModal.addEventListener('shown.bs.modal', event => {
      videoDom.src = videoSrc;
    })

    videoModal.addEventListener('hidden.bs.modal', event => {
      videoDom.src = '';
    })
  </script>
</div>

<?php get_footer(); ?>
