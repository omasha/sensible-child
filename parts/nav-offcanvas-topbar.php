<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->
<!-- <div class="top-bar" id="top-bar-menu"> -->
	
	<div class="navigation top-bar-section top-bar-right show-for-large desktop-only">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right mobile-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li class="menu-button"><a data-toggle="off-canvas"><?php _e( 'MENU', 'sensible-wp' ); ?></a><i class="fa fa-bars" aria-hidden="true"></i></li>
			
		</ul>
	</div>
<!-- </div> -->
