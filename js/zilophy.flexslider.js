(function ($) {
  Drupal.behaviors.ZilophyFlexslider = {
    attach: function (context, settings) {
      var pages = [];

      pages.push({
        attachto: '.content-top .flexslider',
        selector: '.slides > .slide'
      });

      $.each(pages, function(i, o) {
        $(o.attachto, context).flexslider({
          selector: o.selector,
          animation: "slide",
          slideshow: false
        });
      });
    }
  }
})(jQuery)