(function ($) {
  Drupal.behaviors.NavigationButtonToggle = {
    attach: function (context, settings) {
      var navigation = $('.navigation-left');
      $('.navbar-toggle', context).click(function () {
        navigation.toggleClass('collapse');
      });
    }
  };
})(jQuery);
