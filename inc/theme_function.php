<?php

function mh_customizer_register($wp_customize){
    //Header Area
$wp_customize->add_section('mh_header_area', array(
    'title'=>__('Header Area ', 'mehedihasan'),
    'description'=>'if you update your header area , You can do it .'
));
$wp_customize->add_setting('mh_logo', array(
    'default'=>get_bloginfo('template_directory').'/img/logo.png'
));
$wp_customize-> add_control(new Wp_Customize_Image_Control($wp_customize, 'mh_logo', array(
'label'=>'Logo Upload',
'setting'=>'mh_logo',
'section'=>'mh_header_area',
'description'=>'if you update your header area , You can do it .'
)));

//Menu Position Option 
$wp_customize->add_section('mh_menu_option', array(
    'title'=>__('Menu Control', 'mehedihasan'),
    'description'=> 'If you change menu postion , You can do it'
));

$wp_customize->add_setting('mh_menu_position',array(
    'default'=>'right_menue'
));
$wp_customize->add_control('mh_menu_position',array(
    'label'=>'Menu Control',
    'description'=>'Select Menu Position',
    'setting'=>'mh_menu_Position',
    'section'=>'mh_menu_option',
    'type'=>'radio',
    'choices'=>array(
        'left_menu'=>'Left Menu',
        'right_menu'=>'Right Menu',
        'center_menu'=>'Center Menu'
    )
));

//footer Option 
$wp_customize->add_section('mh_footer_option', array(
    'title'=>__('Footer Option', 'mehedihasan'),
    'description'=> 'If you change  or update footer setting , You can do it'
));

$wp_customize->add_setting('mh_copyrigth_section',array(
    'default'=>'&copy; Copyright 2022 | MH tch',
));
$wp_customize->add_control('mh_copyrigth_section',array(
    'label'=>'Copyright Text',
    'description'=>'If need you can update your copyright text from here',
    'setting'=>'mh_copyrigth_section',
    'section'=>'mh_footer_option',
   
));

// Theme color

$wp_customize->add_section( 'mh_theme_color' , array(
    'title'=> __(' Theme Color', 'mehedihasan'),
    'description'=>'If You want to change theme color you can do ',
) );
$wp_customize-> add_setting('mh_bg_color',array(
 'default'=>'#fff'
));

$wp_customize-> add_control(new Wp_Customize_color_Control($wp_customize, 'mh_bg_color', array(
    'label'=>'BG COLOR Change',
    'setting'=>'mh_bg_color',
    'section'=>'mh_theme_color',
    'description'=>'if you update your Background Color , You can do it .'
    )));

    $wp_customize-> add_setting('mh_link_color',array(
        'default'=>'#ea1a70'
       ));
       
       $wp_customize-> add_control(new Wp_Customize_color_Control($wp_customize,'mh_link_color', array(
           'label'=>'Primary color',
           'setting'=>'mh_link_color',
           'section'=>'mh_theme_color',
           'description'=>'if you update your link Color , You can do it .'
           )));
       
 }

 add_action('customize_register', 'mh_customizer_register');


 function mh_color_cus(){
    ?>
     <style>
        body{ background: <?php echo get_theme_mod('mh_bg_color');?> }  
        :root{ --red:<?php echo get_theme_mod('mh_link_color');?>}
     </style>
    <?php
 }

 add_action('wp_head', 'mh_color_cus');