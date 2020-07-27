$(document).ready(function(){
	var altura = 900;

        
        $(window).on('scroll', function(){
            if ( $(window).scrollTop() > altura ){
                $('.navbars').addClass('logo2');
            } else {
                $('.navbars').removeClass('logo2');
            }
        });
     
   
});

