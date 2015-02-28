(function($) {

	"use strict";
	

  /* Plugin para efeito de navegação do menu */
  $('.one-page').singlePageNav({
    offset: jQuery('.one-page').outerHeight(),
    threshold: 120,
    filter: ':not(.external)',
    speed: 2000,
    currentClass: 'current',
    easing: 'easeInOutExpo',
    updateHash: true,
    beforeStart: function() {
      console.log('begin scrolling');
    },
    onComplete: function() {
      console.log('done scrolling');
    }
  });


	

    $(window).scroll(function(){
         $('.site-header').toggleClass('scrolled', $(this).scrollTop() > 1);
     });



    //mobile menu and desktop menu
    $("#responsive-menu").css({"right":-1500});
    $("#mobile_menu").click(function(){
            $("#responsive-menu").show();
            $("#responsive-menu").animate({"right":0});
            return false;
    });
    $(window).on("load resize", function(){
            if($(window).width()>768){
                $("#responsive-menu").css({"right":-1500});
            }
    });

    $("#responsive-menu a").click(function(){
      $("#responsive-menu").hide();
    });  

})(jQuery);