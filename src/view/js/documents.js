/**
 * Created by Dai on 12/15/14.
 */

$(document).ready(function() {
	$('.documents_category_subject > h3').click(function() {
		$(this).siblings('ul').slideToggle();
	});

	$('.documents_category_stage > h4').click(function() {
		var gradeList = $(this).siblings('ul');
		if (gradeList.css("display") == "none") {
			$(this).css('background-image', 'url("./../../../asset/img/minus_icon.png")');
    		gradeList.slideDown();
		} else {
			$(this).css('background-image', 'url("./../../../asset/img/plus_icon.png")');
			gradeList.slideUp();
		}
	});
});