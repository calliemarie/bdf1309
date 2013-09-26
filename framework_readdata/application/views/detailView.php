<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body>
<h1>MVC Frameworks Read Data</h1>
<?php

foreach($details as $detail){
	echo '<li>'.$detail->title. '</li>';
	echo '<li>'.$detail->author. '</li>';
	echo '<li>'.$detail->genre. '</li>';
	echo '<li>'.$detail->howRead. '</li>';
	echo '<li>'.$detail->review. '</li>';
	echo '<br />';

}
?>

</body>
</html>
