$(document).ready(function() {
    $('.pic').mouseenter(function() {
        $(this).animate({
         height: '+=40px',
         width: '+=40px'
         })

    $('.pic').mouseleave(function() {
        $(this).animate({
            height: '=40px' , width:'=50px'
        });
    });
  
});	
});	

$('.pic').click(function() {
    $(this).css('background-color', 'red');
   
});