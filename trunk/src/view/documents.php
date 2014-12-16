<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 12/15/2014
 * Time: 11:32 AM
 */

include_once '../util/func_storage.php';
startSession();
require_once '../locale/string.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/documents.css">
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/documents.js"></script>
    <title><?php echo(HOMEPAGE_TITLE); ?></title>
</head>

<body>

<!-- Insert header part -->
<?php require_once './inc/header.php'; ?>

<div id="main">

	<section id="documents_category_section">
	<div id="documents_category_english" class="documents_category_subject">
			<h3><?php echo ENGLISH; ?></h3>
			<ul>
				<li class="documents_category_stage">
					<h4>Cấp 1</h4>
					<ul>
						<li class="documents_category_grade">Lớp 1</li>
						<li class="documents_category_grade">Lớp 2</li>
						<li class="documents_category_grade">Lớp 3</li>
						<li class="documents_category_grade">Lớp 4</li>
						<li class="documents_category_grade">Lớp 5</li>
					</ul>
				</li>
				<li class="documents_category_stage">
					<h4>Cấp 2</h4>
					<ul>
						<li class="documents_category_grade">Lớp 6</li>
						<li class="documents_category_grade">Lớp 7</li>
						<li class="documents_category_grade">Lớp 8</li>
						<li class="documents_category_grade">Lớp 9</li>
					</ul>
				</li>
				<li class="documents_category_stage">
					<h4>Cấp 3</h4>
					<ul>
						<li class="documents_category_grade">Lớp 10</li>
						<li class="documents_category_grade">Lớp 11</li>
						<li class="documents_category_grade">Lớp 12</li>
					</ul>
				</li>
			</ul>
		</div>

		<div id="documents_category_maths" class="documents_category_subject">
			<h3><?php echo MATHS; ?></h3>
			<ul>
				<li class="documents_category_stage">
					<h4>Cấp 1</h4>
					<ul>
						<li class="documents_category_grade">Lớp 1</li>
						<li class="documents_category_grade">Lớp 2</li>
						<li class="documents_category_grade">Lớp 3</li>
						<li class="documents_category_grade">Lớp 4</li>
						<li class="documents_category_grade">Lớp 5</li>
					</ul>
				</li>
				<li class="documents_category_stage">
					<h4>Cấp 2</h4>
					<ul>
						<li class="documents_category_grade">Lớp 6</li>
						<li class="documents_category_grade">Lớp 7</li>
						<li class="documents_category_grade">Lớp 8</li>
						<li class="documents_category_grade">Lớp 9</li>
					</ul>
				</li>
				<li class="documents_category_stage">
					<h4>Cấp 3</h4>
					<ul>
						<li class="documents_category_grade">Lớp 10</li>
						<li class="documents_category_grade">Lớp 11</li>
						<li class="documents_category_grade">Lớp 12</li>
					</ul>
				</li>
			</ul>
		</div>

		<div id="documents_category_physics" class="documents_category_subject">
			<h3><?php echo PHYSICS; ?></h3>
			<ul>
				<li class="documents_category_stage">
					<h4>Cấp 1</h4>
					<ul>
						<li class="documents_category_grade">Lớp 1</li>
						<li class="documents_category_grade">Lớp 2</li>
						<li class="documents_category_grade">Lớp 3</li>
						<li class="documents_category_grade">Lớp 4</li>
						<li class="documents_category_grade">Lớp 5</li>
					</ul>
				</li>
				<li class="documents_category_stage">
					<h4>Cấp 2</h4>
					<ul>
						<li class="documents_category_grade">Lớp 6</li>
						<li class="documents_category_grade">Lớp 7</li>
						<li class="documents_category_grade">Lớp 8</li>
						<li class="documents_category_grade">Lớp 9</li>
					</ul>
				</li>
				<li class="documents_category_stage">
					<h4>Cấp 3</h4>
					<ul>
						<li class="documents_category_grade">Lớp 10</li>
						<li class="documents_category_grade">Lớp 11</li>
						<li class="documents_category_grade">Lớp 12</li>
					</ul>
				</li>
			</ul>
		</div>

		<div id="documents_category_chemistry" class="documents_category_subject">
			<h3><?php echo CHEMISTRY; ?></h3>
			<ul>
				<li class="documents_category_stage">
					<h4>Cấp 1</h4>
					<ul>
						<li class="documents_category_grade">Lớp 1</li>
						<li class="documents_category_grade">Lớp 2</li>
						<li class="documents_category_grade">Lớp 3</li>
						<li class="documents_category_grade">Lớp 4</li>
						<li class="documents_category_grade">Lớp 5</li>
					</ul>
				</li>
				<li class="documents_category_stage">
					<h4>Cấp 2</h4>
					<ul>
						<li class="documents_category_grade">Lớp 6</li>
						<li class="documents_category_grade">Lớp 7</li>
						<li class="documents_category_grade">Lớp 8</li>
						<li class="documents_category_grade">Lớp 9</li>
					</ul>
				</li>
				<li class="documents_category_stage">
					<h4>Cấp 3</h4>
					<ul>
						<li class="documents_category_grade">Lớp 10</li>
						<li class="documents_category_grade">Lớp 11</li>
						<li class="documents_category_grade">Lớp 12</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

    <section id="documents_section">
    	<div id="documents_section_header">
    		<h2>Newest</h2>
			<label for="documents_sort_list">Sort by</label>
    		<select id="documents_sort_list">
    			<option>Newest</option>
    			<option>Popular</option>
    			<option>Rating</option>
    		</select>
    	</div>

    	<div class="document_item">
    		<img src="./../../../asset/img/no_cover_book.gif">
    		<h4>This is title</h4>
    		<h5>Uploader</h5>
    		<p><span>4.5/5</span><span>Download</span></p>
    	</div>
		<div class="document_item">
			<img src="./../../../asset/img/book1.jpg">
			<h4>This is title</h4>
			<h5>Uploader</h5>
			<p><span>4.5/5</span><span>Download</span></p>
		</div>
		<div class="document_item">
			<img src="./../../../asset/img/book2.png">
			<h4>This is title</h4>
			<h5>Uploader</h5>
			<p><span>4.5/5</span><span>Download</span></p>
		</div>
		<div class="document_item">
			<img src="./../../../asset/img/no_cover_book.gif">
			<h4>This is title</h4>
			<h5>Uploader</h5>
			<p><span>4.5/5</span><span>Download</span></p>
		</div>
		<div class="document_item">
			<img src="./../../../asset/img/book1.jpg">
			<h4>This is title</h4>
			<h5>Uploader</h5>
			<p><span>4.5/5</span><span>Download</span></p>
		</div>
		<div class="document_item">
			<img src="./../../../asset/img/book2.png">
			<h4>This is title</h4>
			<h5>Uploader</h5>
			<p><span>4.5/5</span><span>Download</span></p>
		</div>
	</section>

</div>

<?php require_once './inc/footer.php'; ?>

</body>
</html>