<?php

/**
 * Implements hook_preprocess_page().
 */
function recipes_preprocess_page(&$variables) {
  // You can use preprocess hooks to modify the variables before they are passed
  // to the theme function or template file.
  drupal_add_css('//fonts.googleapis.com/css?family=Anton', array('group' => CSS_THEME));
  drupal_add_css('//fonts.googleapis.com/css?family=Roboto:400,100', array('group' => CSS_THEME));
}