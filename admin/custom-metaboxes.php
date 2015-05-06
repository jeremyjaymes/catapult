<?php
/**
 * Metaboxes
 *
 * This file registers all metaboxes
 *
 * @package      plugin_name
 * @since        1.0.0
 * @link         https://github.com/jeremyjaymes/catapult
 * @author       Jeremy Vossman <jeremy@papertreedesign.com>
 * @copyright    Copyright (c) 2015, Papertree Design, LLC
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */


 add_action( 'cmb2_init', 'plugin_name_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function plugin_name_register_demo_metabox() {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_prefix_demo_';
    /**
     * Sample metabox to demonstrate each field type included
     */
    $cmb_demo = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Test Metabox', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on_cb'    => 'yourprefix_show_if_front_page', // function should return a bool value
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );
    $cmb_demo->add_field( array(
        'name'       => __( 'Test Text', 'cmb2' ),
        'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => $prefix . 'text',
        'type'       => 'text',
        'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );
}