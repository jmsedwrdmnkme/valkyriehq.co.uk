<footer class="bg-secondary pt-4 pb-5">
  <div class="container mb-5">
    <div class="row text-center">
      <div class="col-md text-md-start">
        <a href="<?php echo get_site_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-valkyrie-hq.png" class="img-fluid" alt="Valkyrie HQ logo" width="171" height="50">
        </a>
        <small class="d-block mt-4 pt-2 col-xl-10"><?php echo get_option('blogdescription'); ?></small>
        <div class="mt-3 mx-n1">
          <a href="//facebook.com/hqvalkyrie/" target="_blank" class="d-inline-block mx-1">
            <span class="visually-hidden">Facebook</span>
            <svg width="40" height="40">
              <use xlink:href="#facebook">
            </svg>
          </a>
          <a href="//youtube.com/@valkyriephysiotherapy9420" target="_blank" class="d-inline-block mx-1">
            <span class="visually-hidden">YouTube</span>
            <svg width="40" height="40">
              <use xlink:href="#youtube">
            </svg>
          </a>
          <a href="//instagram.com/valkyrie.hq/" target="_blank" class="d-inline-block mx-1">
            <span class="visually-hidden">Instagram</span>
            <svg width="40" height="40">
              <use xlink:href="#instagram">
            </svg>
          </a>
        </div>
        <small class="d-block mt-4">Design and build by <a href="//jamesmonk.me" target="_blank">James Monk</a></small>
      </div>
      <div class="col-md text-md-end mt-4 mt-md-2">
        <nav>
          <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-menu',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
              'depth' => 1,
              'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
          ?>
        </nav>
      </div>
    </div>
  </div>
</footer>

<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <div class="h1 modal-title fs-5" id="bookingModalLabel">Book a session</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ratio ratio-16x9">
        <iframe data-src="https://www.wodboard.com/locations/312/timetable/204aa77fc4?adi=1"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
