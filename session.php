<?php 
	session_start(); 
?>
<html>
<head>
	<title>Session</title>
</head>
<body>
	<?php
	$_SESSION['firstname'] = "Olakunle";
	$_SESSION['lastname'] = "Makanjuola";

	?>
	<?php
	$name = $_SESSION['firstname'] . " " . $_SESSION['lastname'];
	echo $name;
	?>

</body>

</html>