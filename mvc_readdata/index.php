<?php
require_once "db.php";
require_once "bookModel.php";
require_once "bookView.php";

$model = new bookModel(MY_DSN, MY_USER, MY_PASS);
$rows = $model->getBooks();

$view = new bookView();
$view->showHeader('Bookworm');
$view->showLatest($rows);
$view->showFooter();