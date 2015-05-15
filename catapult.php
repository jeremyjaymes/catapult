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

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Metaboxes
if ( file_exists( dirname( __FILE__ ) . '/library/cmb2/init.php' ) ) {
    require_once dirname( __FILE__ ) . '/library/cmb2/init.php' );
}

// Require additional files as needed
// e.g. require_once ( '/admin/custom-metaboxes.php' );

// Helper functions
require_once ( 'inc/required.php' );