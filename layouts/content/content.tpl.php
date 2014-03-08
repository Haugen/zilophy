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
<article>
<?php if (!empty($content['content_top'])) : ?>
  <div class="content-top">
    <section class="top">
      <?php print $content['content_top']; ?>
    </section>
  </div>
<?php endif; ?>
<?php if (!empty($content['content'])) : ?>
  <div class="content">
    <?php print $content['content']; ?>
  </div>
<?php endif; ?>
</article>
<?php
  if (!empty($class) || !empty($css_id)) {
    print '</div>';
  }
