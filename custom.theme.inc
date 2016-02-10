<?php

use Drupal\Core\Template\Attribute;

/**
 * @file
 * Preprocessors and helper functions to make theming easier.
 */

function template_preprocess_views_view_custom_unformatted(&$variables) {
  $view = $variables['view'];
  $rows = $variables['rows'];
  $style = $view->style_plugin;
  $options = $style->options;

  $variables['selected_group'] = 'KKK';
  $variables['default_row_class'] = !empty($options['default_row_class']);
  foreach ($rows as $id => $____row) {
    $variables['rows'][$id] = array();

    $node = $____row['#node'];
    $tabvalue = $node->get($options['grouping'])->getValue()[0]['value'];
    $variables['rows'][$id]['tab'] = $tabvalue;

    $variables['rows'][$id]['content'] = $____row;
    $variables['rows'][$id]['attributes'] = new Attribute();
    if ($row_class = $view->style_plugin->getRowClass($id)) {
      $variables['rows'][$id]['attributes']->addClass($row_class);
    }
  }
}