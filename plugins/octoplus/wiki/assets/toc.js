$(function() {
  var navSelector = '#toc';
  var $myNav = $(navSelector);
  Toc.init($myNav);
  $('body').scrollspy({
    target: navSelector
  });
  $myNav.children('ul').affix({
    offset: {
      top: $myNav.offset().top
    }
  });
});
