<?php
function bootstrap_gallery( $output = '', $atts, $instance )
{

    if (strlen($atts['columns']) < 1) {
        $columns = 3;
    }
    else {
        $columns = $atts['columns'];
    }
    
    $images = explode(',', $atts['ids']);

    if ($columns < 1 || $columns > 12) {
        $columns == 3;
    }

    
    $col_class = 'col-md-' . 12/$columns;
    
    $return = '<div class="row gallery">';

    $i = 0;

    foreach ($images as $key => $value) {

        if ($i%$columns == 0 && $i > 0) {
            $return .= '</div><div class="row gallery">';
        }

        $image_attributes_thumb = wp_get_attachment_image_src($value, 'custom-thumb');
        $image_attributes_full = wp_get_attachment_image_src($value, 'full');

        $return .= '
            <div class="'.$col_class.'">
                <div class="gallery-image-wrap">
                    <a data-gallery="gallery" href="'.$image_attributes_full[0].'">
                        <img src="'.$image_attributes_thumb[0].'" alt="" class="img-responsive">
                    </a>
                </div>
            </div>';

        $i++;
    }

    $return .= '</div>';

    return $return;
}

add_filter( 'post_gallery', 'bootstrap_gallery', 10, 4);
?>