<?php
/**!
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		wp_register_style('bootstrap-css', get_template_directory_uri() . '/theme/vendor/bootstrap/css/bootstrap.min.css', false, '4.1.0', null);
		wp_enqueue_style('bootstrap-css');

		wp_register_style('creative-css', get_template_directory_uri() . '/theme/css/creative.min.css', false, '1.1', null);
		wp_enqueue_style('creative-css');

		// Scripts

		wp_register_script('font-awesome-config-js', get_template_directory_uri() . '/theme/js/font-awesome-config.js', false, '2.0', null);
		wp_enqueue_script('font-awesome-config-js');

		wp_register_script('modernizr', get_template_directory_uri() . '/theme/vendor/modernizr/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-3.3.1', get_template_directory_uri() . '/theme/vendor/jquery/jquery-3.3.1.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');

		wp_register_script('popper', get_template_directory_uri() . '/theme/vendor/popperjs/popper.min.js', false, '1.14.3', true);
		wp_enqueue_script('popper');

		wp_register_script('bootstrap-js', get_template_directory_uri() . '/theme/vendor/bootstrap/js/bootstrap.min.js', false, '4.1.0', true);
		wp_enqueue_script('bootstrap-js');

		wp_register_script('jquery-easing-js', get_template_directory_uri() . '/theme/vendor/jquery-easing/jquery.easing.min.js', false, null, null);
		wp_enqueue_script('jquery-easing-js');

		wp_register_script('scrollreveal-js', get_template_directory_uri() . '/theme/vendor/scrollreveal/scrollreveal.min.js', false, null, null);
		wp_enqueue_script('scrollreveal-js');

		wp_register_script('b4st-js', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
		wp_enqueue_script('b4st-js');

		// wp_register_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/js/all.js', false, '5.0.13', null);
		// wp_enqueue_script('font-awesome');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);

add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}