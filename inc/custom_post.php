

<?php
//slider add option
function custom_slider(){
    register_post_type ('slider',
      array(
        'labels' => array(
          'name' => ('Slider'),
          'singular_name' => ('Slider'),
          'add_new' => ('Add New Slider'),
          'add_new_item' => ('Add New Slider'),
          'edit_item' => ('Edit Slider'),
          'new_item' => ('New Slider'),
          'view_item' => ('View Slider'),
          'not_found' => ('Sorry, we cound\'n find the Slider you are looking for.'),
        ),
        'menu_icon' => 'dashicons-format-gallery',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5, 
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'slider'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
      );

      add_theme_support('post-thumbnails');
  }
  
  add_action('init', 'custom_slider');
//custom Post register & service addd
function custom_service(){
    register_post_type('service', 
     array(
        'labels'=>array(
            'name'=>('Services'),
            'singular_name'=>('Service'),
            'add_new'=> ('Add New Service '),
            'add_new_item'=> ('Add New Service '),
            'edit_item'=> ('Edit Service'),
            'view_item'=> ('View Slide'),
            'view_item'=> ('View Service'),
            'not_found'=>('Sorry, we can not found any servise that you looking for'),
                        ),
        'menu_icon'=>'dashicons-hammer',
        'public'=>true,
        'publicaly_queryable'=> true,
        'exclude_from_search'=>true,
        'menu_position'=> 5,
        'has_archive'=>true,
        'hierarchial'=> true,
        'show_ui'=> true,
       ' capability_type'=> 'post',
       'rewrite'=> array('slug' =>'service'),
       'supports'=> array('title', 'thumbnail', 'editor',  'excerpt'),

     )
    );
    add_theme_support('post_thumbnails');
}

add_action('init', 'custom_service');






