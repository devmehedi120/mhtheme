<?php

function custom_service(){
    register_post_type('service', 
     array(
        'labels'=>array(
            'name'=>('Services'),
            'singular_name'=>('Service'),
            'add_new'=> ('Add New Service '),
            'add_new_item'=> ('Add New Service '),
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
}

add_action('init', 'custom_service');