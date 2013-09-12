<?php

	foreach($rows as $num => $row){
		echo "<h2>${row['title']}</h2>
			<p>Author: ${row['author']}</p>
			<p>Review: ${row['review']}</p>
			<br /><a href='index.php'>Back</a>";
			
	}//for each
?>