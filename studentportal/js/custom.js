//news slider js

$(function(){
  $('.slider1').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  fade:false,
  speed:2000,
  prevArrow:'.left1',
  nextArrow:'.right1',
  
  autoplaySpeed: 1000,

});
//    testimonial part slider
    $('.slider2').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  fade:false,
  speed:2000,
  prevArrow:'.left',
  nextArrow:'.right',
  
  autoplaySpeed: 1000,
 

});
//    back to top js
    var bttop=$(".top-btn");
    var html_body=$('html,body');
    bttop.click(function(){
        
        html_body.animate({scrollTop:0},1000);
    
    });
    $(window).scroll(function(){
       var scrolling=$(this).scrollTop();
        if(scrolling>400){
            $(".top-btn").fadeIn(500);}
        else{
             $(".top-btn").fadeOut(500); 
        }
    });
    

});