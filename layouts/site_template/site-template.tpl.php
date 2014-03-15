<?php
/**
 * @file
 * This layout is intended to be used inside the page content pane. Thats why
 * there is not wrapper div by default.
 */
?>

<div id="page">
  <header role="banner">
    <nav class="navbar navbar navbar-default">
      <div class="container">
      <?php if (!empty($content['branding_left'])): ?>
        <div class="navbar-header">
        <button type="button" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <?php print render($content['branding_left']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($content['nav'])): ?>
        <div class="collapse navbar-collapse navigation-left" role="navigation">
          <?php print render($content['nav']); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($content['branding_right'])): ?>
        <div class="navbar-right">
          <?php print render($content['branding_right']); ?>
        </div>
      <?php endif; ?>
    </div>
    <?php if (!empty($content['subnav'])): ?>
      <div class="sub-navigation" role="navigation">
        <div class="container">
          <?php print render($content['subnav']); ?>
        </div>
      </div>
<?php endif; ?>
  </div>
  </header>

  <?php if (!empty($content['content_top'])): ?>
    <div role="content" class="content-top">
      <div class="container">
        <?php print render($content['content_top']); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['content'])): ?>
    <div role="content" class="main-content">
      <?php print render($content['content']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['closure'])): ?>
    <footer role="footer">
  <div class="closure">
    <div class="container">
        <?php print render($content['closure']); ?>
  </div>
  </div>

    <?php if (!empty($content['closure_bottom'])): ?>
    <div class="closure-bottom" role="footer">
      <div class="container">
        <?php print render($content['closure_bottom']); ?>
      </div>

<?php endif; ?>
  </footer>
  <?php endif; ?>
</div>