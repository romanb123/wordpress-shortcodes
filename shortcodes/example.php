<?php
// get the last product of category:
$args = array( 
    'status' => 'publish',
 );

$products = get_posts( $args );
echo var_dump($products);

// frontend div
function wpb_demo_shortcode() {
    $t = 'h';
    // Things that you want to do.
    $message =
    '<div class="widget-grid">'.
    '<div class="widget-title">'.
    'title'.
    '</div>'.
    '<div class="widget-preview">'.
    'preview'.
    '</div>'.
    '<div class="widget-image">'.
    '<image class="image" src="http://localhost/store/wp-content/uploads/2020/06/img-200x300.jpg">'.
    '</div>'.
    '</div>' ;

    // Output needs to be return
    return $message;
}

// register shortcode
add_shortcode( 'greeting', 'wpb_demo_shortcode' );
