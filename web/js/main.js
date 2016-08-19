$( function() {
  $( "#reservation_depart" ).datepicker({ minDate: 0 });
  $( "#reservation_depart" ).datepicker( $.datepicker.regional[ "fr" ] );
} );

$(window).scroll(
  function (){
    if ($(window).scrollTop() > $("#navbarFixedTop").offset().top){
      $('nav').addClass("navbarFixed");
      $('.retour_top').css('visibility', 'visible');
    } else{
      $('nav').removeClass("navbarFixed");
      $('.retour_top').css('visibility', 'hidden');
    }
 }
 )


$('a[href^="#vehicules"], a[href^="#services"], a[href^="#top"]').click(function(){
  var the_id= $(this).attr("href");

  $('html, body').animate({
    scrollTop: $(the_id).offset().top
  }, 'slow');
  return false;
});


$('#buttonReservation').click(function(){
  $('#reservation div').removeClass('hidden');
  $('#reservation #buttonReservation').addClass('hidden');
  $('#reservation #buttonSoumettre').removeClass('hidden');

})
