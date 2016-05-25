<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <figure class="banner-image-wrapper">
  	<div class="image">
  		<?php print $figure; ?>
  	</div>
  	<figcaption class="banner-image">
  		<div class="container">
  			<div class="desc">
  				<?php print $figcaption; ?>
  			</div>
  		</div>
  	</figcaption>
  </figure>

  <?php print $bannerView; ?>

</<?php print $layout_wrapper ?>>
