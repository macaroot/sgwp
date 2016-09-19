<?php
// Enqueues style.css etc.
function ilmojtheme_load_scripts() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery' );

}
// Adds scripts and styles etc.
add_action( 'wp_enqueue_scripts', 'ilmojtheme_load_scripts' );

// Register different navigation menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu' ),
    'footer' => __( 'Footer Menu' ),
));

// Add post format support to theme
add_theme_support( 'post-formats', array( 'gallery' ) );

 ?>
