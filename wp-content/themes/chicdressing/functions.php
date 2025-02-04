<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );




function chicdressing_dequeue_google_fonts() {
    wp_dequeue_style('ashe-opensans');
    wp_deregister_style('ashe-opensans');
    wp_dequeue_style('ashe-kalam');
    wp_deregister_style('ashe-kalam');
}
add_action('wp_enqueue_scripts', 'chicdressing_dequeue_google_fonts', 20);