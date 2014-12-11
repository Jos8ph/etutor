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
    	<article class="news_article">
    		<img class="article_thumbnail" src="../../asset/img/article_img.jpg" />
    		<h4 class="article_title">This is title</h4>
    		<h5 class="article_info">
            Posted by <a href="#" class="article_author">Jos8ph</a>, on <span>12-11-2014 13:32</span>
            </h5>
    		<p class="article_content">Studio film-makers too often treat sequels as a cash-grab: an opportunity to turn a quick profit by offering a second helping of a movie that proved a success. But as a storytelling form, the sequel is ripe with possibility – an opportunity to examine the scenario of an original film from a different perspective or catch up on characters at a later date. Francis Ford Coppola’s The Godfather Part II, released 40 years ago on 12 December 1974, achieves both of those objectives, and pushes far beyond what was attempted in The Godfather. The sequel is a vision of American identity in the 20th Century that is less a melting pot than a tapestry, weaving together narrative strands concerning the immigrant experience, urban poverty, ethnic discrimination and even US foreign policy, with a stunning sequence set on the eve of the 1959 Cuban Revolution. It takes the gangster film set-up of The Godfather and pushes deeper, into a nation’s soul. (Paramount/Alamy)</p>
    	</article>

        <article class="news_article">
            <img class="article_thumbnail" src="../../asset/img/article_img.jpg" />
            <h4 class="article_title">This is title</h4>
            <h5 class="article_info">
                Posted by <a href="#" class="article_author">Jos8ph</a>, on <span>12-11-2014 13:32</span>
            </h5>
            <p class="article_content">Studio film-makers too often treat sequels as a cash-grab: an opportunity to turn a quick profit by offering a second helping of a movie that proved a success. But as a storytelling form, the sequel is ripe with possibility – an opportunity to examine the scenario of an original film from a different perspective or catch up on characters at a later date. Francis Ford Coppola’s The Godfather Part II, released 40 years ago on 12 December 1974, achieves both of those objectives, and pushes far beyond what was attempted in The Godfather. The sequel is a vision of American identity in the 20th Century that is less a melting pot than a tapestry, weaving together narrative strands concerning the immigrant experience, urban poverty, ethnic discrimination and even US foreign policy, with a stunning sequence set on the eve of the 1959 Cuban Revolution. It takes the gangster film set-up of The Godfather and pushes deeper, into a nation’s soul. (Paramount/Alamy)</p>
        </article>

        <article class="news_article">
            <img class="article_thumbnail" src="../../asset/img/article_img.jpg" />
            <h4 class="article_title">This is title</h4>
            <h5 class="article_info">
                Posted by <a href="#" class="article_author">Jos8ph</a>, on <span>12-11-2014 13:32</span>
            </h5>
            <p class="article_content">Studio film-makers too often treat sequels as a cash-grab: an opportunity to turn a quick profit by offering a second helping of a movie that proved a success. But as a storytelling form, the sequel is ripe with possibility – an opportunity to examine the scenario of an original film from a different perspective or catch up on characters at a later date. Francis Ford Coppola’s The Godfather Part II, released 40 years ago on 12 December 1974, achieves both of those objectives, and pushes far beyond what was attempted in The Godfather. The sequel is a vision of American identity in the 20th Century that is less a melting pot than a tapestry, weaving together narrative strands concerning the immigrant experience, urban poverty, ethnic discrimination and even US foreign policy, with a stunning sequence set on the eve of the 1959 Cuban Revolution. It takes the gangster film set-up of The Godfather and pushes deeper, into a nation’s soul. (Paramount/Alamy)</p>
        </article>
    </section>

</div>

<?php require_once './inc/footer.php'; ?>

</body>
</html>