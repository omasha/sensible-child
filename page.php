<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sensible-wp
 */

get_header(); ?> 
<div class="grid grid-pad">
		
	<div id="primary" class="content-area col-8-12">
		<header>	    		
		<div class="col-1-1">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div><!-- .col-1-1 -->		        	
		</header>

		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>	

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_sidebar(); ?>


<?php get_footer(); ?>
