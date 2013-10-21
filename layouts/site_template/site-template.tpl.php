<?php
/**
 * @file
 * This layout is intended to be used inside the page content pane. Thats why
 * there is not wrapper div by default.
 */
?>

<div id="page">

  <header class="branding" role="banner">
    <div class="container">
      <?php if (!empty($content['branding_left'])): ?>
        <div class="branding-left">
          <?php print render($content['branding_left']); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($content['nav'])): ?>
        <div class="navigation" role="navigation">
          <?php print render($content['nav']); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($content['branding_right'])): ?>
        <div class="branding-right">
          <?php print render($content['branding_right']); ?>
        </div>
      <?php endif; ?>
    </div>
  </header>

  <?php if (!empty($content['content_top'])): ?>
    <div role="main_top" class="main-content-top">
      <div class="container">
        <?php print render($content['content_top']); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['content'])): ?>
    <div role="main" class="main-content">
      <div class="container">
        <?php print render($content['content']); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['content_bottom'])): ?>
    <div role="main_bottom" class="main-content-bottom">
      <div class="container">
        <?php print render($content['content_bottom']); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['closure'])): ?>
    <footer class="closure" role="footer">
      <div class="container">
        <?php print render($content['closure']); ?>
      </div>
    </footer>
  <?php endif; ?>
  <?php if (!empty($content['closure_bottom'])): ?>
    <footer class="closure-bottom" role="footer_bottom">
      <div class="container">
        <?php print render($content['closure_bottom']); ?>
      </div>
    </footer>
  <?php endif; ?>
</div>