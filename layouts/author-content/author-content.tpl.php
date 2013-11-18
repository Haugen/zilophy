<?php
/**
 * @file
 * Template for Zilophy Author Content.
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
<div class="author-content">
  <div class="image">
    <?php print $content['image']; ?>
  </div>
  <div class="description">
    <?php print $content['description']; ?>
  </div>
  <div class="publishinfo">
    <?php print $content['publishinfo']; ?>
  </div>
</div>
<?php
  if (!empty($class) || !empty($css_id)) {
    print '</div>';
  }
