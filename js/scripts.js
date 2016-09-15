(function ($, root, undefined) {

	$(function () {

		'use strict';

		$('nav ul').slicknav();

		jQuery('.gallery a').each(function(){
			jQuery(this).attr({'data-lightbox':'galeria'})
		});

		lightbox.option({
			'showImageNumberLabel': false,
			'wrapAround': false
		});

		// DOM ready, take it away
		$('ul.slider').bxSlider({
			mode: 'fade',
			pager: false,
		});

		jQuery('.single-rutas header nav ul li:contains("Rutas")').addClass('current_page_item');

		jQuery('.single-post header nav ul li:contains("Noticias")').addClass('current_page_item');

	});

})(jQuery, this);
