(function($) { 
    "use strict";


    /*-------------------------------------------
    	01. jQuery MeanMenu
    --------------------------------------------- */
    $('nav#mobile_dropdown').meanmenu({
        meanMenuContainer: '.mobile-menu-area',
        meanMenuCloseSize: "18px",
        meanScreenWidth: "991"
    });

    /*-------------------------------------------
        02. Selectpicker
    --------------------------------------------- */
    $('.selectpicker').selectpicker();
    
    /*-------------------------------------------
        03. Datepicker
    --------------------------------------------- */
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });
    /*-------------------------------------------
        04. wow js 
    --------------------------------------------- */
    new WOW().init();

    /*-------------------------------------------
        05. ScrollUp jquery
    --------------------------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'slide'
    });

    /*-------------------------------------------
        06. Tooltip
    --------------------------------------------- */
    $('[data-toggle="tooltip"]').tooltip();

    /*-------------------------------------------
        07. Ticker
    --------------------------------------------- */
    $('#bkn').ticker({ 
        effect: 'fadeIn',
        interval: 3000,
        controls: false, 
        duration: 400
    });

    /*-------------------------------------------
        08. owl carosel 1
    --------------------------------------------- */
    var owl = $('.owl-active-1');
    owl.owlCarousel({
        items:5,
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:2,
        },
        768 : {
            items:2,
        },
        992 : {
            items:3,
        },
        1167 : {
            items:4,
        },
        1366 : {
            items:4,
        },
        1400 : {
            items:5,
        }
    }
    });

    /*-------------------------------------------
        09. owl carosel 2
    --------------------------------------------- */
    var owl = $('.owl-active-2');
    owl.owlCarousel({
        items:5,
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:2,
        },
        768 : {
            items:2,
        },
        992 : {
            items:3,
        },
        1167 : {
            items:3,
        },
        1366 : {
            items:4,
        },
        1400 : {
            items:4,
        }
    }
    });


    /*-------------------------------------------
        10. owl carosel 3
    --------------------------------------------- */
    var owl = $('.owl-active-3');
    owl.owlCarousel({
        items:3,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        nav:true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        lazyLoad:true,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:1,
        },
        768 : {
            items:2,
        },
        992 : {
            items:3,
        },
        1167 : {
            items:3,
        },
        1366 : {
            items:3,
        },
        1400 : {
            items:3,
        }
    }
    });


    /*-------------------------------------------
        11. owl carosel 4
    --------------------------------------------- */
    var owl = $('.owl-active-4');
    owl.owlCarousel({
        items:4,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        nav:true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        lazyLoad:true,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:1,
        },
        768 : {
            items:2,
        },
        992 : {
            items:3,
        },
        1167 : {
            items:4,
        },
        1366 : {
            items:4,
        },
        1400 : {
            items:4,
        }
    }
    });

    /*-------------------------------------------
       12. owl carosel sin pro nav
    --------------------------------------------- */
    var owl = $('.zm-sin-por-nav');
    owl.owlCarousel({
        items:5,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        nav:false,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        lazyLoad:true,
        responsive : {
        0 : {
            items:2,
        },
        480 : {
            items:2,
        },
        768 : {
            items:3,
        },
        992 : {
            items:4,
        },
        1167 : {
            items:5,
        },
        1366 : {
            items:5,
        },
        1400 : {
            items:5,
        }
    }
    });

    /*-------------------------------------------
        13. Change active
    --------------------------------------------- */
      $('.zm-sin-por-nav .zm-sin-pro').on('click', function () {
          $('.zm-sin-por-nav .zm-sin-pro').removeClass('is-select');
          $(this).addClass('is-select');
      });

    /*-------------------------------------------
        14. owl carosel trending post img 
    --------------------------------------------- */
    var owl = $('.owl-trending');
    owl.owlCarousel({
        items:1,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:true,
        nav:false,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        lazyLoad:true,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:1,
        },
        768 : {
            items:1,
        },
        992 : {
            items:1,
        },
        1167 : {
            items:1,
        },
        1366 : {
            items:1,
        },
        1400 : {
            items:1,
        }
    }
    });

    /*-------------------------------------------
        15. owl carosel mega menu
    --------------------------------------------- */
    var owl = $('.mega-caro-wrap');
    owl.owlCarousel({
        items:4,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        nav:true,
        navText: [' <span class="prev page-numbers" >Previous</span> ','<span class="next page-numbers" >Next</span> '],
        lazyLoad:true,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:2,
        },
        768 : {
            items:3,
        },
        992 : {
            items:3,
        },
        1167 : {
            items:4,
        },
        1366 : {
            items:4,
        },
        1400 : {
            items:4,
        }
    }
    });

    /*-------------------------------------------
        16. Youtube Video
    --------------------------------------------- */

    $(".video-activetor").YouTubePopUp({
        autoplay: 1 
    });

    /*-------------------------------------------
        17. Login wrapper
    --------------------------------------------- */
    $('.login-btn').on('click', function(){
        if($(this).siblings('.login-form-wrap').hasClass('active')){
            $(this).siblings('.login-form-wrap').removeClass('active').slideUp();
            $(this).removeClass('active');
        }
        else{
            $('.login-btn .login-form-wrap').removeClass('active').slideUp();
            $(this).addClass('active');
            $(this).siblings('.login-form-wrap').addClass('active').slideDown();
        }
    });

    /*-------------------------------------------
        18. Search
    --------------------------------------------- */
    $('.search-btn').on('click', function(){
        if($(this).siblings('.search-form').hasClass('active')){

            $(this).siblings('.search-form').removeClass('active').slideUp();
            $(this).removeClass('active');

            if ( $(this).find("i").hasClass('fa-search')){
                $(this).find("i").removeClass('fa-search').addClass('fa-times');
              }else{
                $(this).find("i").removeClass('fa-times').addClass('fa-search');
              }

        }
        else{
            $('.search-btn .search-form').removeClass('active').slideUp();
            $('.search-btn .search-form').removeClass('active');
            $(this).addClass('active');
            $(this).siblings('.search-form').addClass('active').slideDown();

            if ( $(this).find("i").hasClass('fa-search')){
                $(this).find("i").removeClass('fa-search').addClass('fa-times');
              }
        }
    });

    /*-------------------------------------------
        19. Mobile Search
    --------------------------------------------- */
    $('.mobile-search-btn').on('click', function(){
        if($(this).siblings('.mobile-search-form').hasClass('active')){
            $(this).siblings('.mobile-search-form').removeClass('active').slideUp();
            $(this).removeClass('active');

            if ( $(this).find("i").hasClass('fa-search')){
                $(this).find("i").removeClass('fa-search').addClass('fa-times');
              }else{
                $(this).find("i").removeClass('fa-times').addClass('fa-search');
              }
        }
        else{
            $('.mobile-search-btn .mobile-search-form').removeClass('active').slideUp();
            $('.mobile-search-btn .mobile-search-form').removeClass('active');
            $(this).addClass('active');
            $(this).siblings('.mobile-search-form').addClass('active').slideDown();
            if ( $(this).find("i").hasClass('fa-search')){
                $(this).find("i").removeClass('fa-search').addClass('fa-times');
              }
        }
    });

    /*-------------------------------------------
        20. Treeview active
    --------------------------------------------- */
    $('#zm-archive').treeview({
        animated: "normal",
        persist: "location",
        collapsed: true,
        unique: true,
    });


    /*-------------------------------------------
        21. Stats config
    --------------------------------------------- */
    $('.expand-archive').on('click', function(){
      $(this).siblings('ul').slideToggle("slow");
    });

    /*-------------------------------------------
        22. Audio
    --------------------------------------------- */
    $( 'audio' ).audioPlayer();

    /*-------------------------------------------
        22. Custom scrollbar
    --------------------------------------------- */
    $('.zm-scrollbar').mCustomScrollbar();

    /*-------------------------------------------
        23. Cart plus minus button
    --------------------------------------------- */
    $('.cart-plus-minus').append('<div class="dec qtybutton">-</i></div><div class="inc qtybutton">+</div>');
    $('.qtybutton').on('click', function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });


    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    //e.target // newly activated tab
    //e.relatedTarget // previous active tab
    $(".owl-carousel").trigger('refresh.owl.carousel');
    });

    /*-------------------------------------------
        24. lazyload
    --------------------------------------------- */
    //$("img").lazyload();

})(jQuery);

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      responsive: {
        0: {
          items: 3,
          nav: true
        },
        600: {
          items: 6,
          nav: false
        },
        1000: {
          items: 12,
          nav: true,
          loop: false, 
          margin: 20
        }
      }
    })
  })
 
