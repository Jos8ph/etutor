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

    var signin_dropdown_status = DropdownStateEnum.DROPPED_UP;
    $('#btn_sign_in_box').click(function() {
        if (signin_dropdown_status == DropdownStateEnum.DROPPED_UP) {
            $('.sign_in_box').slideDown();
            signin_dropdown_status = DropdownStateEnum.DROPPED_DOWN;
        } else {
            $('.sign_in_box').slideUp();
            signin_dropdown_status = DropdownStateEnum.DROPPED_UP;
        }
    });

    var signup_dropdown_status = DropdownStateEnum.DROPPED_UP;
    $('.btn_sign_up_box').click(function() {
        if (signup_dropdown_status == DropdownStateEnum.DROPPED_UP) {
            $('.sign_up_box').slideDown();
            signup_dropdown_status = DropdownStateEnum.DROPPED_DOWN;
        } else {
            $('.sign_up_box').slideUp();
            signup_dropdown_status = DropdownStateEnum.DROPPED_UP;
        }
    });

    $('#tab_signin').click(function() {
        if ($(this).hasClass('active_tab') == false) {
            ExchangeActiveState($(this), $('#tab_signup'));
            $('#signin_container').show();
            $('#signup_container').hide();
        }
    });

    $('#tab_signup').click(function() {
        if ($(this).hasClass('active_tab') == false) {
            ExchangeActiveState($(this), $('#tab_signin'));
            $('#signup_container').show();
            $('#signin_container').hide();
        }
    });

    function ExchangeActiveState($toActive, $toDisable) {
        $toActive.removeClass('inactive_tab');
        $toActive.addClass('active_tab');
        $toDisable.addClass('inactive_tab');
        $toDisable.removeClass('active_tab');
    }

    $('#search_form').find('img').click(function() {
        $('#txtbox_search').animate({width: 'toggle'});
    });

    $('#language_list').change(function() {
        $.get(
            '../../src/locale/string.php',
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