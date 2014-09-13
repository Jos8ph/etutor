<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 9/12/14
 * Time: 10:19 PM
 */
displayTextDueToLanguage();

function displayTextDueToLanguage() {
    $lang = 'en';
    switch ($lang) {
        case 'en':
            require 'strings_en.php';
            break;
        default:
            require 'strings_vi.php';
    }
}