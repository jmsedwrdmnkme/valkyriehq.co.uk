<?php
  /**
   * Contact Page Block Template.
   */

  $text = get_field('text');
  $map_address = get_field('map_address');
  $map_address = preg_replace('/\s+/', '+', $map_address);
?>
<div class="component__page--contact">
  <div class="component__page--contact-row row align-items-center justify-content-center">
    <div class="content col-lg py-4">
      <div class="content--container">
        <div>
          <?php echo $text; ?>
        </div>
        <?php echo do_shortcode('[wpforms id="138"]'); ?>
      </div>
    </div>
    <div class="map col-lg mt-4 mt-lg-0">
      <div class="ratio ratio-16x9">
        <iframe loading="lazy" src="https://maps.google.com/maps?q=<?php echo $map_address; ?>&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
    </div>
  </div>
</div>
