<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 12/13/2014
 * Time: 10:23 PM
 */

include_once '../util/func_storage.php';
startSession();
require_once '../locale/string.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/subjects.css">
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <title><?php echo(HOMEPAGE_TITLE); ?></title>
</head>

<body>

<!-- Insert header part -->
<?php require_once './inc/header.php'; ?>

<div id="main">

    <?php require_once './inc/right_sidebar.php'; ?>

    <section id="subjects_section">
        <article>
            <img src="./../../asset/img/english.jpg" />
            <h2><?php echo(ENGLISH); ?></h2>
            <p>This is description.</p>
        </article>

        <article>
            <img src="./../../asset/img/maths.png" />
            <h2><?php echo(MATHS); ?></h2>
            <p>This is description.</p>
        </article>

        <article>
            <img src="./../../asset/img/physics.jpg" />
            <h2><?php echo(PHYSICS); ?></h2>
            <p>This is description.</p>
        </article>

        <article>
            <img src="./../../asset/img/chemistry.png" />
            <h2><?php echo(CHEMISTRY); ?></h2>
            <p>This is description.</p>
        </article>
    </section>

</div>

<?php require_once './inc/footer.php'; ?>

</body>
</html>