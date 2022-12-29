<?php

// // wp_widget_register
// add_theme_support( 'widgets' );

function mh_widget_register(){
   
    register_sidebar(array(
        'name'        =>     __('Main Sidear ','mehedihasan'),
        'id'          =>     'sidebar-1',
        'description' =>    __('apears in the sidebar in blog page and other page', 'mehedihasan'),  
        'before_widget' =>  '<div class="child_sidebar">',
        'after_widget'=>    '</div>',
        'before_title'=>    '<h2 class="title">',
        'after_title' =>    '</h2>'
    ));
    register_sidebar(array(
        'name'        =>     __('Footer 1 ','mehedihasan'),
        'id'          =>     'footer-1',
        'description' =>    __('apears in the footer in blog page and other page', 'mehedihasan'),  
        'before_widget' =>  '<div class="child_sidebar">',
        'after_widget'=>    '</div>',
        'before_title'=>    '<h2 class="title">',
        'after_title' =>    '</h2>'
    ));

    register_sidebar(array(
        'name'        =>     __('Footer 2 ','mehedihasan'),
        'id'          =>     'footer-2',
        'description' =>    __('apears in the footer in blog page and other page', 'mehedihasan'),  
        'before_widget' =>  '<div class="child_sidebar">',
        'after_widget'=>    '</div>',
        'before_title'=>    '<h2 class="title">',
        'after_title' =>    '</h2>'
    ));
    register_sidebar(array(
        'name'        =>     __('Footer 3 ','mehedihasan'),
        'id'          =>     'footer-3',
        'description' =>    __('apears in the footer in blog page and other page', 'mehedihasan'),  
        'before_widget' =>  '<div class="child_sidebar">',
        'after_widget'=>    '</div>',
        'before_title'=>    '<h2 class="title">',
        'after_title' =>    '</h2>'
    ));     
}

add_action('widgets_init', 'mh_widget_register');

