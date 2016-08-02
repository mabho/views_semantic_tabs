/**
 * @file
 * Applies tabs on views semantic tabs display.
 */

(function ($, Drupal) {
  Drupal.behaviors.views_semantic_tabs = {
    attach: function (context) {
      $( ".views-semantic-tabs" ).tabs();
    }
  };
})(jQuery, Drupal);
