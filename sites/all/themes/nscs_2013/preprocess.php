<?php

/**
 * @file
 * Preprocess functions for the NSCS 2013 theme.
 */

/**
 * Implements hook_preprocess_page().
 */
function nscs_2013_preprocess_page(&$vars) {
  // Add main menu header
  $vars['main_menu_title'] = t('Menu');
  // Add our main and utility menus.

  $vars['utility_menu_header'] = t('For Members');
  $vars['utility_menu'] = menu_tree_output(menu_tree_page_data('menu-utility-menu', 2));
  
  //create main menu
  $vars['main_menu_header'] = t('For Non-Members');
  $vars['main_menu'] = menu_tree_output(menu_tree_page_data('main-menu', 2));
  
  //add class to each top-level item to allow for icons
  foreach ($vars['main_menu'] as $key => $item) {
    if (substr($key,0,1) != '#') {
      $vars['main_menu'][$key]['#attributes']['class'][] = 'menu-' . 
        str_replace(' ', '-', strtolower($vars['main_menu'][$key]['#title']));
    }
  }
  
  // Create submenu if we are on a node.
  $vars['sub_menu_title'] = FALSE;
  if ($node = menu_get_object('node')) {
    $active_trail = menu_get_active_trail();
    //only show the submenu if we are in a 2nd-level page or deeper
    if (count($active_trail) > 2) {
      $ancestor_mlid = $active_trail[1]['mlid'];
      foreach ($vars['main_menu'] as $key => $item) {
        if ($key == $ancestor_mlid) {
          $vars['sub_menu_title'] = $item['#title'];
          $vars['sub_menu'] = $item['#below'];
          break;
        }
      }
    }
  }

  // Add meta tag needed for responsive layout.
  $viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1.0',
    ),
  );
  drupal_add_html_head($viewport, 'nscs_2013_viewport');
  drupal_add_library('nscs_global', 'flexnav', TRUE);
  
  $theme_path = drupal_get_path('theme', 'nscs_2013');
  drupal_add_js($theme_path . '/js/jquery.ui.widget.js', 
    array('scope' => 'footer', 'weight' => 1));
  drupal_add_js($theme_path . '/js/everywhere.js', 
    array('scope' => 'footer', 'weight' => 10));
  drupal_add_js($theme_path . '/js/jquery.selectBoxIt.min.js', 
    array('scope' => 'footer', 'weight' => 11));
}

