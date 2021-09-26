<?php
function my_wp_files() {
	wp_enqueue_style( 'main_style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'my_wp_files' );