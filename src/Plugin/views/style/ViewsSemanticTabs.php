<?php

/**
 * @file
 * Contains \Drupal\views\Plugin\views\style\HtmlList.
 */

namespace Drupal\views_semantic_tabs\Plugin\views\style;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render each item in an ordered or unordered list.
 *
 * @ViewsStyle(
 *   id = "views_semantic_tabs",
 *   title = @Translation("Semantic tabs"),
 *   help = @Translation("Configurable semantic tabs for views fields."),
 *   theme = "views_semantic_tabs_format",
 *   display_types = {"normal"}
 * )
 */
class ViewsSemanticTabs extends StylePluginBase {

  /**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */
  protected $usesRowPlugin = TRUE;

  /**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */
  protected $usesRowClass = TRUE;

  /**
   * Set default options
   */
  protected function defineOptions() {
    $options = parent::defineOptions();

    return $options;
  }

  /**
   * Render the given style.
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

  }

}
