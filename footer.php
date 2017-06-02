	</section><!-- #content --> 

  <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="grid grid-pad">
        <div class="site-info col-1-1">
          <p>Some text here</p>
        </div
      </div><!-- grid in footer -->
  </footer><!-- #colophon -->
  </div><!-- #page --> 
</div> <!-- end .off-canvas-wrapper -->
<?php wp_footer(); ?>

<script>
$=jQuery;
  $(document).ready(function() {
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
</script>
	</body>
</html> <!-- end page -->