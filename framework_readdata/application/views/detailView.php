<!DOCTYPE html>
<html>
<head>
<title>CodeIgniter Framework</title>
</head>
<body>
<h1>MVC Frameworks Read Data</h1>
<h2>Book Details</h2>
<?php

foreach($details as $detail){
	echo '<li>'.$detail->title. '</li>';
	echo '<li>'.$detail->author. '</li>';
	echo '<li>'.$detail->genre. '</li>';
	echo '<li>'.$detail->howRead. '</li>';
	echo '<li>'.$detail->review. '</li>';
	echo '<br />';


?>

</body>
</html>
