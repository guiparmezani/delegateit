$(document).ready(function() {  
	$('input:not(.datepicker), textarea, select').focusin(function() {
		placeHolder = $(this).attr('placeholder');
		$(this).attr('placeholder', '');
	});
	$('input:not(.datepicker), textarea, select').focusout(function() {
		$(this).attr('placeholder', placeHolder);
	});

	$('.delegate-now').click(function(e) {
		e.preventDefault();
		$(window).scrollTo('#delegate-form', 800);
	});

	$('footer .brand').click(function(e) {
		e.preventDefault();
		$(window).scrollTo('#top', 800);
	});

	$(window).scroll(_.throttle(function(){
    var scroll = $(window).scrollTop();
    var halfheight = $(window).height() / 2;
    
    if ($(window).width() > 767) {
    	// Side roll animation
      if (scroll > $('.left-roll').offset().top - 30 - halfheight) {
      	$('.left-roll').css('left', 0);
      }
      // if (scroll > $('.right-roll').offset().top-halfheight) {
      // 	$('.right-roll').css('left', 0);
      // 	$('.third-section').css('overflow', 'visible');
      // }
    	// Unblur animation
      // if (scroll > $('.aqua-box').offset().top-halfheight) {
      //   $('.aqua-box').removeClass('blured');
      // }
    }
  }));

  //Typing effect on banner
  var captionLength = 0;
  var caption = '';

  setTimeout(function(){
    testTypingEffect();
  }, 500);

  setTimeout(function(){
    $('.header-block').addClass('shown');
  }, 2200);

  function testTypingEffect() {
    caption = $('.type').data("text");
    type();
  }

  function type() {
    $('.type').html(caption.substr(0, captionLength++));
    if(captionLength < caption.length+1) {
      setTimeout(type, 50);
    } else {
      captionLength = 0;
      caption = '';
    }
  }
});  