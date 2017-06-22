<?php
/*
 * Open Graph Meta Info
 */
?>
<?php
$fb_meta_title = get_the_title();
$fb_meta_excerpt = strip_tags(get_the_excerpt());
$fb_post_object = get_post( get_the_ID() );
$fb_raw = $fb_post_object->post_content;		
$fb_desc  = preg_replace("/\[caption .+?\[\/caption\]|\< *[img][^\>]*[.]*\>/i","",$fb_raw,1); 
$fb_desc  = strip_shortcodes( $fb_desc );
$fb_desc  = wp_strip_all_tags( $fb_desc );
$fb_desc =  wp_trim_words( $fb_desc, '40', '' );
$fb_home_desc = '.';
$fb_link = get_permalink();
$fb_image_custom = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
$fb_image_header = get_stylesheet_directory_uri() . '/assets/images/burning-man-survival-guide-share.jpg';
$fb_site_name = get_bloginfo('name');

?>
 
<?php if( is_home() || is_front_page() ) {  ?>
	<meta property="og:title" content="Burning Man Survival Guide 2017"/>		
	<meta property="og:description" content="<?php echo $fb_home_desc; ?>" />
	<meta property="og:image" content="<?php echo $fb_image_header; ?>" />

<?php } elseif ( is_single() || is_page() ) { ?>
	<meta property="og:title" content="<?php echo $fb_meta_title; ?>"/>
	<?php if (has_excerpt()) { ?>
		<meta property="og:description" content="<?php echo $fb_meta_excerpt; ?>" />
	<?php } else { ?>
		<meta property="og:description" content="<?php echo $fb_desc . '...'; ?>" />
	<?php } ?>
	<?php if ($fb_image_custom) { ?>
		<meta property="og:image" content="<?php echo $fb_image_custom[0]; ?>" />
	<?php } else { ?>
		<meta property="og:image" content="<?php echo $fb_image_header; ?>" />
	<?php } ?>

<?php } else { // not single post ?> 
	<?php //if( is_category() ) {  ?>
	<!-- <meta property="og:description" content="<?php //echo $fb_cat_desc; ?>" /> -->
	<?php //} ?>
	<meta property="og:image" content="<?php echo $fb_image_header; ?>" />	
<?php } ?>
<meta property="og:url" content="<?php echo $fb_link; ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:site_name" content="<?php echo $fb_site_name; ?>"/>
