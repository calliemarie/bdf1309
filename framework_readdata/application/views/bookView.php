<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body>
	<div id="wrapper">
		<h1><?php echo $heading; ?></h1>
		<h2>Home Page</h2>
		<?php foreach ($query->result() as $row); ?>
		
		<h3><?php echo anchor('main/details/' . $row->isbn, $row->title); ?></h3>
		<?php endforeach;?>
	</div>
</body>
</html>
