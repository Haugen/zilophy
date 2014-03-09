<?php

function zilophy_menu_tree($variables) {
  return '<ul class="nav">' . $variables['tree'] . '</ul>';
}

/**
 * Uses RDFa attributes if the RDF module is enabled.
 * Lifted from Adaptivetheme for D7, full credit to Jeff Burnz.
 * ref: http://drupal.org/node/887600
 */
function zilophy_preprocess_html(&$vars) {
  global $language;

  // First check if libraries module exists.
  // Look for html5 and responsive js files for IE. Use them if found, else
  // use external source.
  if (module_exists('libraries', 1.0)) {
    $respond_path = libraries_get_path('Respond') . '/respond.min.js';
    $html5_path = libraries_get_path('html5') . '/html5.js';
    $vars['lucid_lib']['ie']['respond_path'] = file_exists($respond_path) ? base_path() . $respond_path : 'https://raw.github.com/scottjehl/Respond/master/respond.min.js';
    $vars['lucid_lib']['ie']['html5_path'] = file_exists($html5_path) ? base_path() . $html5_path : 'http://html5shim.googlecode.com/svn/trunk/html5.js';
  }
  if (module_exists('rdf')) {
    $vars['doctype'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML+RDFa 1.1//EN">' . "\n";
    $vars['rdf']->version = 'version="HTML+RDFa 1.1"';
    $vars['rdf']->namespaces = $vars['rdf_namespaces'];
    $vars['rdf']->profile = ' profile="' . $vars['grddl_profile'] . '"';
  }
  else {
    $vars['doctype'] = '<!DOCTYPE html>' . "\n";

    if (!isset($vars['rdf'])) {
      $vars['rdf'] = new stdClass();
    }

    $vars['rdf']->version = '';
    $vars['rdf']->namespaces = '';
    $vars['rdf']->profile = '';
  }

  // Attributes for html element.
  $vars['html_attributes'] = 'lang="' . $language->language . '" dir="' . $language->dir . '"';
}