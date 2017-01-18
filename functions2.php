<!doctype html>
<html>
<head>
	<title>Functions-II</title>
</head>
<body>
	<?php
	// using global variable
	$bar = "Outside";
	function foo() {
	global $bar;
	$bar = "Inside";
	}
	foo();
	echo $bar . "<br />";
	?>
	<?php
	// using local variables, arguments and return values
	$bar = "outside";
	function foo2($var) {
	$var = "Inside";
	return $var;
	}
	$bar = foo2($bar);
	echo $bar . "<br />";
	?>
	<br />
	<?php
	// using default value
	function paint($room="office",$color="red") {
	echo " The color of my {$room} is {$color}";
	}
	paint("hotel room","blue");
	?>
	 
</body>

</html>