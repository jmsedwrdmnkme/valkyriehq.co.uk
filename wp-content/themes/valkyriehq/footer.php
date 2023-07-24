<footer>
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
</footer>

<?php wp_footer(); ?>

</body>
</html>
