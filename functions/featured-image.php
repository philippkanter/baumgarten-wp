<?php
add_image_size( 'custom-size', 1920, 570, array( 'center', 'center') );
add_image_size( 'custom-thumb', 450, 450, array( 'center', 'center') );

add_shortcode('featured-image', 'thumbnail_in_content');

function thumbnail_in_content($atts) {
    global $post;
    $bigImage = get_the_post_thumbnail_url( $post->ID, $size = 'custom-size');

    return get_the_post_thumbnail( $post->ID, $size = 'custom-thumb', array( 
        'class' => 'lazyload featured-image', 
        'data-big-image' => $bigImage ) 
    );
}