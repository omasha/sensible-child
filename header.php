<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sensible-wp 
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> 
<?php wp_head(); ?>
</head>

<body <?php body_class('sticky-footer'); ?>>

	<div class="off-canvas-wrapper">
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sensible-wp' ); ?></a>
							
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?> <!-- Off-canvas menu here -->
			
			<div class="off-canvas-content" data-off-canvas-content>

				<?php get_template_part( 'parts/header-images' ); ?> <!-- Header images  -->	
				
				<div id="navigation-container">
					<nav class="navigation top-bar" role="navigation">

				<div class="site-branding">
					
					<?php if ( get_theme_mod( 'sensiblewp_logo' ) ) : ?>
	                
	    				<div class="site-logo">
	                     
	       				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'sensiblewp_logo' ) ); ?>' <?php if ( get_theme_mod( 'logo_size' ) ) : ?>width="<?php echo esc_attr( get_theme_mod( 'logo_size', __( '200', 'sensible-wp' ) )); ?>"<?php endif; ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
	                    
	    				</div><!-- site-logo --> 
	                    
					<?php else : ?>
	                
	    				<hgroup>
	       					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
	    				</hgroup>
	                    
					<?php endif; ?>
					</div><!-- site-branding -->
				
	            
				 <!-- This navs will be applied to the topbar, above all content 
					  To see additional nav styles, visit the /parts directory -->
				 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

				 </nav>
		 	
				</div> <!-- navigation-container -->
    
    

				<section id="content" class="site-content">
