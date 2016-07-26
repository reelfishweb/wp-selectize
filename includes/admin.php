<?php

/**
 * Selectize Admin
 *
 * @package Plugins/Selectize/Admin
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue Selectize.js
 *
 * @since 0.1.0
 */
function wp_selectize_enqueue_assets() {

    /*
     * Filterable handle to help purposely avoid conflicts
     *
     * @since 0.1.0
     */
    $handle = apply_filters( 'wp_selectize_enqueue_handle', 'jquery-selectize' );

    // Vars
    $url = wp_selectize_get_plugin_url();
    $ver = wp_selectize_get_asset_version();

    // Styles
    wp_enqueue_style( 'selectize-css',     $url . 'assets/css/selectize.css', array(),          $ver );
    wp_enqueue_style( 'selectize-default',     $url . 'assets/css/selectize.default.css', array(),          $ver );

    // Scripts
    wp_enqueue_script( 'jquery-ui',     $url . 'assets/js/jquery-ui.min.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( $handle,     $url . 'assets/js/selectize.min.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'wp-selectize', $url . 'assets/js/wp-selectize.js',         array( $handle  ), $ver, true );
}