function barraaudio() {
	sweetAlert("Atenção", "Você precisa estar logado para fazer uso dos nossos conteúdos. Se sua rádio ainda não tem senha, clique em 'QUERO SER UMA RÁDIO CADASTRADA'.", "warning");
} 

function conteudolivre(vIMateria) {
	$.ajax({
		url: 'materiaLivre.php',
		type: 'POST',
		async: true,
		data: {
			method: 'livre',
			vIMateria: vIMateria
		},
		success: function(msg) {
			if (msg != '')
				window.open(msg);
			else 
				sweetAlert('Oops', 'Conteúdo Bloqueado momentaneamente, pois você já baixou a pouco tempo, aguarde 1 hora para baixar este mesmo conteúdo.', 'warning');
		},
		error: function(response) {
			sweetAlert('Oops', 'Ocorreu um erro inesperado', 'error');
			console.log(response);
		}
	});	
}

function share_audio(audio){	
	window.open("app_curtir.php?id=" + audio, '_blank','width=600,height=550');
}

function loadRecaptcha()
{
	$(".g-recaptcha").each(function() {
		var object = $(this);
		grecaptcha.render(object.attr("id"), {
			"sitekey" : "6LfgF2YUAAAAANvd8vaKotOWGFRGrO8wYWK5K1U0",
			"callback" : function(token) {
				object.parents('form').find(".g-recaptcha-response").val(token);
				window[object.data('callback')]();
			}
		});
	});
}

function getRecaptchaId(id_captcha)
{
	var response = -1;
	$(".g-recaptcha.multiple").each(function(index) {
		if ($(this).attr('id') == id_captcha) {
			response = index;
			return;
		}
	});

	return response;
}
