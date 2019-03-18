<?php
/**
 * Plugin Name: WP Admin Keyboard Shortcut
 * Plugin URI: https://wordpress.org/plugins/wp-admin-keyboard-shortcut/
 * Description: Add keyboard shortcut functionality to admin dashboard.
 * Version: 0.1
 * Author: WP House
 * Author URI: http://www.wphouse.net/
 * Text Domain: wpakbsc
 * License: GPL
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path: languages
 */
if ( ! defined( 'ABSPATH' ) ) die();

add_action( 'admin_enqueue_scripts', 'wpakbsc_admin_scripts' );
function wpakbsc_admin_scripts()
{	
	$screen = get_current_screen();	
	if ( $screen->base == 'plugins' )
	{
		wp_enqueue_script( 'wpakbsc-admin-plugins-script', plugin_dir_url( __FILE__ ) . 'js/admin-plugins-script.js', array( 'jquery' ) );
	}

	do_action( 'wpakbsc_enqueue_scripts', $screen );
}