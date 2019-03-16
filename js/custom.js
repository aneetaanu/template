// JavaScript Document

// navbar clickover hide
$(document).click(function (event) {
    var clickover = $(event.target);
    var $navbar = $(".navbar-collapse");               
    var _opened = $navbar.hasClass("in");
    if (_opened === true && !clickover.hasClass("navbar-toggle")) {      
        $navbar.collapse('hide');
    }
});

//sticky header start
 
$(document).ready(function() {
   $('.min_top').removeClass("sticky");
  });
$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
$('.min_top').addClass("sticky");
}
else{
$('.min_top').removeClass("sticky");
}
});


//sticky header end 