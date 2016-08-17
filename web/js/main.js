$( function() {
  $( "#reservation_depart" ).datepicker({ minDate: 0 });
  $( "#reservation_depart" ).datepicker( $.datepicker.regional[ "fr" ] );
} );

$(window).scroll(
  function (){
    if ($(window).scrollTop() > $("#navbarFixedTop").offset().top){
      $('nav').addClass("navbarFixed");
    } else{
      $('nav').removeClass("navbarFixed");
    }
  }
)
