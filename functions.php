<?php

function theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function my_custom_scripts() {

    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/dist/app.js', array( 'jquery' ), '', true);
    
}

add_action('wp_enqueue_scripts', 'my_custom_scripts');

if ( !is_admin() ) { 

    wp_register_script('event_script', get_bloginfo('stylesheet_directory') . '/dist/event.js', array('jquery'), '1.0' );

    wp_enqueue_script('event_script');
}

?>