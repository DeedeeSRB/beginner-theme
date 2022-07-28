<?php
/**
 * @package Beginner_Theme
 * 
 *  THEME SUPPORT OPTIONS
 * 
 */

 /**
 * Enqueue scripts and styles.
 */
function beginner_theme_scripts() {
	wp_enqueue_style( 'beginner-theme-style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION );
	wp_style_add_data( 'beginner-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'beginner-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'beginner_theme_scripts' );