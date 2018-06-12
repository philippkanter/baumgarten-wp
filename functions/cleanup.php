<?php
/**!
 * Cleanup
 */

// Less stuff in <head>

if ( ! function_exists('b4st_cleanup_head') ) {
  function b4st_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);+
    remove_action('wp_head', 'wp_shortlink_header', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'remove_tinymce_emoji');
  }
}
add_action('init', 'b4st_cleanup_head');

function remove_tinymce_emoji($plugins){
  if (!is_array($plugins)){
    return array();
  }
	return array_diff($plugins, array('wpemoji'));
}

// Show less info to users on failed login for security.
// (Will not let a valid username be known.)

if ( ! function_exists('show_less_login_info') ) {
  function show_less_login_info() {
      return "<strong>ERROR</strong>: Stop guessing!";
  }
}
add_filter( 'login_errors', 'show_less_login_info' );

// Do not generate and display WordPress version

if ( ! function_exists('b4st_remove_generator') ) {
  function b4st_remove_generator()  {
    return '';
  }
}
add_filter( 'the_generator', 'no_generator' );

// Remove Query Strings From Static Resources

if ( ! function_exists('b4st_remove_script_version') ) {
  function b4st_remove_script_version( $src ) {
    $parts = explode( '?', $src );
    return $parts[0];
  }
}
add_filter( 'script_loader_src', 'b4st_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'b4st_remove_script_version', 15, 1 );

add_action( 'widgets_init', 'my_remove_recent_comments_style' );
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
}