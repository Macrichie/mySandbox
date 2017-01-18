<!doctype html>
<html>
<head>
	<title>Logical Expressions</title>
</head>
<body>
	<?php
	$a = 4;
	$b = 4;
	if ($a > $b) {
		echo "a is greater than b";
	}
	elseif ($a == $b) {
	echo "a is not greater than b";	
	}
	else { echo "I am a genius";
	}
	?>
	<br />
	<?php
	    $c = 1;
	    $d = 1;
	    if (($a > $b) && ($c > $d)){
	    echo "a is larger than b AND ";
	    echo "c is larger than d";
	}
	    if (($a > $b) || ($c > $d)){
	    echo "a is larger than b OR ";
	    echo "c is larger than d";
	} else {
	echo "neither of ther dudes are older than eachother :)";
	}	
	?>
	<br />
	<?php
	unset($a);
	if (!isset($a)) {
	$a = 100;
	}
	echo $a;
	?>
	<br />
	<?php
	if (is_int($a)) {
	settype($a, "string");
	}
	echo gettype($a);
	?>


</body>

</html>