<?php

session_start();

require_once "db.php";
require_once "bookModel.php";
require_once "bookView.php";
//require_once "views/addform.inc";

$model = new bookModel(MY_DSN, MY_USER, MY_PASS);
$view = new bookView();

$fields = array(
	'title' => 'Title',
	'author' => 'Author',
	'genre' => 'Genre',
	'howRead' => 'How Read',
	'review' => 'Review'
);

if(isset($_POST['submit'])){
	$values = array();
	
	foreach($fields AS $field=>$label){
		$values[$field] = isset($_POST[$field]) ? trim($_POST[$field]) : NULL;
	}
	$errors = array();
	/*if(!isset($values['title'])) || !strlen($values['title'])){
		$errors['title'] = "Please enter a book title."
	}
	if(!isset($values['author'])) || !strlen($values['author'])){
		$errors['author'] = "Please enter the book's author."
	}*/
	
	if(!count($errors)){
		$sql = "INSERT INTO book(title, author, genre, howRead, review)
		VALUES(?, ?, ?, ?, ?)";
		
		$statement = $db->prepare($sql);
		
		$result = $statement->execute(array_values($values));
	}
}	

	if(isset($result)){
		echo '<b>Successfully Added!</b>';
	}

?>

<h1>Add Book</h1>
<form method="post" action="addBook.php">

<?php
foreach($fields AS $field=>$label){
	echo "<label>{$label}: <br>";
	if(isset($errors[$field])){
		echo ' <span class="error">' .$errors[$field]. '</span><br>';
	}
	echo '<input type="text" name="' .$field.'"';
	if(isset($values[$field])){
		echo ' value="' .$values[$field].'"';
	}
	echo '/></label>';
	}	
//$isbn = empty($_POST['ISBN']) ?'' :trim($_POST['ISBN']);
//$title = empty($_POST['title']) ?'' :trim($_POST['title']);
//$author = empty($_POST['author']) ?'' :trim($_POST['author']);
//$genre = empty($_POST['genre']) ?'' :trim($_POST['genre']);
//$howRead = empty($_POST['howRead']) ?'' :trim($_POST['howRead']);
//$review = empty($_POST['review']) ?'' :trim($_POST['review']);

//$book = NULL;

//if(!empty($isbn) && !empty($title) && !empty($author) && !empty($genre) &&!//empty($howRead) && !empty($review)){
	//if(is_array($book)){
	//	header('location:book.php');
//	}
//}

//$view->showCreateNew();
$view->showHeader();
//$view->showAddForm();
$view->showFooter();
?>
<input type="submit" name="submit" value="Add"/>
</form>