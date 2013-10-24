(function ($) {
  Drupal.behaviors.NavigationButtonToggle = {
    attach: function (context, settings) {
      $('.navigation-toggle', context).click(function () {
        if ($('.navigation').hasClass('expanded')) {
          $('.navigation').removeClass('expanded').addClass('collapsed');
        } else {
          $('.navigation').removeClass('collapsed').addClass('expanded');
        }
      });
    }
  }
})(jQuery)