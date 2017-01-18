<!doctype html>
<html>
<head>
	<title>Loops: Pointers</title>
</head>
<body>
	<?php
		$ages = array(4, 8, 15, 16, 23, 42);
	?>
	<?php
	echo "1: " . current($ages). "<br />";
	next($ages);
	echo "1: " . current($ages). "<br />";
	?>
</body>

</html>