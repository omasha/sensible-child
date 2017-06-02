jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {
  var $ = jQuery;
  
  var stickyNavTop = $('#navigation-container').offset().top; 
  var stickyNav = function(){
  var scrollTop = $(window).scrollTop();
      
    if (scrollTop > stickyNavTop) { 
        $('#navigation-container').addClass('sticky-menu');
    } else {
        $('#navigation-container').removeClass('sticky-menu'); 
    }
    };
 
  stickyNav();
 
  $(window).scroll(function() {
    stickyNav();
  });

});
