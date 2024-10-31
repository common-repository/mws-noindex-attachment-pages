<?php
/**
 * Plugin Name: MWS Noindex Attachment Pages
 * Plugin URI: http://wordpress.org/plugins/mws-noindex-attachment-pages/
 * Description: Add meta robots to attachment pages
 * Version: 1.0
 * Author: ModernWebStudios
 * Author URI: https://modernwebstudios.com/mws-noindex-attachment-pages/
 * License: GPL-2.0+
 */
 
 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
// Add action to wp head
add_action('wp_head', 'mws_noindex_attachments');
// noindex function
function mws_noindex_attachments(){
	if (get_post_mime_type()!= false){
		echo '<meta name="robots" content="noindex,nofollow" /> ';
	}

}

?>