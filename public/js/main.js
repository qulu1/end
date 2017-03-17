jQuery(document).ready(function($) {
   // preloader
 $(window).on('load', function() { 
  $('#status').fadeOut(5000);
  $('#preloader').delay(1500).fadeOut("slow");
  $('body').delay(1500).css({'overflow':'visible'});
})

	// staff togle
	$(".clicktogle1").click(function(){
		$(".toggleCreate").slideToggle(300,"linear");
	});
	$(".clicktogle2").click(function(){
		$(".toggleDig").slideToggle(300,"linear");
	});
	$(".clicktogle3").click(function(){
		$(".toggleMark").slideToggle(300,"linear");
	});
	// nav click
	$('.scroll').click(function(event) {
		var t=$(this);
		var section = t.data('section');
		var offset=$('#'+section+'').offset().top;
		$("html, body").animate({ scrollTop:offset+1 }, 1000);
	});
   
   // responsive code
     $(window).on('resize',function(){
      if ($(window).innerWidth()<800) {
        $(".logo").removeClass('pull-right');
       $(".navbar").children('div').removeClass('container');
     }else{
      $(".logo").addClass('pull-right');
       $(".navbar").children('div').addClass('container');
     };
      
    });

      if ( $(window).innerWidth()<800) {
        $(".logo").removeClass('pull-right');
          $(".navbar").children('div').removeClass('container');
      }

		// logo src 

		// for (var i = 0; i < $('.comSec').length; i++) {
		// 		$('.comSec').eq(i).attr('data-offset', $('.comSec').eq(i).offset().top);
		// 	};
			$(window).scroll(function(event) {
			var scrollTop=$(window).scrollTop();
			for (var i = 0; i < $('.comSec').length; i++) {	
			var elementHeight=$('.comSec').eq(i).height();
			var offSet=$('.comSec').eq(i).offset().top;
				if(scrollTop>=$('.comSec').eq(i).offset().top && scrollTop<(offSet+elementHeight-1)){
            // if ($(window).innerWidth()>800) {
                $(".s").removeClass('border');
             $("."+$('.comSec').eq(i).attr('id')).addClass('border');
            // };       
					if($('.comSec').eq(i).attr('data-color')==0){
						$('.logo ').attr('src', '../images/logo1.png');
						$(".navmenuen").css('background', '#fff');
              $(".border").css('border-color','#fedb37');
            if ($(window).innerWidth()<800) {
               $(".navul").css('background', '#fff')
            }else{
              $(".navul").css('background', 'none');
            };    
					}
					else{
						$('.logo ').attr('src', '../images/logo.png');
						$(".navmenuen").css('background', '#fedb37');
              $(".border").css('border-color','#fff');
             if ($(window).innerWidth()<800) {
               $(".navul").css('background', '#fedb37');
            }else{
              $(".navul").css('background', 'none');
            };
           
					}
				}
			};
			});
   // owl-portfolio
     $("#owl-portfolio").owlCarousel({
         itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 1],
        [700, 1],
        [1000, 1],
        [1200, 1],
        [1400, 1],
        [1600, 1]
      ],
        navigation : true,
        slideSpeed : 600,
        paginationSpeed : 600,
        // singleItem : true,
        navigationText :false
    });
     var owl = $("#owl-portfolio").data('owlCarousel');
     $(".next").click(function() {
       owl.next();
     });
     $(".prev").click(function() {
       owl.prev();
     });
