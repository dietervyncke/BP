(function ($) {
// Store our function as a property of Drupal.behaviors
    Drupal.behaviors.imageSwap = {
        attach: function (context, settings) {
         AdaptiveBackgrounds();
        }
    }
}(jQuery));

