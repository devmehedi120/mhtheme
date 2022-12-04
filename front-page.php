<?php
/*
*theme Front page
*/

get_header();?>



<section id="Service_area">
    <div class="container">
        <div class="row">
            <?php  
            query_posts('post_type=service&post_status=publish&post_per_page=3&order=ASC&paged='.get_query_var('post'));
            
            if(have_posts()):
                while(have_posts()): the_post();
            ?>
            <div class="col-md-4">
                <div class="service">
                <h2> <?php the_title(); ?> </h2>
                <?php echo the_post_thumbnail('service');  ?>
                <p > <?php the_excerpt(); ?> </p>
                </div>
            </div>
           <?php
             endwhile;
            endif;
           ?>
          
        </div>

    </div>
       
</section>




<?php get_footer(); ?>