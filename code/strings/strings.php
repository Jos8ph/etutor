<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 9/12/14
 * Time: 10:19 PM
 */
displayTextByLanguage();

/**
 * Created by Dai
 * Date: 9/12/14
 * Time: 10:23 PM
 * Description: display text based on the language user is viewing
 */
function displayTextByLanguage() {
    $lang = 'vi';
    switch ($lang) {
        case 'en':
            require 'strings_en.php';
            break;
        default:
            require 'strings_vi.php';
    }
}