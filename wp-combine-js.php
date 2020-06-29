<?php
/*
Plugin Name: Best Website Combine JS Plugin
Plugin URI: https://github.com/bestwebsite/combine-js
Description: WordPress plugin that attempts to combine, minify, and compress JS.
Author: bestwebsite
Version: 1.0
Author URI: http://www.bestwebsite.com
Requires at least: 3.0.0
Tested up to: 5.4
*/
?>
<?php

// don't allow direct access of this file

if ( preg_match( '#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'] ) ) die();

// require base objects and do instantiation

if ( !class_exists( 'bestwebsiteCombineJS' ) ) {
        require_once( dirname( __FILE__ ) . '/classes/combine-js.php' );
}
$bestwebsite_combine_js = new bestwebsiteCombineJS();

// define plugin file path

$bestwebsite_combine_js->set_plugin_file( __FILE__ );

// define directory name of plugin

$bestwebsite_combine_js->set_plugin_dir( basename( dirname( __FILE__ ) ) );

// path to this plugin

$bestwebsite_combine_js->set_plugin_path( dirname( __FILE__ ) );

// URL to plugin

$bestwebsite_combine_js->set_plugin_url( plugin_dir_url(__FILE__) );

// call init

$bestwebsite_combine_js->init();

?>
