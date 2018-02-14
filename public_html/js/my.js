$(document).ready(function() {
	jQuery('.goods').hover(
		function(){
			$(this).find(".cover-item-gallery").fadeIn();
		},
		function(){
			$(this).find(".cover-item-gallery").fadeOut();
		}
	);

	var sizer = '.sizer4';

	var container = $('#gallery');

	$('.goods_list').imagesLoaded(function(){
		$('.goods_list').masonry({
			itemSelector: '.goods',
			columnWidth: 200,
			percentPosition: true
		});
	});
});