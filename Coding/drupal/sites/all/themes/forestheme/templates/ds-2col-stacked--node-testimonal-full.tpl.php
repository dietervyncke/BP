<?php

/**
 * @file
 * Display Suite 2 column stacked template.
 */
?>
<div class="container">
  <<?php print $layout_wrapper; print $layout_attributes; ?> class="row testimonial-detail">

    <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
    <?php endif; ?>

    <<?php print $left_wrapper ?> class="one-half">
      <?php print $left; ?>
    </<?php print $left_wrapper ?>>

    <<?php print $right_wrapper ?> class="one-half">
      <?php print $right; ?>
    </<?php print $right_wrapper ?>>

  </<?php print $layout_wrapper ?>>

  <<?php print $footer_wrapper ?> class="isotope">
    <?php print $footer; ?>
  </<?php print $footer_wrapper ?>>


  <?php if (!empty($drupal_render_children)): ?>
    <?php print $drupal_render_children ?>
  <?php endif; ?>
</div>
