$(function(){
    $('.float-end').hide();

    $(window).scroll(function(){
      if($(this).scrollTop() > 100){
        $('.float-end').fadeIn();
      }
      else{
        $('.float-end').fadeOut();
      }
    });
    $('.float-end').click(function(){
      $('html, body').animate({
        scrollTop:0
      }, 40);
  });
});