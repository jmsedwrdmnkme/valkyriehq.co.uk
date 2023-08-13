<?php get_header(); ?>
<?php
?>
<main id="main">
  <?php echo do_blocks('<!-- wp:acf/hero {"name":"acf/hero","data":{"field_64c92d131c364":"","field_64c92d131c3a7":{"title":"","url":"","target":""}},"mode":"preview"} /-->'); ?>
  <?php the_content(); ?>

  <?php 
    $sessions = get_posts(array(
      'post_type' => 'coach',
      'meta_query' => array(
        array(
          'key' => 'sessions',
          'value' => '"' . get_the_ID() . '"',
          'compare' => 'LIKE'
        )
      )
    ));
  ?>
  <?php if( $sessions ): ?>

    <?php foreach( $sessions as $session ): ?>
      <?php 
        $session_id = $session->ID;
        $photo = get_field('photo', $session->ID);

      ?>
      <li>
        <a href="<?php echo get_permalink( $session->ID ); ?>">
          <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" width="30" />
          <?php echo get_the_title( $session->ID ); ?>
        </a>
      </li>
    <?php endforeach; ?>

  <?php endif; ?>

  <?php echo do_blocks('<!-- wp:acf/testimonials {"name":"acf/testimonials","data":{"field_64c806de1c00d":"","field_64c806de1c058":""},"mode":"preview"} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":209} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":212} /-->'); ?>
</main>

<?php get_footer(); ?>
