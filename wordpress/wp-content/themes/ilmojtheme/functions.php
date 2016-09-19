<?php
/* Enqueues styles.css etc.*/
function ilmojtheme_resources() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );

}
/* Adds scripts and styles etc. */
add_action( 'wp_enqueue_scripts', 'ilmojtheme_resources' );

/* Register different navigation menus */
register_nav_menus(array(
    'primary' => __( 'Primary Menu' ),
    'footer' => __( 'Footer Menu' ),
));

 ?>
