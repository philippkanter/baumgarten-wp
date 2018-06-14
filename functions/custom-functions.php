<?php

// Fallback for Plugin Better Font Awesome (Use Local CSS insted of CDN)

function bfa_callback( $force_fallback ) {
    $force_fallback = true;
    return $force_fallback;
}
add_filter( 'bfa_force_fallback', 'bfa_callback' );