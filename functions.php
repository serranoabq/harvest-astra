<?php
/**
 * Harvest Astra Theme functions and definitions
 *
 * @package Harvest Astra
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_HARVEST_ASTRA_VERSION', '1.0.0' );

require_once( get_stylesheet_directory() . '/framework/framework.php' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'harvest-astra-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_HARVEST_ASTRA_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );