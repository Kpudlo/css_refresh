<?php
/**
 * Plugin Name: WDWNT CSS Refresh
 * Plugin URI:   https://wdwnt.com
 * Description:  Refreshes Browser CSS for 
 * Version:      1.0.0
 * Author:       WDWNT, Kevin Pudlo
 * Author URI:   https://wdwnt.com
*/

$theme = wp_get_theme();
$ver = $theme->get( 'Version' );
$themecsspath = get_stylesheet_directory() . '/style.css';
$style_ver = filemtime( $themecsspath );
wp_enqueue_style( 'theme-style', get_stylesheet_uri(),array(),$style_ver );
