<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
wp_enqueue_script( 'custom-header-js', get_stylesheet_directory_uri() . '/js/scripts-header.js', array( 'jquery' ), '1.1.0' , false );
wp_enqueue_script( 'custom-footer-js', get_stylesheet_directory_uri() . '/js/scripts-footer.js', array( 'jquery' ), '1.1.0' , false );
}