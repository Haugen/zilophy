<?php
/**
 * @file
 * Definition of Lucid site template layout.
 */

$plugin = array(
  'title' => t('Site template'),
  'theme' => 'site-template',
  'icon' => 'site-template.png',
  'category' => 'Zilophy',
  'regions' => array(
    'branding_left' => t('Branding left'),
    'branding_right' => t('Branding right'),
    'content_top' => t('Content top'),
    'content' => t('Content'),
    'content_bottom' => t('Content bottom'),
    'closure' => t('Closure'),
    'closure_bottom' => t('Closure bottom'),
    'nav' => t('Navigation'),
  ),
);
