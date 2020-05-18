
$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 10) {
          $("header a").css("color" , "black");
        }
  
        else{
            $("header a").css("color" , "white");  	
        }
    })
  })