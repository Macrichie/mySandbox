<!doctype html>
<html>
<head>
	<title>Loops: Break</title>
</head>
<body>
	<?php
	for ($count=0;  $count <= 10; $count++) {
		echo $count;
		if ($count == 10) { break; }
		echo ", ";
	}
	?>

</body>

</html>