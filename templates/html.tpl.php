<?php
/**
 * @file
 * Override html template file
 *
 * External libraries = $lucid_lib
 */
?>

<?php print $doctype; ?>
<html <?php print $html_attributes . $rdf_namespaces; ?>>
<head<?php print $rdf->profile; ?>>
<?php print $head; ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php print $head_title; ?></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<?php print $styles; ?>
<?php print $scripts; ?>
<?php if(!empty($lucid_lib)): ?>
<!--[if lt IE 9]>
<?php foreach ($lucid_lib['ie'] as $result): ?>
          <script src="'<?php echo $result ?>'"></script>' . "\n";
      <?php endforeach; ?>
      ?>
    <![endif]-->
  <?php endif; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>