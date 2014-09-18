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

    var signin_signup_dropdown_status = DropdownStateEnum.DROPPED_UP;
    $('#btn_signin_signup').click(function() {
        if (signin_signup_dropdown_status == DropdownStateEnum.DROPPED_UP) {
            $('#signin_signup_container').slideDown();
            signin_signup_dropdown_status = DropdownStateEnum.DROPPED_DOWN;
        } else {
            $('#signin_signup_container').slideUp();
            signin_signup_dropdown_status = DropdownStateEnum.DROPPED_UP;
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