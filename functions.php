<?php

// do not remove, required on VIP Go. ping systems for questions.
add_filter( 'jetpack_sso_bypass_login_forward_wpcom', '__return_true' );

/**
 * Enqueue scripts and styles.
 */
function libertyjs_2017_styles() {
	wp_enqueue_style( 'libertyjs-2017-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'libertyjs-2017-scripts', get_template_directory_uri() . '/index.js' );
}

add_action( 'wp_enqueue_scripts', 'libertyjs_2017_styles' );

/* Add to the functions.php file of your theme */
add_filter( 'woocommerce_order_button_text', 'woo_custom_order_button_text' );

function woo_custom_order_button_text() {
	return __( 'Buy Tickets', 'woocommerce' );
}

add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

require_once 'includes/custom-post-types/speaker/class-libertyjs-speaker-post-type.php';
