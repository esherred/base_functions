<?php
/*
  Plugin Name: Base Functions
  Version: 1.0.0

  Author: Eric Sherred
  Author URI: https://ericsherred.com
  
  License: MIT License
*/

// require_once('bs4walker.php');

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );

register_nav_menu('main', 'Main Nav');
register_nav_menu('footer', 'Footer Nav');

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(
    array(
      'page_title'  =>  'Theme Settings',
      'menu_title'  =>  'Settings',
      'menu_slug'   =>  'theme-general-settings',
      'capability'  =>  'edit_posts',
      'position'    =>  59,
    )
  );
}

add_action('wp_enqueue_scripts', 'base_enque_files');
function base_enque_files() {
  /*wp_enqueue_style('bootsttrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

  wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.0', true );
  wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery', 'popper-js'), '4.1.0', true );*/
}