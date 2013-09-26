<!DOCTYPE html>
<html>
<head>
<title>MVC Read Data Frameworks</title>
</head>
<body>
	<?php
	foreach($rows as $row){
		echo "<li><a href='read/details/".$row->isbn."'>$row->title</a></li>";
	}
	?>
</body>
</html>
