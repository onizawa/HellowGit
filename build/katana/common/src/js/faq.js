(function(){
  'use strict';
  var question = $('.question');

  $(function(){
    question.on('click', function(){
      $(this).toggleClass('open');
      $(this).next('.answer').slideToggle();
    });
  });
})();