<?php
/*
additional img sizes
 */

add_image_size( 'sensible-wp-home-front', 500, 250, true );


// Register custom menus and menu walkers
require_once(get_stylesheet_directory().'/assets/functions/menu.php');
require_once(get_stylesheet_directory().'/assets/functions/enqueue-scripts.php'); 
require_once(get_stylesheet_directory().'/assets/functions/disable-emoji.php'); 


function sensiblewp_child_scripts() { 
	wp_dequeue_script( 'sensiblewp-menu');
	wp_dequeue_script( 'sensiblewp-navigation');
	wp_dequeue_script( 'sensiblewp-scripts');
	wp_dequeue_style( 'sensiblewp-menu-css');
}

add_action( 'wp_enqueue_scripts', 'sensiblewp_child_scripts', 999 );
// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> ...read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
