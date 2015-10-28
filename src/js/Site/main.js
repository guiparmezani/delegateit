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

  $("#phone").mask("(999) 999-9999");

  $("#delegate-form").submit(function(event) {
    /* stop form from submitting normally */
    event.preventDefault();

    /* get some values from elements on the page: */
    var $form = $( this ),
        url = $form.attr( 'action' );

    alert($('#phone').val());
    /* Send the data using post */
    // var posting = $.post( url, { first_name: $('#first_name').val(), last_name: $('#last_name').val(), phone: $('#phone').val(), zip: $('#zip').val() } );

    /* Alerts the results */
    // posting.done(function( data ) {
    //   alert('success');
    // });
  });

  // setTimeout(function(){
  //   $('.header-block').addClass('shown');
  // }, 10);

});  