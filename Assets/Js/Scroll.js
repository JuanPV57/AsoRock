$(document).ready(function(){
	var altura = 900;

        
        $(window).on('scroll', function(){
            if ( $(window).scrollTop() > altura ){
                $('.navbar').addClass('logo2');
            } else {
                $('.navbar').removeClass('logo2');
            }
        });
     
   
});

