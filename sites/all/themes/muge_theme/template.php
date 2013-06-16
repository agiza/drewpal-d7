<?php

/**
 * @file
 * Primary theme functions file for NSCS 2013 theme.
 */

require 'preprocess.php';

/**
 * Implements hook_css_alter().
 */
function muge_theme_css_alter(&$css) {
  // Remove default menu styles.
  unset($css['modules/system/system.menus.css']);
}

/**
 * Override theme_field_collection_view().
 */
function muge_theme_field_collection_view($variables) {
  // We just return the inner content to avoid the wrappers.
  return $variables['element']['#children'];
}
