<?php

/**
 * @file
 * Contains \Drupal\custom\Plugin\views\style\CustomDefaultStyle.
 */

namespace Drupal\custom\Plugin\views\style;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Custom Unformatted style plugin to render rows one after another with no
 * decorations.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "custom_default",
 *   title = @Translation("Custom Unformatted list"),
 *   help = @Translation("Displays rows one after another."),
 *   theme = "views_view_custom_unformatted",
 *   display_types = {"normal"}
 * )
 */
class CustomDefaultStyle extends StylePluginBase {

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
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();

    $options['grouping'] = array('default' => array());
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);
    $options = array('' => $this->t('- None -'));
    $field_labels = $this->displayHandler->getFieldLabels(TRUE);
    $options += $field_labels;
    $grouping = $this->options['grouping'];
    $form['grouping'] = array(
      '#type' => 'select',
      '#title' => $this->t('Grouping field Nr.@number'),
      '#options' => $options,
      '#default_value' => $grouping,
      '#description' => $this->t('You may optionally specify a field by which to group the records. Leave blank to not group.'),
    );
    $a = '';
  }

}
