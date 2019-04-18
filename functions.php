<?php

function theme_scripts(){
    //theme styles
    wp_enqueue_style( 'theme', get_stylesheet_uri() );
    //theme Javascript
    wp_enqueue_script( 'theme', get_stylesheet_directory_uri() . '/assets/js/theme.js', array('jquery'), '1.0.0' );
    //google font
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Lato' );
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

function theme_widgets(){
    register_sidebar(
        array(
            'name'          => __( 'Footer Widget Area-1', 'nadewell' ),
            'id'            => 'footer-1',
            'description'   => 'Footer Widget Area-1',
            'class'         => 'widget-area',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Footer Widget Area-2', 'nadewell' ),
            'id'            => 'footer-2',
            'description'   => 'Footer Widget Area-2',
            'class'         => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Sidebar Widget Area', 'nadewell' ),
            'id'            => 'sidebar',
            'description'   => 'Sidebar Widget Area',
            'class'         => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
}
add_action( 'widgets_init', 'theme_widgets' );

function custom_the_excerpt($post){
    $link = '<a class="read-more" href="'.the_permalink($post->ID).'">Read More</a>';
    $excerpt = wp_trim_words( get_the_content($post->ID), 20 , $link );
    return  $excerpt;
}
add_filter( 'the_excerpt', 'custom_the_excerpt' );