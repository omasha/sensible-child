<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_stylesheet_directory_uri() . '/vendor/foundation-sites/dist//js/foundation.min.js', array( 'jquery' ), '6.2.3', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'imagesloaded-js', get_stylesheet_directory_uri() . '/assets/js/vendor/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'site-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

	
    wp_enqueue_style( 'foundation-css', get_stylesheet_directory_uri() . '/vendor/foundation-sites/dist/css/foundation.min.css', array(), '', 'all' );

    // Register main stylesheet
   wp_enqueue_style( 'parent-css', get_template_directory_uri() . '/style.css', array(), '', 'all' );
   wp_enqueue_style( 'site-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

   // Google Fonts
  wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Jura:600|Khand:500');  


}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
