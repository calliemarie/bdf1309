<?php
require_once "db.php";
require_once "bookModel.php";
require_once "bookView.php";

$model = new bookModel(MY_DSN, MY_USER, MY_PASS);
$view = new bookView();

$rows = $model->getDetails($_GET['isbn']);

$view->showHeader('Bookworm');
$view->showDetail($rows);
$view->showFooter();	



?>