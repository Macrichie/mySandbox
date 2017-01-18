<!doctype html>
<html>
<head>
	<title>Functions</title>
</head>
<body>
	<?php
	function say_hello() {
	echo "Hello World!<br />";
	}
	say_hello();

	function say_hello2($word) {
	echo "Hello {$word}!<br />";
	}
	say_hello2("World");  
	say_hello2("Everyone");
	
	$name = "Olakunle Makanjuola";
	say_hello2($name);
	
	function say_hello3($greeting, $target, $punct) {
	echo $greeting . ", " . $target . $punct . "<br />";
	return true;
	}
	say_hello3("Greetings", $name, "!");

	?>
	<br />
	<?php
	function addition($val1, $val2) {
	$sum = $val1  + $val2;
	return $sum;
	}
	$new_val = addition(3,4);
	echo $new_val;
	if (addition(5,7) == 11) {
	echo "Yes";
	} else { echo " Try Again";}

	function add_subt($val1, $val2) {
	$add = $val1  + $val2;
	$subt = $val1  - $val2;
	$result = array($add, $subt);
	return $result;
	}
	$result_array = add_subt(10,5);
	echo "Add: " . $result_array[0];
	echo "Subt: " . $result_array[1];
	
	?>    
	
</body>

</html>