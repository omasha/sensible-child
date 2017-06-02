<?php
/**
 * The template part for displaying home posts
 *
 * @package sensible-wp
 */
?>


			<div class="home-news">
                
				<?php if ( get_theme_mod( 'blog_text' ) ) : ?>
                
                	<div class="grid grid-pad">
            			<div class="col-1-1">
                    		<h6 class="wow animated fadeIn"><?php echo wp_kses_post( get_theme_mod( 'blog_text' )); ?></h6>
                    	</div><!-- col-1-1 -->  
                    </div><!-- grid -->
                    
				<?php endif; ?> 
           	    	
            	<div class="grid grid-pad no-top">
                
                	<?php
						global $post;
						$args = array( 'post_type' => 'post', 'posts_per_page' => 6, 'orderby'=> 'title', 'order' => 'ASC'); 
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post); 
                        if ( get_post_meta($post->ID, 'link_to_section', true) ){
                            $raw_url = get_post_meta($post->ID, 'link_to_section', true);
                            $url = filter_var($raw_url, FILTER_SANITIZE_URL);
                        } else {
                            $url = home_url();
                        }

                        ?>
              
                        <div class="col-1-2 two-clear wow animated fadeInUp" data-wow-delay="0.25s">
            
            				<a href="<?php echo $url;  ?>"><?php the_post_thumbnail('sensible-wp-home-front'); ?></a> 
							
                        	<p>Content here if we want it</p>
                        
                        </div><!-- col-1-3 --> 

					<?php endforeach; ?>
                    
        		</div><!-- grid -->
        	</div><!-- home-news -->
            
            
        	
            