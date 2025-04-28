<?php
function simple_theme_scripts() {
    wp_enqueue_style( 'simple-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'simple_theme_scripts' );
?>
