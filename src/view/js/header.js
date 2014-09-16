/**
 * Created by Dai on 9/13/14.
 */
$(document).ready(function() {

    var DropdownStateEnum = {
        DROPPING_DOWN: 1,
        DROPPED_DOWN: 2,
        DROPPING_UP: 3,
        DROPPED_UP: 4
    };

    $('#search_form').find('img').click(function() {
        $('#search_txtbox').animate({width: 'toggle'});
    });

    $('#language_list').change(function() {
        $.get(
            '../../src/locale/strings.php',
            {lang : $('#language_list').val()}
        ).done(function(response) {
            if (response == 'success') {
                location.reload();
            }
        });
    });

    var subjects_dropdown_status = DropdownStateEnum.DROPPED_UP;
    $('#subjects_dropdown_container').hover(function() {
        if (subjects_dropdown_status == DropdownStateEnum.DROPPED_UP) {
            $(this).children('a').css('background-color', '#03428e');
            $('#header_nav_subject_list').slideDown();
            subjects_dropdown_status = DropdownStateEnum.DROPPED_DOWN;
        }
    }, function() {
        if (subjects_dropdown_status == DropdownStateEnum.DROPPED_DOWN) {
            subjects_dropdown_status = DropdownStateEnum.DROPPING_UP;
            $('#header_nav_subject_list').delay(2000).slideUp('400', function() {
                subjects_dropdown_status = DropdownStateEnum.DROPPED_UP;
                $('#subjects_dropdown_container').children('a').css('background-color', '');
            });
        }
    });

});