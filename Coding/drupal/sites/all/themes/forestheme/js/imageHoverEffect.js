(function ($) {
// Store our function as a property of Drupal.behaviors
    Drupal.behaviors.imageSwap = {
        attach: function (context, settings) {
         $('.medewerkerImage img').hover(
         function () {
            src = $(this).attr('src');
            $(this).attr('src', src.replace('filtered', 'normal'));
         }, 
         function () {
            $(this).attr('src', src.replace('normal', 'filtered'));
         }
       );
        }
    }
}(jQuery));


