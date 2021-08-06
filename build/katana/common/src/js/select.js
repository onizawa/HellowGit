(function(){
  'use strict';

  var Refine = (function() {

    var CLASS = {
      show : 'show',
      active : 'active',
      hide : 'hide'
    }

    var $win = $(window);

    function Refine(config) {
      this.check1 = config.check1;
      this.check2 = config.check2;
      this.check3 = config.check3;
    }

    Refine.prototype.init = function(){
      var _self = this;
      var check1 = $(this.check1);
      var check2 = $(this.check2);
      var check3 = $(this.check3);
      var color;

      $win.on('load', function(){
        $('html,body').animate({ scrollTop: 0 }, '1');
      });

      check1.on('click', function(){
        check1.prop('checked', false);
        $(this).prop('checked', true);

        _self.addActive($('.selectList__item'),$(this));

        $('.section--shade').removeClass('no--select');

        _self.sideBarReset();

        _self.sideBarShow('.choice--prep .choice__pic','.choice--prep .choice__name',$(this));

        setTimeout(function(){
          $("html,body").animate({scrollTop:$('.section--shade').offset().top - $('.header').height()});
        },300);

        color = $(this).data('color');

        check2.each(function(i){
          $(this).parents('.selectList__item').removeClass(CLASS.show);
          var arr = check2.eq(i).data('arr');

          for(var j = 0; j < arr.length; j++) {
            if(color == arr[j]) {
              $(this).parents('.selectList__item').addClass(CLASS.show);
            }
          }
        });

        $('.selectList__name').find('sup').remove();
        $('.zilconia__notes').removeClass('is--show');
      });

      check2.on('click', function(){
        check2.prop('checked', false);
        $(this).prop('checked', true);

        _self.addActive($('.section--shade .selectList__item'),$(this));

        $('.section--zilconia').removeClass('no--select');

        _self.sideBarShow('.choice--target .choice__pic','.choice--target .choice__name',$(this));

        $('.section--zilconia .selectList__item').removeClass(CLASS.active);
        $('.choice--zirconia .choice__pic').find('img').attr('src','/katana/common/img/color_simulation/img_noSelect.png');
        $('.choice--zirconia .choice__name').text('????');

        $('.btn__next').removeClass(CLASS.active);

        setTimeout(function(){
          $("html,body").animate({scrollTop:$('.section--zilconia').offset().top - $('.header').height()});
        },300);

        var shade = $(this).data('shade');

        check3.each(function(i){
          $(this).parents('.selectList__item').addClass(CLASS.hide);
          $(this).parents('.selectList__item').removeClass(CLASS.show);
          var zilconia = check3.eq(i).data('zilconia');

          for(var j = 0; j < zilconia.length; j++) {
            if(color + "-" + shade == zilconia[j]) {
              $(this).parents('.selectList__item').removeClass(CLASS.hide);
              $(this).parents('.selectList__item').addClass(CLASS.show);
            }
          }
        });

        $('.zilconia__notes').removeClass('is--show');

        _self.notes(_self,$('.section--color input[type="checkbox"]:checked'),$(this).prop('checked', true));
      });

      check3.on('click', function(){
        check3.prop('checked', false);
        $(this).prop('checked', true);

        _self.addActive($('.section--zilconia .selectList__item'),$(this));

        _self.sideBarShow('.choice--zirconia .choice__pic','.choice--zirconia .choice__name',$(this));

        $('.btn__next').addClass(CLASS.active);
      });

      $('.section--shade .selectBox__headline').on('click', function(){
        $(this).toggleClass('open');
        $(this).next('.selectBox__inner').slideToggle();
      });

      _self.reset();
    }

    Refine.prototype.reset = function(){
      var _self = this;
      var check = $('input[type="checkbox"]');

      $('.btn__clear').on('click', function(){
        check.prop('checked', false);

        $('.selectList__item').removeClass(CLASS.active);

        $('.selectList__item').removeClass(CLASS.show);

        $('.btn__next').removeClass(CLASS.active);

        _self.sideBarReset();

        $("html,body").animate({scrollTop:$('.section--color').offset().top - $('.header').height()});
      });
    }

    Refine.prototype.sideBarShow = function(pic, name, $_self){
      var activeImg = $_self.next('.selectList__pic').find('img').attr('src');
      $(pic).find('img').attr('src',activeImg);
      // $(name).text($_self.val());
      $(name).html($_self.nextAll('.selectList__name').html());
    }

    Refine.prototype.sideBarReset = function(){
      $('.section--shade .selectList__item').removeClass(CLASS.show);
      $('.section--zilconia .selectList__item').removeClass(CLASS.show);
      $('.section--zilconia .selectList__item').removeClass(CLASS.hide);
      $('.choice__pic').find('img').attr('src','/katana/common/img/color_simulation/img_noSelect.png');
      $('.choice__name').text('????');
    }

    Refine.prototype.addActive = function(target,$_self){
      target.removeClass(CLASS.active);
      $_self.parents('.selectList__item').addClass(CLASS.active);
    }

    Refine.prototype.notes = function(_self, target1,target2){
      var color = target1.data('color');
      var shade = target2.data('shade');

      var supAdd = function(target) {
        $(target).find('sup').remove();
        $(target).append('<sup>※</sup>');
        $('.zilconia__notes').addClass('is--show');
      }

      if(color == 'dark' && shade == 'nw0.5') {
        supAdd('.notes--nw0-5');
      } else if(color == 'dark' && shade == 'a1' || color == 'metal' && shade == 'a1') {
        supAdd('.notes--a1');
      } else if(color == 'dark' && shade == 'np1.5' || color == 'metal' && shade == 'np1.5') {
        supAdd('.notes--np1-5');
      } else if(color == 'dark' && shade == 'a2' || color == 'metal' && shade == 'a2') {
        supAdd('.notes--a2');
      } else if(color == 'dark' && shade == 'np2.5' || color == 'metal' && shade == 'np2.5') {
        supAdd('.notes--np2-5');
      } else if(color == 'dark' && shade == 'a3' || color == 'metal' && shade == 'a3') {
        supAdd('.notes--a3');
      } else if(color == 'dark' && shade == 'a3.5' || color == 'metal' && shade == 'a3.5') {
        supAdd('.notes--a3-5');
      } else if(color == 'dark' && shade == 'a4' || color == 'metal' && shade == 'a4') {
        supAdd('.notes--a4');
      } else if(color == 'dark' && shade == 'b1' || color == 'metal' && shade == 'b1') {
        supAdd('.notes--b1');
      } else if(color == 'dark' && shade == 'b2' || color == 'metal' && shade == 'b2') {
        supAdd('.notes--b2');
      } else if(color == 'dark' && shade == 'b3' || color == 'metal' && shade == 'b3') {
        supAdd('.notes--b3');
      } else if(color == 'dark' && shade == 'b4' || color == 'metal' && shade == 'b4') {
        supAdd('.notes--b4');
      } else if(color == 'dark' && shade == 'c1' || color == 'metal' && shade == 'c1') {
        supAdd('.notes--c1');
      } else if(color == 'dark' && shade == 'c2' || color == 'metal' && shade == 'c2') {
        supAdd('.notes--c2');
      } else if(color == 'dark' && shade == 'c3' || color == 'metal' && shade == 'c3') {
        supAdd('.notes--c3');
      } else if(color == 'medium' && shade == 'c4' || color == 'dark' && shade == 'c4' || color == 'metal' && shade == 'c4') {
        supAdd('.notes--c4');
      } else if(color == 'dark' && shade == 'd2' || color == 'metal' && shade == 'd2') {
        supAdd('.notes--d2');
      } else if(color == 'dark' && shade == 'd3' || color == 'metal' && shade == 'd3') {
        supAdd('.notes--d3');
      } else if(color == 'dark' && shade == 'd4' || color == 'metal' && shade == 'd4') {
        supAdd('.notes--d4');
      }
    }


    return Refine;
  })();

  var targets = {
    check1: '.section--color input[type="checkbox"]',
    check2: '.section--shade input[type="checkbox"]',
    check3: '.section--zilconia input[type="checkbox"]',
  };

  $(function() {
    var refine = new Refine(targets);
    refine.init();
  });

}());