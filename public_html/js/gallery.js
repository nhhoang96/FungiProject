$(document).ready(function () {
//find div
	var div = $('div.showcase');
//find ul width
	var liNum = $(div).find('ul').children('li').length;
	var speed = 1000;
	var containerWidth = 848;
	var itemWidth = 212;
//Remove scrollbars
	$(div).css({overflow: 'hidden'});
	$('div.right-arrow').click(function (e) {
		if (($(div).scrollLeft() + containerWidth) < (liNum * itemWidth)) {
			$(div).animate({
				scrollLeft: '+=' + containerWidth
			}, speed);
		}
	});
	$('div.left-arrow').click(function (e) {
		if (($(div).scrollLeft() + containerWidth) > containerWidth) {
			$(div).animate({
				scrollLeft: '-=' + containerWidth
			}, speed);
		}
	})
});
