<?php
  /**
   * FAQs Block Template.
   */
?>
<div class="component__faqs py-5">
  <div class="container text-center">
    <h2 class="display-5">FAQs</h2>
  </div>
  <?php if(have_rows('faqs')) :
    $counter = 0;
  ?>
    <div class="container mt-5 mb-3">
      <div class="row justify-content-center">
        <div class="accordion accordion-flush col-lg-10 mt-3" id="accordionFaqs">
          <?php while(have_rows('faqs')) : the_row();
            $question = get_sub_field('question');
            $answer = get_sub_field('answer');
          ?>
            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $counter; ?>" aria-expanded="false" aria-controls="flush-collapse-<?php echo $counter; ?>">
                  <?php echo $question; ?>
                </button>
              </h3>
              <div id="flush-collapse-<?php echo $counter; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
                <div class="accordion-body">
                  <?php echo $answer; ?>
                </div>
              </div>
            </div>
            <?php $counter++; ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
