<?php get_header(); ?>
<?php
?>
<main id="main">
  <?php echo do_blocks('<!-- wp:acf/hero {"name":"acf/hero","data":{"field_64c92d131c364":"","field_64c92d131c3a7":{"title":"","url":"","target":""}},"mode":"preview"} /-->'); ?>
  <?php the_content(); ?>

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

    <?php foreach($coaches as $coach) : ?>
      <?php 
        $coach_id = $coach->ID;
        $role = get_the_field('role', $coach_id);
      ?>
      <?php echo get_the_title($coach_id); ?>
      <?php echo $role; ?>
    <?php endforeach; ?>

  <?php endif; ?>

  <?php echo do_blocks('<!-- wp:acf/testimonials {"name":"acf/testimonials","data":{"field_64c806de1c00d":"","field_64c806de1c058":""},"mode":"preview"} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":209} /-->'); ?>
  <?php echo do_blocks('<!-- wp:block {"ref":212} /-->'); ?>
</main>

<?php get_footer(); ?>
