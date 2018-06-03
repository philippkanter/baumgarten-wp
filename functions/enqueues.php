<?php
/**!
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css', false, '4.1.1', null);
		wp_enqueue_style('bootstrap-css');

		wp_register_style('creative-css', get_template_directory_uri() . '/theme/css/creative.min.css', false, '1.0.2', null);
		wp_enqueue_style('creative-css');

		// Scripts

		wp_register_script('font-awesome-config-js', get_template_directory_uri() . '/theme/js/font-awesome-config.js', false, null, null);
		wp_enqueue_script('font-awesome-config-js');

		// wp_register_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/js/all.js', false, '5.0.13', null);
		// wp_enqueue_script('font-awesome');

		wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');

		wp_register_script('popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', false, '1.14.3', true);
		wp_enqueue_script('popper');

		wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js', false, '4.1.1', true);
		wp_enqueue_script('bootstrap-js');

		wp_register_script('jquery-easing-js', get_template_directory_uri() . '/theme/vendor/jquery-easing/jquery.easing.min.js', false, null, null);
		wp_enqueue_script('jquery-easing-js');

		wp_register_script('scrollreveal-js', get_template_directory_uri() . '/theme/vendor/scrollreveal/scrollreveal.min.js', false, null, null);
		wp_enqueue_script('scrollreveal-js');

		wp_register_script('b4st-js', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
		wp_enqueue_script('b4st-js');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);