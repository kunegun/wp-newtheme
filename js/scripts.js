(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		$('ul.slider').bxSlider({
			mode: 'fade',
			pager: false,
		});

		jQuery('.single-ruta header nav ul li:contains("Rutas")').addClass('current_page_item');

		jQuery('.single-post header nav ul li:contains("Noticias")').addClass('current_page_item');

	});

})(jQuery, this);
