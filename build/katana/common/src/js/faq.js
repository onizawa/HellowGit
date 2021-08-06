(function(){
  'use strict';
  var question = $('.question');
  var $win = $(window);


  function faqTable(target,space) {
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
    question.on('click', function(){
      $(this).toggleClass('open');
      $(this).next('.answer').slideToggle();
      faqTable('.faqTable__inner',109);
    });
  });
})();