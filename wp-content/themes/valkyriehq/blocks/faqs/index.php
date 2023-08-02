<?php
  /**
   * FAQs Block Template.
   */
?>
<div class="component__faqs py-5">
  <div class="container text-center">
    <h2 class="display-5">FAQs</h2>
  </div>
  <?php if(have_rows('faqs')) : ?>
    <div class="container-fluid mt-1 mb-3">
      <div class="accordion accordion-flush" id="accordionFaqs">
        <?php while(have_rows('faqs')) : the_row();
          $question = get_sub_field('question');
          $answer = get_sub_field('answer');
        ?>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
