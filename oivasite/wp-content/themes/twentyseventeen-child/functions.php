<?php
function oiva_theme_enqueue() {

    $parent_style = 'twentyseventeen-style'; // This variable should match the handle declared in the parent’s wp_enqueue_style function

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()
    );
}
add_action( 'wp_enqueue_scripts', 'oiva_theme_enqueue' );
?>