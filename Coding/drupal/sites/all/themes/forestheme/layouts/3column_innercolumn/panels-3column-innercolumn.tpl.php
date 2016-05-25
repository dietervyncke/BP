<?php
/**
 * @file
 * Template for the 1 column panel layout.
 *
 * This template provides a three column 25%-50%-25% panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['middle']: Content in the middle column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="panel-display panel-3col-33-stacked  clearfix" <?php
if (!empty($css_id)) {
    print "id=\"$css_id\"";
}
?>>
<?php if ($content['top']): ?>
        <div class="panel-top">
            <div><?php print $content['top']; ?></div>
        </div>
<?php endif ?>

    <div class="panel-center-wrapper-3column">
        <div class="panel-left-column">
            <div class="panel-left-header"><?php print $content['left-column-header']; ?></div>
            <div class="panel-left-left">
                <?php print $content['left-left-column']; ?>
            </div>
            <div class="panel-left-footer"><?php print $content['left-column-footer']; ?></div>
        </div>
        <div class="panel-middle-column">
            <?php print $content['middle']; ?>
        </div>
        <div class="panel-right-column">
          <div class="panel-top-right-row">
            <div class="panel-top-row-left">
              <?php print $content['right-column-top-left']; ?>
            </div>
            <div class="panel-top-row-right">
              <?php print $content['right-column-top-right']; ?>
            </div>
          </div>
          <div class="panel-bottom-right-row">
            <div class="panel-bottom-row-left">
              <?php print $content['right-column-bottom-left']; ?>
            </div>
            <div class="panel-bottom-row-right">
              <?php print $content['right-column-bottom-right']; ?>
            </div>
          </div>
        </div>
    </div>
</div>
