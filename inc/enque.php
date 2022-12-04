<?php

function mh_css_js_file_calling(){
    wp_enqueue_style('mh-style', get_stylesheet_uri());
    wp_register_style('mh-bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(),'5.0.2','all'  );
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(),'1.0.0','all'  );
    wp_enqueue_style('mh-bootstrap');
    wp_enqueue_style('custom');
   
    //jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.2.2' ,'true' );
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0' ,'true' );
   
    }
   
    add_action('wp_enqueue_scripts' , 'mh_css_js_file_calling');
   
   
    function mh_add_google_font(){
       wp_enqueue_style('mh_google_font', 'https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto:wght@400;700&display=swap', false);
    }
   
   add_action('wp_enqueue_scripts', 'mh_add_google_font');