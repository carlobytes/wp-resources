<?php

/* Packages */
function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/assets/css/bimstheme.css', array(), 1.0, 'all');
    wp_enqueue_style('stylesheet');
}

function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/packages/jquery-3.6.0.min.js', '', 1.0, true);    
    add_action('wp_enqueue_scripts', 'jquery');
}

function loadjs()
{
    wp_register_script('customjs', get_template_directory_uri() . '/assets/js/bimstheme.js', '',  1.0, true); 
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'include_jquery');
add_action('wp_enqueue_scripts', 'loadjs');

/* Theme Support */

function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );