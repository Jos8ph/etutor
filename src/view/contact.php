<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 12/12/2014
 * Time: 11:05 AM
 */

include_once '../util/func_storage.php';
startSession();
require_once '../locale/string.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/contact.css">
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <title><?php echo(HOMEPAGE_TITLE); ?></title>
</head>

<body>

<!-- Insert header part -->
<?php require_once './inc/header.php'; ?>

<div id="main">

    <?php require_once './inc/right_sidebar.php'; ?>

    <section id="contact_us_section">
    	<form method="POST">
	    	<table>
	    		<tr>
	    			<td>Name</td>
	    			<td><input type="text" /></td>
	    		</tr>
	    		<tr>
	    			<td>Email</td>
	    			<td><input type="text" /></td>
	    			<td>Phone</td>
	    			<td><input type="text" /></td>
	    		</tr>
	    		<tr>
	    			<td>Subject</td>
	    			<td><input type="text" /></td>
	    		</tr>
	    		<tr>
	    			<td>Content</td>
	    			<td><textarea></textarea></td>
	    		</tr>
	    	</table>
    	</form>
    </section>

</div>

<?php require_once './inc/footer.php'; ?>

</body>
</html>