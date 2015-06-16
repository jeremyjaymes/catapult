<?php
/**
 * Custom Taxonomies
 *
 * This file registers all custom taxonomies
 * See https://github.com/WebDevStudios/CMB2/blob/master/example-functions.php for examples.
 *
 * @package      plugin_name
 * @since        1.0.0
 * @link         https://github.com/jeremyjaymes/catapult
 * @author       Jeremy Vossman <jeremy@papertreedesign.com>
 * @copyright    Copyright (c) 2015, Papertree Design, LLC
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Exclude from updates
 * 
 * This prevents you being prompted to update if there's a public plugin
 * with the same name.
 *
 * @since 1.0.0
 *
 * @author Mark Jaquith
 * @link http://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/
 *
 * @param array $r, request arguments
 * @param string $url, request url
 * @return array request arguments
 */
function catapult_hide_update( $r, $url ) {
    if ( 0 !== strpos( $url, 'http://api.wordpress.org/plugins/update-check' ) )
        return $r; // Not a plugin update request. Bail immediately.
    $plugins = unserialize( $r['body']['plugins'] );
    unset( $plugins->plugins[ plugin_basename( __FILE__ ) ] );
    unset( $plugins->active[ array_search( plugin_basename( __FILE__ ), $plugins->active ) ] );
    $r['body']['plugins'] = serialize( $plugins );
    return $r;
}
add_filter( 'http_request_args', 'catapult_hide_update', 5, 2 );