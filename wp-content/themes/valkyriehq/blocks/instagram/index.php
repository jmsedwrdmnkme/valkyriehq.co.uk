<?php
  /**
   * Instagram Block Template.
   */

  $title = get_field('title');
?>
<div class="component__instagram py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center h2 display-5"><?php echo $title; ?> <a href="//instagram.com/valkyriehq" target="_blank">@valkyriehq</a></div>
      <div class="col-12 mt-4">
        <div class="bg-secondary py-5">
          <div class="p-5 m-4 text-center">
            Instagram feed
          </div>
        </div>
      </div>
      <div class="col-12 text-center mt-4">
        <a href="#" target="_blank" class="d-inline-block mx-1">
          <svg width="40" height="40">
            <use xlink:href="#facebook">
          </svg>
        </a>
        <a href="#" target="_blank" class="d-inline-block mx-1">
          <svg width="40" height="40">
            <use xlink:href="#twitter">
          </svg>
        </a>
        <a href="#" target="_blank" class="d-inline-block mx-1">
          <svg width="40" height="40">
            <use xlink:href="#instagram">
          </svg>
        </a>
        <a href="#" target="_blank" class="d-inline-block mx-1">
          <svg width="40" height="40">
            <use xlink:href="#youtube">
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

