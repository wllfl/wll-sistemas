(function($) {

	"use strict";

  $('a.footer-top').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });
	

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

    // Envio de contato
    $('#Enviar').click(function(event) {
          var dados = $('#form-contato').serialize();

          $.ajax({
            url: 'envia_email.php',
            type: 'POST',
            data: dados,
            dataType: "json",
            success: function(data) {
              if(data.erro == "0"){
              $('.msg').html(data.mensagem).removeClass('erro').removeClass('alerta').addClass('sucesso');
            }else{
                            if(data.erro == "1"){
                                $('.msg').html(data.mensagem).removeClass('sucesso').removeClass('alerta').addClass('erro');
                            }else{
                  $('.msg').html(data.mensagem).removeClass('sucesso').removeClass('erro').addClass('alerta');
                            }
            }
            }
          });
    });  

})(jQuery);