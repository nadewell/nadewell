<?php

function theme_scripts(){
    
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_setup(){

     /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on twentyfifteen, use a find and replace
     * to change 'twentyfifteen' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'twentyfifteen', get_template_directory() . '/languages' );
 
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
 
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded  tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list'
    ) );
    
    /**************
     * This theme uses wp_nav_menu() in one location.
     */
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'nadewell' ),
		'404' => __( '404 Navigation', 'nadewell' ),
	) );
}
add_action( 'after_setup_theme', 'theme_setup' );