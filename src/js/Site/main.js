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

  $('.down-arrow a').click(function(e) {
    e.preventDefault();
    $(window).scrollTo('#second-section', 600, {offset:20});
  });

  // setTimeout(function(){
  //   $('.header-block').addClass('shown');
  // }, 10);

});  