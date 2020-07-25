$(document).ready(function(){
	var altura = 830;

        
        $(window).on('scroll', function(){
            if ( $(window).scrollTop() > altura ){
                $('.navbar').addClass('logo2','img_logo');
            } else {
                $('.navbar').removeClass('logo2','img_logo');
            }
        });
     
   
});