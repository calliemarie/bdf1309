<!DOCTYPE html>
<html>
<head>
<title>MVC Read Data Frameworks</title>
</head>
<body>
	<h1>BookWorm</h1>
	<p>A place to remember your favorite books</p>
	<?php
	foreach($rows as $row){
		echo "<li><a href='main/details/".$row->ISBN."'>$row->title</a></li>";
	}
	?>
</body>
</html>
