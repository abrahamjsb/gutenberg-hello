<?php
/*
Plugin Name:  Gutenberg Hello Plugin
Plugin URI:   
Description:  Basic WordPress Plugin to learn about the new gutenberg editor
Version:      0.1
Author:       abrahamjsb
Author URI:   https://asdev.com.ve/
License:      MIT
License URI: https://opensource.org/licenses/MIT
Text Domain:  
Domain Path:  /languages
*/
defined( 'ABSPATH' ) || exit;

//ACTIVATION
function gutenberg_hello_block() {

    wp_register_script(
        'gutenberg-hello',
        plugins_url( 'gutenber-hello.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element' )
    );

    register_block_type( 'gutenberg-hello-plugin/gutenberg-hello', array(
        'editor_script' => 'gutenberg-hello',
    ) );

}

add_action( 'init', 'gutenberg_hello_block' );
 
function gutenberg_hello_install() {

   // trigger our function that registers the custom post type
   gutenberg_hello_block(); 
    
}

register_activation_hook( __FILE__, 'gutenberg_hello_install' );


//DEACTIVATION 

/*function pluginprefix_deactivation() {
    // unregister the post type, so the rules are no longer in memory
    unregister_post_type( 'book' );
    // clear the permalinks to remove our post type's rules from the database
    flush_rewrite_rules();
}*/
//register_deactivation_hook( __FILE__, 'pluginprefix_deactivation' );