<!DOCTYPE html>
<html>
<head>
<title>MVC Read Data Frameworks</title>
</head>
<body style="background-color:lightgray;">
<body>
	<h1 style ="color:purple;">BookWorm</h1>
	<p>A place to remember your favorite books</p>
	<?php
	foreach($rows as $row){
		echo "<li><a href='main/details/".$row->ISBN."'>$row->title</a></li>";
	}
	?>
</body>
</html>