// client_slider
      $("#clients-slider-mine").owlCarousel({
         itemsCustom : [
              [0, 2],
              [450, 2],
              [550, 3],
              [800, 3]
        ],
        navigation : false,
        slideSpeed : 600,
        paginationSpeed : 600,
        navigationText :false
      });

     //  staff_slider
      $("#staff-slider-mine").owlCarousel({
         itemsCustom : [
              [0, 2],
              [450, 2],
              [550, 3],
              [800, 3]
        ],
        navigation : false,
        slideSpeed : 600,
        paginationSpeed : 600,
        navigationText :false
      });

   
  
			// social icons

			$(".facebook").hover(fbin,fbout) ;
			function fbin(){
				
				$('.facebook').attr('src', '../images/facebook color.png');
			};
			function fbout(){
				$('.facebook').attr('src', '../images/FACEBOOK.png');
			};
			$(".instagram").hover(instaOver, instaOut) ;
			function instaOver(){
				$('.instagram').attr('src', '../images/instagram color.png');
			};
			function instaOut(){
				$('.instagram').attr('src', '../images/INSTAGRAM.png');
			};
			$(".twitter").hover(twitOver, twitOut) ;
			function twitOver(){
				$('.twitter').attr('src', '../images/twitter color.png');
			};
			function twitOut(){
				$('.twitter').attr('src', '../images/TWITTER.png');
			};
			$(".youtube").hover(youtOver, youtOut) ;
			function youtOver(){
				$('.youtube').attr('src', '../images/youtube color.png');
			};
			function youtOut(){
				$('.youtube').attr('src', '../images/YOUTUBE.png');
			};
			$(".email").hover(emailOver, emailOut) ;
			function emailOver(){
				$('.email').attr('src', '../images/email white.png');
			};
			function emailOut(){
				$('.email').attr('src', '../images/email.png');
			};
			$(".location").hover(locationOver, locationOut) ;
			function locationOver(){
				$('.location').attr('src', '../images/location white.png');
			};
			function locationOut(){
				$('.location').attr('src', '../images/location.png');
			};
			$(".telephone").hover(telephoneOver, telephoneOut) ;
			function telephoneOver(){
				$('.telephone').attr('src', '../images/telephone white.png');
			};
			function telephoneOut(){
				$('.telephone').attr('src', '../images/telephone.png');
			};
      $(".linkedin").hover(linkedinOver, linkedinOut);
      function linkedinOver(){
        $('.linkedin').attr('src','../images/linkedin color.png');
      };
      function linkedinOut(){
        $('.linkedin').attr('src','../images/linkedin.png');
      };

      // site animations
        function animations(){
           $('#owl-portfolio .item').hover(function() {
            $(this).children('a').children('img').css('transform','scale(1.1)');
             }, function() {
            $(this).children('a').children('img').css('transform','scale(1)');
          });
         $(".service_icons").hover(function() {
          $(this).removeClass('animated rollIn');
           $(this).addClass('animated rollOut');
         }, function() {
          $(this).removeClass('animated rollOut');
           $(this).addClass('animated rollIn');
         });
          $(".flap").hover(function() {
            $(this).addClass('animated flip');
          }, function() {
            $(this).removeClass("animated flip");
          });
          $(".flip_flap").on('click', function () {
            $(".flip_flap").removeClass("animated flip");
             $(this).addClass('animated flip');
          });
          $(".swing_nav").on('click', function () {
            $(".swing_nav").removeClass("animated swing");
             $(this).addClass('animated swing');
          });
        }

        function destroy(){
          $(".flap, .service_icons, #owl-portfolio .item").unbind('mouseenter mouseleave');
          $(".flip_flap").off();
        }
      

          if ($(window).innerWidth()>800) {
             animations();

               $.fn.visible = function(partial) {
    
                    var $t            = $(this),
                        $w            = $(window),
                        viewTop       = $w.scrollTop(),
                        viewBottom    = viewTop + $w.height(),
                        _top          = $t.offset().top,
                        _bottom       = _top + $t.height(),
                        compareTop    = partial === true ? _bottom : _top,
                        compareBottom = partial === true ? _top : _bottom;
                  
                  return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

                };
                    var win = $(window);
                  var allMods = $(".module");
                  allMods.each(function(i, el) {
                  var el = $(el);
                  if (el.visible(true)) {
                  el.addClass("already-visible");
                  }
                  });
                  win.scroll(function(event) {
                  
                  allMods.each(function(i, el) {
                  var el = $(el);
                  if (el.visible(true)) {
                  el.addClass("come-in");
                  }
              });
             });

           }
        $(window).resize(function(event) {
            if ($(window).innerWidth()>800){
                 animations();
                 $('.up').css('display', 'block');
             }else{
               destroy();
                $('.up').css('display', 'none');
             }
         });
        $(window).scroll(function(event) {
            if ($(window).scrollTop()>210 && $(window).innerWidth()>800) {
                $('.up').css('display', 'block');
             }else {
               $('.up').css('display', 'none');
             }
        });
   
        $('.up').click(function(event) {
             $('body').animate({"scrollTop": "0"}, 950)
        });

      // nice scroll
        $("html").niceScroll();
        // fancy
        $(".fancybox").fancybox();

});	
