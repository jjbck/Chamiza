

$(document).ready(function() {

$(window).resize(function(){location.reload();});

//$(".unselected").mouseenter(function() { $(this).animate({height: '50px'},200); $(this).animate({'line-height':'50px'},100);});
//$(".unselected").mouseleave(function() { $(this).animate({height: '30px'},100); $(this).animate({'line-height':'30px'},50);});

$("#proyecto").click(function() {

    $('html, body').animate({
        scrollTop: $(".encabezado").offset().top - 150
    }, 2000);

});

$("#inicio").click(function() {
    $('html, body').animate({
        scrollTop: $("html").offset().top
    }, 2000);
    
});

$("#ubicacion").click(function() {
    $('html, body').animate({
        scrollTop: $(".wrap_ubicacion").offset().top - 20
    }, 2000);
    
});

$("#entorno").click(function() {
    $('html, body').animate({
        scrollTop: $(".wrap_entorno").offset().top - 20
    }, 2000);
    
});

$("#galeria").click(function() {
    $('html, body').animate({
        scrollTop: $(".wrap_galeria").offset().top - 20
    }, 2000);
    
});

$("#master").click(function() {
    $('html, body').animate({
        scrollTop: $(".wrap_master").offset().top - 20
    }, 2000);
    
});

$(".contacto_btn").click(function() {
    $('html, body').animate({
        scrollTop: $(".wrap_ubicacion").offset().top - 20
    }, 2000);
    
});

$(window).scroll(function () {

      if ( $(this).scrollTop() < $(".parte2").offset().top)   {
         $("#menu").find(".selected").removeClass("selected").addClass("unselected"); $("#inicio").addClass( "selected" ); 
      }

      if ($(this).scrollTop() > $(".parte2").offset().top && $(this).scrollTop() < $(".wrap_ubicacion").offset().top -50 )  {
         $("#menu").find(".selected").removeClass("selected").addClass("unselected"); $("#proyecto").addClass( "selected" ); 

      }

      if ($(this).scrollTop() > $(".wrap_ubicacion").offset().top -50 && $(this).scrollTop() < $(".wrap_entorno").offset().top -50) {
         $("#menu").find(".selected").removeClass("selected").addClass("unselected"); $("#ubicacion").addClass( "selected" ); 
      }

      if ($(this).scrollTop() > $(".wrap_entorno").offset().top -50 && $(this).scrollTop() < $(".wrap_galeria").offset().top -50)  {
         $("#menu").find(".selected").removeClass("selected").addClass("unselected"); $("#entorno").addClass( "selected" ); 
      }
      
      if ($(this).scrollTop() > $(".wrap_galeria").offset().top -50 && $(this).scrollTop() < $(".wrap_master").offset().top -50)  {
         $("#menu").find(".selected").removeClass("selected").addClass("unselected"); $("#galeria").addClass( "selected" ); 
      }

      if ($(this).scrollTop() > $(".wrap_master").offset().top -50 )  {
         $("#menu").find(".selected").removeClass("selected").addClass("unselected"); $("#master").addClass( "selected" ); 
      }
      
   });
  
  });