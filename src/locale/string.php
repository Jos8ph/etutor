<?php
include_once '../util/func_storage.php';
startSession();

/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 9/12/14
 * Time: 10:19 PM
 */
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
    echo 'success';
    return;
}

displayTextByLanguage();

/**
 * Created by Dai
 * Date: 9/12/14
 * Time: 10:23 PM
 * Description: display text based on the language user is viewing
 */
function displayTextByLanguage() {
    if (isset($_SESSION['lang']) == false) {
        $_SESSION['lang'] = 'vi';
    }
    switch ($_SESSION['lang']) {
        case 'en':
            require 'string_en.php';
            break;
        default:
            require 'string_vi.php';
    }
}