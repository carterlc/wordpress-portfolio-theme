<?php
function mychildtheme_enqueue_styles() {
    $parent_style = 'parent-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
    wp_enqueue_script('grained_js', get_stylesheet_directory_uri() . '/assets/js/grained.js');
    wp_enqueue_style('typekit','https://use.typekit.net/lql8jpo.css');


}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );


function contact_widget() {
    register_sidebar( array(
        'name' => 'Left Sidebar',
        'id' => 'left-sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}

add_action( 'widgets_init', 'contact_widget');


//Scripts

