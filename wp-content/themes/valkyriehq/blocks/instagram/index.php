<?php
  /**
   * Instagram Block Template.
   */

  $title = get_field('title');
?>
<div class="component__instagram py-5">
  <div class="container">
      <div class="text-center h2 display-5"><?php echo $title; ?></div>
      <div class="mt-4">
        <div class="bg-secondary py-5">
          <div class="p-5 m-4 text-center">
            Instagram feed
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="//facebook.com/hqvalkyrie/" target="_blank" class="d-inline-block mx-1">
          <svg width="40" height="40">
            <use xlink:href="#facebook">
          </svg>
        </a>
        <!--
        <a href="#" target="_blank" class="d-inline-block mx-1">
          <svg width="40" height="40">
            <use xlink:href="#twitter">
          </svg>
        </a>
        -->
        <a href="//youtube.com/@valkyriephysiotherapy9420" target="_blank" class="d-inline-block mx-1">
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

