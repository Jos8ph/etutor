<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 9/14/14
 * Time: 5:19 PM
 */

/**
 * Created by Dai
 * Date: 9/14/14
 * Time: 5:20 PM
 * Description: check and start session if it has been not yet created
 */
function startSession() {
    if (session_status() == PHP_SESSION_NONE)
        session_start();
}