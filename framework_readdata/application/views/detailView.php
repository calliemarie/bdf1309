<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body>
	<div id="wrapper">
		<h1><?php echo $heading; ?></h1>
		
		<?php foreach ($query->result() as $row); ?>
		<h2><?php echo $row->title;?></h2>
			<p>Author:<?php echo $row->author;?></p>
			<p>Genre:<?php echo $row->genre;?></p>
			<p>How Read:<?php echo $row->howRead;?></p>
			<p>Review:<?php echo $row->review;?></p>
		<?php endforeach;?>
	</div>
</body>
</html>
