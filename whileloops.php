<!doctype html>
<html>
<head>
	<title>Loops: While</title>
</head>
<body>
	<?php
	$count = 0;
	while ($count <= 100) {
		echo $count ." ,";
		$count++;
	}
	echo "<br />Count: {$count}";
	?>
	<br />
	<?php
	$count = 0;
	while ($count <= 1000) {
	if ($count == 100) {
	echo "Hurray!!! Hundred Makes A Century, ","";
	} else {
		echo $count ." ,";
	}
	$count++;
	}
	echo "<br />Count: {$count}";
	?>	
</body>

</html>