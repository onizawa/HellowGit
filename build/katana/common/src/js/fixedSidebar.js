(function(){
  'use strict';

  var $win = $(window);
  var breakPoint = 896;

  /**
  * deviceCheck
  **/
 var device;
 var ua = navigator.userAgent;
 if((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)) {
   device = 'sp';
 } else {
   device = 'pc';
 }

 if(device == 'sp') {
   return;
 }

  var FixedSidebar = (function() {
    function FixedSidebar(config) {
      this.target = config.target;
      this.content = config.content;
      this.btnArea = config.btnArea;
    }

    FixedSidebar.prototype.init = function(){
      var sideBar = $(this.target);
      var content = $(this.content);
      var btnArea = $(this.btnArea);

      $(window).on('load scroll', function(){
        var scrollTop =  $win.scrollTop();
        var positionTop = content.offset().top - ($('.header').height() + 25);
        var positionBotton = btnArea.offset().top;

        if(scrollTop > positionTop) {
          sideBar.addClass('fixed');
        } else {
          sideBar.removeClass('fixed');
        }

        if(scrollTop >= positionBotton - ($('.header').height() + 650)) {
          sideBar.addClass('stop');
        } else {
          sideBar.removeClass('stop');
        }
      });
    }

    return FixedSidebar;
  })();

  var targets = {
    target: '.sideBar',
    content: '.content__inner',
    btnArea: '.btnArea'
  };

  $(function() {
    var fixedSidebar = new FixedSidebar(targets);
    fixedSidebar.init();
  });

})();