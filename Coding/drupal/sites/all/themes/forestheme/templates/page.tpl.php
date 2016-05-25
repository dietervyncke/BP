<?php
/**
* @file
* Returns the HTML for a single Drupal page.
*
* Complete documentation for this file is available online.
* @see https://drupal.org/node/1728148
*/
?>

<div id="page-wrap">

  <header class="page-header">

    <nav class="main-nav" role="navigation">
      <?php
      $menu = menu_navigation_links('menu-hoofdmenu');
      print theme('links', array(
        'links' => $menu,
        'attributes' => array(
          'class' => 'nav-wrap',
        ),
        'heading' => array(
          'text' => t('User menu'),
          'level' => 'h2',
          'class' => array('element-invisible'),
        ),
      ));
      ?>
    </div>

  </header>

  <div class="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php // if ($title): ?>
        <!--<h1 class="page__title title" id="page-title"><?php // print $title;    ?></h1>-->
        <?php // endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div>


      <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
      ?>

      <?php if ($sidebar_first || $sidebar_second): ?>
        <aside class="sidebars">
          <?php print $sidebar_first; ?>
          <?php print $sidebar_second; ?>
        </aside>
      <?php endif; ?>

    </div>

    <div class="page-footer">
      <div class="footer-wrapper">

        <div class="va-wrap">
          <div class="va-m">

            <?php print render($page['left-footer']); ?>
            <div class="footer-right">
              <?php print render($page['right-footer']); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="copyright">
    &copy; copyright Foré - 2016
  </div>







</div>

<?php print render($page['bottom']); ?>
