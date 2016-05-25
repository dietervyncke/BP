<?php
function ds_bannerheader() {
  return array(
    'label' => t('Banner Header'),
    'regions' => array(
      'figure' => t('Figure'),
      'figcaption' => t('Figcation'),
      'bannerView' => t('Banner View'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => FALSE,
  );
}
