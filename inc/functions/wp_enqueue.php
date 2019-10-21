<?php
/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_theme_name_scripts() {

    wp_enqueue_style( 'bootstrap', get_bloginfo('template_url') . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'icons', get_bloginfo('template_url') . '/assets/css/icon.css' );
    wp_enqueue_style( 'owl-car', get_bloginfo('template_url') . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-theme', get_bloginfo('template_url') . '/assets/css/owl.theme.default.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() ,'','1.0');
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array('jquery'), '1.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js',array('jquery'), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );