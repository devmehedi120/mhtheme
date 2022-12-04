<?php
//wordpress_shortcode

function basic_shortcoder(){
    return "Mehedi is a web devloper";
}

add_shortcode('mh', 'basic_shortcoder');



function button_shortcode($atts, $content=null){
            $values = shortcode_atts(array(
                'url'=> '#',
            ),$atts);
            return '<a class="button" href=" '.esc_attr ( $values['url']).'  ">'.$content. '</a>';
}

add_shortcode('button', 'button_shortcode');