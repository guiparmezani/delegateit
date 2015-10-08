$(document).ready(function() {  
   $('input:not(.datepicker), textarea, select').focusin(function() {
      placeHolder = $(this).attr('placeholder');
      $(this).attr('placeholder', '');
  });
  $('input:not(.datepicker), textarea, select').focusout(function() {
      $(this).attr('placeholder', placeHolder);
  });
});  