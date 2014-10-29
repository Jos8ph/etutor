<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 9/12/14
 * Time: 10:04 PM
 */
include_once '../util/func_storage.php';
startSession();
require_once '../locale/string.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main_index.css">
    <link rel="stylesheet" href="css/right_sidebar.css">
    <link rel="stylesheet" href="css/footer.css">
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <script type="text/javascript" src="js/main_index.js"></script>
    <title><?php echo(HOMEPAGE_TITLE); ?></title>
</head>

<body>

<!-- Insert header part -->
<?php require_once './inc/header.php'; ?>

<div id="main">

    <?php require_once './inc/right_sidebar.php'; ?>

    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container">

        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0; left: 0;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0; left: 0;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../../asset/img/loading.gif) no-repeat center center;
                top: 0; left: 0;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div data-u="slides" style="cursor: move; position: absolute; left: 0; top: 0; width: 700px; height: 350px; overflow: hidden;">
            <div>
                <img data-u="image" src="../../asset/img/02.jpg" />
            </div>
            <div>
                <img data-u="image" src="../../asset/img/03.jpg" />
            </div>
            <div>
                <img data-u="image" src="../../asset/img/04.jpg" />
            </div>
            <div>
                <img data-u="image" src="../../asset/img/05.jpg" />
            </div>
            <div>
                <img data-u="image" src="../../asset/img/06.jpg" />
            </div>
            <div>
                <img data-u="image" src="../../asset/img/07.jpg" />
            </div>
            <div>
                <img data-u="image" src="../../asset/img/08.jpg" />
            </div>
            <div>
                <img data-u="image" src="../../asset/img/09.jpg" />
            </div>
            <div>
                <img data-u="image" src="../../asset/img/10.jpg" />
            </div>
            <div>
                <img data-u="image" src="../../asset/img/11.jpg" />
            </div>
        </div>


        <!-- bullet navigator container -->
        <div data-u="navigator" class="jssorb05" style="position: absolute; top: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        <!-- Arrow Navigator Skin Begin -->

        <!-- Arrow Left -->
        <span data-u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 150px; left: 0;">
        </span>
        <!-- Arrow Right -->
        <span data-u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 150px; right: 0">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">jquery responsive slider</a>

    </div>

    <section id="temp_name">
        <article>
            <h4>Something 1</h4>
        </article>
        <article>
            <h4>Something 2</h4>
        </article>
        <article>
            <h4>Something 3</h4>
        </article>
        <article>
            <h4>Something 4</h4>
        </article>
    </section>

</div>

<?php require_once './inc/footer.php'; ?>

</body>
</html>