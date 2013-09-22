<?php

	foreach($rows as $num => $row){
		echo "<h2>${row['title']}</h2>
			<p>ISBN: ${row['ISBN']}</p>
			<p>Author: ${row['author']}</p>
			<p>Genre: ${row['genre']}</p>
			<p>Review: ${row['review']}</p>
			<p>HowRead: ${row['howRead']}</p>
			<br /><a href='index.php'>Back</a>";
			
	}//for each
?>