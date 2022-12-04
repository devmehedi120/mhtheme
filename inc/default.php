<?php

/**
 * My Theme Function 
 */

 //theme title

 add_theme_support('title-tag');

 //thumbnail area
 add_theme_support('post-thumbnails' , array('page', 'post', 'service' ,'slider'));
 add_image_size('post-thumbnails', 970, 350, true);  
 add_image_size('service', 400, 200, true); 
 add_image_size('slider',  700, true); 

 //excerpt to 40 word

 function mh_excerpt_more($more){
    global $post;
    return '<br><a class="readmore" href=" '.get_permalink($post->ID).' ">' . 'Read More'. '</a>';
 }

 add_filter('excerpt_more', 'mh_excerpt_more');

 function mh_excerpt_lenth($lenth){
   return 40;
 }

 add_filter('excerpt_lenth', 'mh_excerpt_more',999);

 //pagenav Function

 function mh_pagenav( ){
  global $wp_query, $wp_rewrite;
  $pages=' ';
  $max=$wp_query->max_num_pages;
  if(!$current= get_query_var('paged'))$current=1;
  $args['base']= str_replace(99999999, '%#%',get_pagenum_link(99999999));
  $args['total']=$max;
  $args['current']=$current;
  $total=1;
  $args['prev_text']='prev';
  $args['next_text']='next';
  if($max>1)echo '</pre> <div class="pagenav">';
  if($total==1 && $max>1) $pages= '<p class="pages"> page'.$current.'<span>of</span>'.$max.'</p>';
  echo $pages.paginate_links($args);
  if($max>1)echo ' </div> <pre>';
 
 }