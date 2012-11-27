(function ($) {
  Drupal.behaviors.atheadliner_egp = {
    attach: function(context) {
      $('#tripanel .block-inner').equalHeight();
      $('#bipanel .block-inner').equalHeight();
      $('#tripanel-2 .block-inner').equalHeight();
      $('#tripanel-3 .block-inner').equalHeight();
      $('#footerpanel .block-inner').equalHeight();
    }
  };
})(jQuery);