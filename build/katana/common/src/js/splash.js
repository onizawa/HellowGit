(function(){
  'use strict';
  var $win = $(window);
  var body = $('body');
  var splash = $('.splash');

  $win.on('load', function(){
    setTimeout( function () {
      splash.fadeOut(2000);
    }, 2000 ) ;

    setTimeout( function () {
      body.removeClass('fixed');
    }, 4000 ) ;
  });


  // function setCount(n){
  //   var theDay = 30;
  //   var setDay = new Date();
  //   setDay.setTime(setDay.getTime()+(theDay*1000*60*60*24));
  //   var expDay = setDay.toGMTString();
  //   document.cookie="count="+n+";expires="+expDay;
  // }

  // function getCount() {
  //   var theName = "count=";
  //   var theCookie = document.cookie + ";"
  //   var start = theCookie.indexOf(theName);
  //   if(start !=-1){
  //     var end = theCookie.indexOf(";",start);
  //     var count = eval(unescape(theCookie.substring(start+theName.length,end)));
  //     console.log(count + "Time Visit");
  //     setCount(count+1);
  //   } else {
  //     console.log("Welcome, First Time Visit！");
  //     setCount(2);
  //   }
  // }
  // getCount();
})();