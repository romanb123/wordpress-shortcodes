<?php



// get the last product of category:





// frontend div
function wpb_demo_shortcode() {
    
    
    $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'check',
    'posts_per_page' => 1,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        $message =
    '<div class="widget-grid">'.
    '<div class="widget-title">'.
    get_the_title().
    '</div>'.
    '<div class="widget-preview">'.
    get_the_content().
    '</div>'.
    '<div class="widget-image">'.
    get_the_post_thumbnail($post_id, 'post_thumbnail', array( 'class' => 'image' )).
    '</div>'.
    '</div>' ;
    endwhile;
endif;



    // Things that you want to do.


    // Output needs to be return
    return $message;
}

// register shortcode
add_shortcode( 'greeting', 'wpb_demo_shortcode' );
