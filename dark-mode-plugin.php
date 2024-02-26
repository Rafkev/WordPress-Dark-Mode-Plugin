<?php
/*
Plugin Name: Dark Mode Plugin
Description: A simple dark mode plugin for WordPress.
Version: 1.0
Author: RK Oluwasanmi
*/

// Enqueue JavaScript for dark mode toggle
function enqueue_dark_mode_script() {
    wp_enqueue_script( 'dark-mode-script', plugins_url( '/dark-mode.js', __FILE__ ), array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_dark_mode_script' );


// Enqueue dark mode styles
function enqueue_dark_mode_styles() {
    wp_enqueue_style( 'dark-mode', plugins_url( '/dark-mode.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_dark_mode_styles' );

// Add dark mode toggle button
function dark_mode_toggle_button() {
    echo '<button id="dark-mode-toggle">Dark Mode</button>';
}
add_action( 'wp_footer', 'dark_mode_toggle_button' );
?>
