<?php 
	unset($_COOKIE['test']); 
?>
<html>
<head>
	<title>Cookies</title>
</head>
<body>

	<?php
	$var1 = 0;
	if (isset($_COOKIE['test'])); {
	$var1 = $_COOKIE['test'];
	}
	echo $var1;
	?>

</body>

</html>