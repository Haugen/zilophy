<?php
/**
 * @file
 * Template for Zilophy Two Column.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<?php
  $wrapper = array();
  if (!empty($class) || !empty($css_id)) {
    $wrapper[] = '<div';
    if (!empty($class)) {
      $wrapper[] = 'class="' . $class . '"';
    }
    if (!empty($css_id)) {
      $wrapper[] = 'id="' . $css_id . '"';
    }
  }
  if (!empty($wrapper)) print implode(' ', $wrapper) . '>';
?>
<?php if (!empty($content['content_top'])) : ?>
  <div class="content-top">
    <?php print $content['content_top']; ?>
  </div>
<?php endif; ?>
<?php if (!empty($content['content'])) : ?>
  <div class="content container">
    <?php print $content['content']; ?>
  </div>
<?php endif; ?>
<?php
  if (!empty($class) || !empty($css_id)) {
    print '</div>';
  }