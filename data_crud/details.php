<?php
require_once "db.php";
require_once "bookModel.php";
require_once "bookView.php";

$model = new bookModel(MY_DSN, MY_USER, MY_PASS);
$view = new bookView();

$rows = $model->getDetails($_GET['isbn']);

$view->showHeader('BookWorm');
$view->showDetail($rows);

echo '<a href="views/updateform.html">Edit Book</a>';

$view->showFooter();	



?>