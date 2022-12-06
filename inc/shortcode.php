<?php
//wordpress_shortcode

function basic_shortcoder(){
    return "Mehedi is a web devloper";
}

add_shortcode('mh', 'basic_shortcoder');


// button shortcode
function button_shortcode($atts, $content=null){
            $values = shortcode_atts(array(
                'url'=> '#',
            ),$atts);
            return '<a class="button" href=" '.esc_attr ( $values['url']).'  ">'.$content. '</a>';
}

add_shortcode('button', 'button_shortcode');

// Custom post shortcode
 
function mh_service_shortcode($atts){
    ob_start();
    // query_posts('post_type=service&post_status=publish&post_per_page=3&order=ASC&paged='.get_query_var('post'));
    $query=  new WP_Query(array(
        'post_type'=> 'service',
        'post_status'=> 'publish',
        'post_per_page'=>3,
       ' order'=>'ASC',
       'orderby'=>'title',

    ));
    if ($query-> have_posts()){?>
    <section id="Service_area">
    <div class="container">
        <div class="row">
            <?php  while($query->have_posts()): $query->the_post();?>
              
            <div class="col-md-4">
                <div class="service">
                <h2> <?php the_title(); ?> </h2>
                <?php echo the_post_thumbnail('service');  ?>
                <p > <?php the_excerpt(); ?> </p>
                </div>
            </div>
           <?php
             endwhile; wp_reset_postdata();
           
           ?>
          
        </div>

    </div>
       
</section>



    <?php  $myvariable = ob_get_clean();
    return $myvariable;

    }
}

add_shortcode('service', 'mh_service_shortcode');

//Slider Shortcode 

function mh_slider_shortcode($atts){
    ob_start();
    // query_posts('post_type=slider&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post'));
    $query=  new WP_Query(array(
        'post_type'=> 'slider',
        'post_status'=> 'publish',
        'post_per_page'=>3,
       ' order'=>'ASC',
       'orderby'=>'title',

    ));
    if ($query-> have_posts()){?>
   <section id="slider_area">
    <div class="slider">
    
        <?php  while($query->have_posts()): $query->the_post();?>
        <div>
          <?php echo the_post_thumbnail('slider') ?>
        </div>

        <?php 
          endwhile; wp_reset_postdata();
        ?>
   </div>
 </section>

    <?php  $myvariable = ob_get_clean();
    return $myvariable;

    }
}

add_shortcode('slider', 'mh_slider_shortcode');

