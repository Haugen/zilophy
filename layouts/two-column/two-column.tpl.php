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
  <div class="content">
    <?php print $content['content']; ?>
  </div>
  <div class="sidebar">
    <?php print $content['sidebar']; ?>
  </div>
<?php
  if (!empty($class) || !empty($css_id)) {
    print '</div>';
  }