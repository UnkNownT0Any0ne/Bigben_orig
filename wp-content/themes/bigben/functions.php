<?php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
});