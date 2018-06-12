<?php
add_image_size( 'custom-size', 1920, 570, array( 'center', 'center') );
add_image_size( 'custom-thumb', 450, 450, array( 'center', 'center') );

add_shortcode('featured-image', 'thumbnail_in_content');

function thumbnail_in_content($atts) {
    global $post;

    return get_the_post_thumbnail($post->ID, $size = 'custom-size', array( 'class' => 'featured-image' ) );
}