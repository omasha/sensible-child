jQuery(document).foundation();

(function($) {

  var isMobile = false;
    if( /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()) ) { isMobile = true; }
  
  // overriding standard foundation dropdown
  
  $.fn.bmSideNav = function() {
        
        this.find("li").has("ul").prepend('<div class="side-nav-toggle"><i class="fa fa-caret-down"></div>');

        this.on("click", ".side-nav-toggle", function() {
            //here
            $this = $(this);
            var $childLists = $this.parent().find(" > ul");
            if ($this.hasClass("open")) {
                $this.removeClass("open");
                $this.parent().removeClass("menu-item-open");
                $this.find("i").removeClass("rotate-180");
                $childLists.slideUp(480, "swing", function() {
                    $childLists.hide();
                });
            } else {
                $this.addClass("open");
                $this.parent().addClass("menu-item-open");
                $this.find("i").addClass("rotate-180");
                $childLists.slideDown(480, "swing", function() {
                    $childLists.show();
                });
            }
        });
        
    };

    $('#off-canvas .vertical.menu').bmSideNav();

  // sticky top bar

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
  
  // slideout footer
  function setFooter() {       
    // Only on desktop
    if( !isMobile ) {
      $('body').imagesLoaded( function() {
        var fHeight = $('.footer').outerHeight() - 1;
        if( !$('.dummy-footer').length ) {
                $('.footer').addClass('slide-out').before( $( '<div class="dummy-footer"></div>' ).css( 'height', fHeight + 'px' ) );
        } else {
                $('.dummy-footer').css( 'height', fHeight + 'px' );
        }
      });          
    }
  }
  
  $(window).resize(function () {
  setFooter();        
  }); 
  
  $(document).ready(function(){
  setFooter();
  });

})(jQuery);