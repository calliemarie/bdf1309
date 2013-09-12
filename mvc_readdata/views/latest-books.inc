<?php
foreach ($rows as $num => $row) {
		echo "<h2><a href= 'details.php?isbn=".$row['ISBN']."'>".$row['title']."</a></h2>";
	
	
}
?>