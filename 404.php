<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package sensible-wp
 */

get_header(); ?>

	

	<div class="grid grid-pad">

	<div class="grid grid-pad">
	<div id="primary" class="content-area col-8-12 centered">
		<main id="main" class="site-main" role="main">
		<header>
    		<div class="grid grid-pad"> 
        		<div class="col-1-1">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'sensible-wp' ); ?></h1>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
		</header><!-- .entry-header --> 

			<section class="error-404 not-found"> 

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try search?', 'sensible-wp' ); ?></p>

				<div class="search-form-wrapper">
					<form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder="Search &hellip;" name="s" />
						</label>
						<input type="submit" class="search-submit" value="Search" />
					</form>
				</div>

					

					
					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary --> 
    </div><!-- grid -->

<?php get_footer(); ?>
