<?php
/**
 * Plugin Name: KTwo Dark Mode Toggle
 * Description: Adds a toggle button to enable dark mode on your WordPress site.
 * Version: 1.0
 * Author: Your Name
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Enqueue CSS and JS
function dark_mode_toggle_assets() {
    wp_enqueue_style( 'dark-mode-css', plugin_dir_url( __FILE__ ) . 'assets/css/dark-mode.css' );
    wp_enqueue_script( 'dark-mode-js', plugin_dir_url( __FILE__ ) . 'assets/js/dark-mode.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'dark_mode_toggle_assets' );

// Add Toggle Button
function dark_mode_toggle_button() {
    echo '<button id="dark-mode-toggle" class="dark-mode-toggle">Toggle Dark Mode</button>';
}
add_action( 'wp_footer', 'dark_mode_toggle_button' );
