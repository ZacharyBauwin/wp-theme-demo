<?php

// Lier la feuille de style et les fonts au projet

function simplenews_enqueue_styles(){

    wp_enqueue_style( 'latofont', 'https://fonts.googleapis.com/css2?family=Lato&display=swap' );
    
    wp_enqueue_style( 'merrifont', 'https://fonts.googleapis.com/css2?family=Merriweather&display=swap' );

    wp_enqueue_style( 'maincss', get_template_directory_uri(  ) . '/styles/main.css',array('latofont', 'merrifont') );

}

add_action( 'wp_enqueue_scripts', 'simplenews_enqueue_styles' );


// Supports de thèmes

function simplenews_add_theme_support(){

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'simplenews_add_theme_support' );

// Déclarer les menus

function simplenews_register_menus(){

    register_nav_menus( array(
        'main-menu' => __('Menu principale')
     ));

}

add_action( 'after_setup_theme', 'simplenews_register_menus' );