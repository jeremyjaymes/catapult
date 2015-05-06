<?php
/*
Plugin Name: Catapult
Plugin URI: http://papertreedesign.com
Description: Custom functions for the ::client name:: website
Author: Jeremy Vossman
Version: 1.0.0
Requires at least: 4.1
Author URI: http://papertreedesign.com
*/

//metaboxes
if ( file_exists( dirname( __FILE__ ) . 'vendor/cmb2/init.php' ) ) {
    require_once dirname( __FILE__ ) . 'vendor/cmb2/init.php' );
}

// Require additional files as needed
// e.g. require_once plugin_dir_path( __FILE__ ) . 'admin/custom-metaboxes.php';