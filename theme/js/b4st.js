/**!
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');
	
		// Closes responsive menu when a scroll trigger link is clicked
		$('.js-scroll-trigger').click(function() {
			$('.navbar-collapse').collapse('hide');
		});
	
		$('.lazyload').each(function (index, element) {
			var bigImage = $(this).data('big-image');
			var image = new Image();

			$(image).load(function () {
				$(element).attr('src', bigImage);
				$(element).addClass('darken-light');
				$(element).removeClass('blur-darken-light');

			});

			image.src = bigImage;

		});

	});
  
  })(jQuery); // End of use strict