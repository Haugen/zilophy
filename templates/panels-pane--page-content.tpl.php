<!-- panels-pane--page-content.tpl.php -->
<?php
if( !empty($pane->css['css_class']) ){
  $css_class = 'class="' . $pane->css['css_class'] .'"';
}else{
  $css_class = "";
}
if( !empty($pane->css['css_id']) ){
  $css_id = 'id="' . $pane->css['css_id'] .'"';
}else{
  $css_id = "";
}
?>
<?php if (!empty($css_class) || !empty($css_id)): ?>
<div <?php print $css_class ?> <?php print $css_id ?>>
  <?php print render($content); ?>
</div>
<?php else: ?>
  <?php print render($content); ?>
<?php endif; ?>

<!-- /panels-pane--page-content.tpl.php -->
