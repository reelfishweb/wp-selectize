<?php

/*
 * Plugin Name: WP Selectize
 * Author:      Troy McCall
 * Version:     0.1.0
 * Description: Makes long, unwieldy select boxes much more user-friendly.
 * License:     GPLv2 or later
 */

/**
 * Enqueue chosen
 *
 * @since 0.1.0
 */
function _wp_selectize() {

    // Get the plugin path
    $plugin_path = plugin_dir_path( __FILE__ );

    // Common files
    require_once $plugin_path . 'includes/admin.php';
    require_once $plugin_path . 'includes/hooks.php';
}
add_action( 'plugins_loaded', '_wp_selectize' );

/**
 * Return the plugin's URL
 *
 * @since 0.1.0
 *
 * @return string
 */
function wp_selectize_get_plugin_url() {
    return plugin_dir_url( __FILE__ );
}

/**
 * Return the asset version
 *
 * @since 0.1.0
 *
 * @return int
 */
function wp_selectize_get_asset_version() {
    return 201607251140;
}
