<?php
global $post;

$parent_id = wp_get_post_parent_id( $post->ID );
if (has_post_thumbnail( $post->ID ) ){
	$id = get_post_thumbnail_id();
} else {
$id = get_post_thumbnail_id($parent_id);
}
// If all else fails
$frontpage_id = get_option( 'page_on_front' );
if (!$id ){
	$id = get_post_thumbnail_id($frontpage_id);
}

$src = wp_get_attachment_image_src( $id, 'full' );
$src_url = $src[0];
$srcset = wp_get_attachment_image_srcset( $id, 'full' );
$sizes = wp_get_attachment_image_sizes( $id, 'full' );
$alt = get_post_meta( $id, '_wp_attachment_image_alt', true); 

$src = wp_get_attachment_image_src( $id, 'full' );
$src_url = $src[0];
$srcset = wp_get_attachment_image_srcset( $id, 'full' );
$sizes = wp_get_attachment_image_sizes( $id, 'full' );
$alt = get_post_meta( $id, '_wp_attachment_image_alt', true); 
?>
<header id="masthead" class="site-header" role="banner">

	<img src="<?php echo esc_attr( $src_url );?>"
	srcset="<?php echo esc_attr( $srcset ); ?>"
	sizes="<?php echo esc_attr( $sizes );?>"
	alt="<?php echo esc_attr( $alt );?>" />

</header> <!-- end .header -->
