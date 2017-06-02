<?php
/**
 * The template for displaying search results pages.
 *
 * @package sensible-wp
 */

get_header(); ?>

	<div class="grid grid-pad">
	<section id="primary" class="content-area col-9-12 centered">
		<main id="main" class="site-main" role="main">
			<div class="search-form-wrapper">
				<form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
					<label>
						<span class="screen-reader-text">Search for:</span>
						<input type="search" class="search-field" placeholder="Search &hellip;" name="s" />
					</label>
					<input type="submit" class="search-submit" value="Search" />
				</form>
			</div>


		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php sensiblewp_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
		</main><!-- #main --> 
	</section><!-- #primary -->
     
	</div>
    
<?php get_footer(); ?>
