<?php

/**
 * Chosen Hooks
 *
 * @package Plugins/Selectize/Hooks
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

// Enqueue admin assets
add_action( 'admin_enqueue_scripts',              'wp_selectize_enqueue_assets', -99 );
add_action( 'customize_controls_enqueue_scripts', 'wp_selectize_enqueue_assets', -99 );
