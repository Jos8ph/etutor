/**
 * Created by Dai on 12/15/14.
 */

$(document).ready(function() {

	var previousClickedCategory = null;

	$('.documents_category_subject > h3').click(function() {
		$(this).siblings('ul').slideToggle();
	});

	$('.documents_category_stage > h4').click(function() {
		var gradeList = $(this).next();
		if (gradeList.css("display") == "none") {
			$(this).css('background-image', 'url("./../../../asset/img/minus_icon.png")');
    		gradeList.slideDown();
		} else {
			$(this).css('background-image', 'url("./../../../asset/img/plus_icon.png")');
			gradeList.slideUp();
		}
	});

	$('.documents_category_grade').click(function() {
		if (previousClickedCategory === null) {
			previousClickedCategory = $(this);
		}
		var stageCategory = previousClickedCategory.parent().prev();
		var subjectCategory = stageCategory.closest('ul').prev();
		previousClickedCategory.removeClass('documents_category_selected');
		stageCategory.removeClass('documents_category_selected');
		subjectCategory.removeClass('documents_category_selected');

		stageCategory = $(this).parent().prev();
		subjectCategory = stageCategory.closest('ul').prev();
		$(this).addClass('documents_category_selected');
		stageCategory.addClass('documents_category_selected');
		subjectCategory.addClass('documents_category_selected');

		previousClickedCategory = $(this);
	});
});