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

  /**
  * ブレークポイントの切り替え
  **/
  var pcWidth = 1190;
  var viewport = document.getElementsByName('viewport')[0];
  $(function(){
    $win.on('load', function() {
      if((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)){
        viewport.setAttribute('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no');
      } else {
        viewport.setAttribute('content', 'width=' + pcWidth);
      }
    });
  });

  /**
  * gNav
  **/
  var gNav = $('.gNav'),
    scheduleNav = $('.gNavList__item'),
    timer;

  function navOpne(){
    var $_self = $(this);
    timer = setTimeout(function(){
      $_self.addClass('open');
      $_self.find('.subNav').addClass('open');
    }, 300);
  }

  function navClose(){
    var $_self = $(this);
    $_self.removeClass('open');
    $_self.find('.subNav').removeClass('open');
    clearTimeout(timer);
  }

  function spNav() {
    var $winH = $win.height(),
      navBtn = $('.spNav__btn');
      gNav.height($winH - 70);

    navBtn.on('click', function(){
      $(this).parents('.spNav').toggleClass('open');
      gNav.slideToggle();
    });
  }

  if (device == 'pc') {
    scheduleNav.hover(navOpne,navClose);
  }

  $win.on('load', function(){
    if (device == 'sp') {
      spNav();
    }
  });

  /**
  * anchor
  **/
  $('a[href^="#"]').click(function() {
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - $('.header').height();
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });

  function scrollTable(target,space) {
    var timeoutScroll;

    $(target).scroll(function(){
      var _self = $(this);
      var position = _self.scrollLeft();
      var tableW =Math.floor(_self.find('table').outerWidth() - _self.outerWidth());

      _self.addClass('scroll');

      if (position >= tableW) {
        _self.addClass('end');
      } else {
        _self.removeClass('end');
      }

      clearTimeout(timeoutScroll);
      timeoutScroll = setTimeout( function () {
        _self.removeClass('scroll');
	    }, 500 ) ;
    });

    $win.on('load', function() {
      $(target).each(function(){
        var _self = $(this);

        if(_self.width() < $win.width() - space) {
          _self.addClass('arrow--hide');
        }
      });
    });
  }

  $(function(){
    scrollTable('.scheduleTable__inner',64);
    scrollTable('.materialTable__inner',64);
    scrollTable('.stainTable__inner',64);
    scrollTable('.sinteringTable__inner',64);
  });
})();