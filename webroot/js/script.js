(function($) {
	$.fn.galleryView = function() {
		return this.each(function() {
			var $view = $(this),
				$image = $('.gallery-image-view', $view),
				$info = $('.gallery-image-info', $view),
				$secondary = $('.gallery-image-secondary', $view);
		});
	};
})(jQuery);

$(document).ready(function() {
	$('.gallery-view').galleryView();
});