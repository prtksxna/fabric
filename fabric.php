<?php
/**
 * Fabric
 *
 * In the rhythm of life
 *
 * @link              https://github.com/prtksxna/fabric/
 * @since             1.0.0
 * @package           Fabric
 *
 * @wordpress-plugin
 * Plugin Name:       Fabric
 * Plugin URI:        https://github.com/prtksxna/fabric/
 * Description:       In the rhythm of life
 * Version:           1.0.0
 * Author:            Prateek Saxena & Siddharth Ashok
 * Author URI:        https://github.com/prtksxna/fabric/graphs/contributors
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
	die;
}


require_once( dirname( __FILE__ ) . '/class-fabric.php' );

/**
 * Calls the class on the post edit screen.
 */
function call_fabric() {
	new Fabric();
}

if ( is_admin() ) {
	add_action( 'load-post.php', 'call_fabric' );
	add_action( 'load-post-new.php', 'call_fabric' );
}

?>