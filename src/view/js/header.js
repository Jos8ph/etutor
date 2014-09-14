/**
 * Created by Dai on 9/13/14.
 */
$(document).ready(function() {

    $('#search_form').find('img').click(function() {
        $('#search_input').animate({width: 'toggle'});
    });

    $('#language_list').change(function() {
        $.get(
            'http://localhost/src/locale/strings.php',
            {lang : $('#language_list').val()}
        ).done(function(response) {
            if (response == 'success') {
                location.reload();
            }
        });
    });

});