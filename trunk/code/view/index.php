<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 9/12/14
 * Time: 10:04 PM
 */
require '../strings/strings.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/header.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--    <script>-->
<!--        $( document ).ready(function() {-->
<!--           -->
<!--        });-->
<!--    </script>-->
    <title><?php echo(homepage_title); ?></title>
</head>

<body>

<header>
    <img id="logo_header" src="../../assets/images/logo_header.png">
    <div id="top_bar">
        <ul id="social_bar">
            <li>
                <a href="#"><?php echo(login_signup); ?></a>
            </li>
            <li>
                <a href="#">
                    <img src="../../assets/images/fb_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../../assets/images/twitter_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../../assets/images/google_plus_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../../assets/images/youtube_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../../assets/images/rss_icon.png">
                </a>
            </li>
        </ul>
    </div>
    <p id="telephone">Tel: +84 900 000 000</p>
    <nav id="header_nav">
        <ul>
            <li>
                <a href="#"></a>
            </li>
        </ul>
    </nav>
</header>

</body>

</html>