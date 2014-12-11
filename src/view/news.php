<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 10/29/2014
 * Time: 11:09 PM
 */

include_once '../util/func_storage.php';
startSession();
require_once '../locale/string.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/news.css">
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <title><?php echo(HOMEPAGE_TITLE); ?></title>
</head>

<body>

<!-- Insert header part -->
<?php require_once './inc/header.php'; ?>

<div id="main">

    <?php require_once './inc/right_sidebar.php'; ?>

    <section id="news_section">
    	<article>
    		<img src="" />
    		<h4>This is title</h4>
    		<h5>Posted by <span class="article_author"></span>, at <span class="article_date">12-11-2014 13:32</span></h5>
    		<p>This is contents</p>
    	</article>
    </section>

</div>

<?php require_once './inc/footer.php'; ?>

</body>
</html>