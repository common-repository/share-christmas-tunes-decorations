<?php

/**
 * Plugin Name:       Share Christmas - Tunes & Decorations
 * Plugin URI:        https://geeky.com.ng
 * Description:       Celebrate christmas with your readers the wordpress way.
 * Version:           1.0.2
 * Author:            Geeky Nigeria
 * Author URI:        https://geeky.com.ng/author/john/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


if ( ! defined( 'WPINC' ) ) {
	die;
}

function WPCHTS_gky_start() {
 add_option( 'Activated_Plugin', 'Plugin-Slug' );
}



function WPCHTS__gky_stop() {

}

register_activation_hook( __FILE__, 'WPCHTS_gky_start' );
register_deactivation_hook( __FILE__, 'WPCHTS__gky_stop' );


require plugin_dir_path( __FILE__ ) . 'includes/wpchts_gky-class.php';

function run_WPCHTS_gky_Christmas() {

	$plugin = new WPCHTS_gky_Christmas();
	$plugin->run();

}
run_WPCHTS_gky_Christmas();
