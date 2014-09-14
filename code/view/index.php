<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 9/12/14
 * Time: 10:04 PM
 */

require_once '../utilities/utilities.php';
startSession();
require_once '../strings/strings.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="shared/header.css">
    <link rel="stylesheet" href="main-index.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="shared/header.js"></script>
    <script type="text/javascript" src="shared/jssor.core.js"></script>
    <script type="text/javascript" src="shared/jssor.utils.js"></script>
    <script type="text/javascript" src="shared/jssor.slider.js"></script>
    <script type="text/javascript" src="main-index.js"></script>
    <title><?php echo(HOMEPAGE_TITLE); ?></title>
</head>

<body>
<?php require_once 'shared/header.php'; ?>

<main>

<!-- Jssor Slider Begin -->
<!-- You can move inline styles to css file or css block. -->
<div id="slider1_container" style="position: relative; top: 0; left: 0; width: 680px; height: 340px; overflow: hidden; ">

    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0; left: 0;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0; left: 0;width: 100%;height:100%;">
        </div>
        <div style="position: absolute; display: block; background: url(../../assets/images/loading.gif) no-repeat center center;
                top: 0; left: 0;width: 100%;height:100%;">
        </div>
    </div>

    <!-- Slides Container -->
    <div data-u="slides" style="cursor: move; position: absolute; left: 0; top: 0; width: 680px; height: 340px; overflow: hidden;">
        <div>
            <img data-u="image" src="../../assets/images/02.jpg" />
        </div>
        <div>
            <img data-u="image" src="../../assets/images/03.jpg" />
        </div>
        <div>
            <img data-u="image" src="../../assets/images/04.jpg" />
        </div>
        <div>
            <img data-u="image" src="../../assets/images/05.jpg" />
        </div>
        <div>
            <img data-u="image" src="../../assets/images/06.jpg" />
        </div>
        <div>
            <img data-u="image" src="../../assets/images/07.jpg" />
        </div>
        <div>
            <img data-u="image" src="../../assets/images/08.jpg" />
        </div>
        <div>
            <img data-u="image" src="../../assets/images/09.jpg" />
        </div>
        <div>
            <img data-u="image" src="../../assets/images/10.jpg" />
        </div>
        <div>
            <img data-u="image" src="../../assets/images/11.jpg" />
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
        <span data-u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 148px; left: 0;">
        </span>
    <!-- Arrow Right -->
        <span data-u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 148px; right: 0">
        </span>
    <!-- Arrow Navigator Skin End -->
    <a style="display: none" href="http://www.jssor.com">jquery responsive slider</a>
</div>

    <aside id="sidebar">

    </aside>

</main>

</body>

<?php require_once 'shared/footer.php'; ?>

</html>