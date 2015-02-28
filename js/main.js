$(document).ready(function() {

	$("span.menu").click(function(){
		$(".top-nav ul").slideToggle(500, function(){
		});
	});

	$('a.footer-top').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});

	/* Animação do container Menu */
	$(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $("#home").removeClass("animated-header");
        } else {
            $("#home").addClass("animated-header");
        }
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

	$(window).scroll(function(event) {
		Scroll();
	});

	// Função para alterar destaque do menu conforme scroll da página
	function Scroll() {
		var contentTop      =   [];
		var contentBottom   =   [];
		var winTop      =   $(window).scrollTop();
		var rangeTop    =   200;
		var rangeBottom =   500;
		$('.top-nav').find('.scroll a').each(function(){
			contentTop.push( $( $(this).attr('href') ).offset().top);
			contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
		})
		$.each( contentTop, function(i){
			if ( winTop > contentTop[i] - rangeTop ){
				$('.top-nav li.scroll')
				.removeClass('active')
				.eq(i).addClass('active');			
			}
		})
	};

	/* Menu Mobile */
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

    /* Popup de Login */
    $('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});	

    /* Carrosel para Destaque */
	$("#owl-destaque").owlCarousel({
	      autoPlay: true, 
	      items: 6,
	      responsive: true,
	      navigation: true,
	      pagination: true,
	      navigationText: ["",""],
	      itemsDesktop : [1000,1], 
	      itemsDesktopSmall : [900,1], 
	      itemsTablet: [600,1],
	      singleItem: true,
	      slideSpeed : 700,
		  paginationSpeed : 800,
		  navigationText: ["<i class='fa fa-angle-left fa-lg'></i>","<i class='fa fa-angle-right fa-lg'></i>"]
  	});

	 /* Carrosel para jogador */
  	$("#owl-jogador").owlCarousel({
       autoPlay: true, 
       items: 6,
       navigation: true,
       pagination: false,
       navigationText: ["",""],
       itemsDesktop : [1000,3], 
       itemsDesktopSmall : [900,3], 
       itemsTablet: [600,1], 
       navigationText: ["<i class='fa fa-angle-left fa-lg'></i>","<i class='fa fa-angle-right fa-lg'></i>"]
	});				

});


wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }
)
wow.init();