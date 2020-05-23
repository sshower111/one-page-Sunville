$(window).on('scroll', function(){
  if($(window).scrollTop()){
      $('nav').addClass('black');
      $('header').addClass('black');
  }
  else{
      $('nav').removeClass('black');
      $('header').removeClass('black');
  }
})