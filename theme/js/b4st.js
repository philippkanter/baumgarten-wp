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

		// You can put your own code in here
  
		// Smooth scrolling using jQuery easing
		$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
			$('html, body').animate({
				scrollTop: (target.offset().top - 57)
			}, 1000, "easeInOutExpo");
			return false;
			}
		}
		});
	
		// Closes responsive menu when a scroll trigger link is clicked
		$('.js-scroll-trigger').click(function() {
			$('.navbar-collapse').collapse('hide');
		});
	
		// Activate scrollspy to add active class to navbar items on scroll
		$('body').scrollspy({
			target: '#mainNav',
			offset: 57
		});
	
		// Collapse Navbar
		var navbarCollapse = function() {
		if ($("#mainNav").offset().top > 100) {
			$("#mainNav").addClass("navbar-shrink");
		} else {
			$("#mainNav").removeClass("navbar-shrink");
		}
		};
		// Collapse now if page is not at top
		navbarCollapse();
		// Collapse the navbar when page is scrolled
		$(window).scroll(navbarCollapse);
	
		// Scroll reveal calls
		window.sr = ScrollReveal();
		sr.reveal('.sr-icons', {
			duration: 600,
			scale: 0.3,
			distance: '0px'
		}, 200);
		sr.reveal('.sr-button', {
			duration: 1000,
			delay: 200
		});
		sr.reveal('.sr-contact', {
			duration: 600,
			scale: 0.3,
			distance: '0px'
		}, 300);
	
		// Magnific popup calls
		// $('.popup-gallery').magnificPopup({
		// 	delegate: 'a',
		// 	type: 'image',
		// 	tLoading: 'Loading image #%curr%...',
		// 	mainClass: 'mfp-img-mobile',
		// 	gallery: {
		// 		enabled: true,
		// 		navigateByImgClick: true,
		// 		preload: [0, 1]
		// 	},
		// 	image: {
		// 		tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		// 	}
		// });
	});

	var onsubmitcallback = function( token ) {
		document.querySelector( '.g-recaptcha-response' ).value = token;
		document.querySelector( '.wpcf7 form' ).submit();
	};

	$( '#thesubmit' ).click( function( event ) {
		grecaptcha.execute( 0 );
		event.preventDefault();
	});
  
  })(jQuery); // End of use strict