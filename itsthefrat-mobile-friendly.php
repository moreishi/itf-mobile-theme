<?php
/**
 * Plugin Name: itsthefrat Mobile Theme
 * Plugin URI: https://github.com/moreishi/itf-mobile-theme
 * Description: This plugin allows the itsthefrat theme to be mobile friendly.
 * Version: 1.0
 * Author: Moreishi
 * Author URI: http://www.facebook.com/moreishi
 * License: Open
 */

defined('ABSPATH') or die("No script kiddies please!");

function add_my_stylesheet() 
{
    wp_enqueue_style( 'allow_mobility', plugins_url( 'smartphones.css', __FILE__ ), array(), '1.0', "screen and (max-width: 760px)");
}

add_action( 'wp_enqueue_scripts', 'add_my_stylesheet', 11 );