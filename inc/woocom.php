<?php
  


function mh_add_woocommerce_support() {
    add_theme_support("woocommerce", array(
        "thumbnail_image_width" => 150,
        "single_image_width" => 200,
        "product_grid" => array(
            "default_columns" => 10,
            "min_columns" => 2,
            "max_columns" => 3,
        ),
    ));
}

add_action( 'after_setup_theme', 'mh_add_woocommerce_support' );