<?php
/**
 * @file
 * Plugin definition for Versatile two column layout.
 */

$plugin = array(
  'title' => t('Versatile two columns'),
  'theme' => 'versatile_html5_column_two',
  'icon' => 'versatile-html5-column-two.png',
  'admin css' => 'versatile_html5_column_two.css',
  'category' => 'Versatile (HTML5)',
  'regions' => array(
    'main_alpha' => t('Main alpha'),
    'column_first_alpha' => t('Alpha column one'),
    'column_second_alpha' => t('Alpha column two'),
    'main_beta' => t('Main beta'),
    'column_first_beta' => t('Column one beta'),
    'column_second_beta' => t('Column two beta'),
  ),
);