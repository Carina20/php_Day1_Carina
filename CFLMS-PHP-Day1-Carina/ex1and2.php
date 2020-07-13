<!DOCTYPE html>
<html>
<head>
	<title>PHP Day 1</title>
	<link rel="stylesheet" type="text/css" href="styles_php1.css">
</head>
<body>

	<?php
	$name = "Carina";

	echo "<h1>$name</h1>";

	$d=date("D");
	if ($d=="Mon")
		echo "Did you have a good start into the week?";
	else
		echo "Enjoy the rest of your day!"

	?>

</body>
</html>