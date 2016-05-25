<?php

/**
 * @file
 * Display Suite 2 column template.
 */
?>
<div class="container">
  <<?php print $layout_wrapper; print $layout_attributes; ?> class="row realisatie-detail">

    <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
    <?php endif; ?>

    <<?php print $left_wrapper ?> class="one-third">
      <?php print $left; ?>
    </<?php print $left_wrapper ?>>

    <<?php print $right_wrapper ?> class="two-third">
      <div class="isotope">
        <?php print $right; ?>
      </div>
    </<?php print $right_wrapper ?>>

  </<?php print $layout_wrapper ?>>

  <?php if (!empty($drupal_render_children)): ?>
    <?php print $drupal_render_children ?>
  <?php endif; ?>

</div>
