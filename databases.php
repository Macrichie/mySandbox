<?php
	$connection = mysql_connect("localhost", "root", "OtlPHP07");
	if (!$connection) {
	die("Database Connectioin Failed: " . mysql_error());
	}

	
	$db_select = mysql_select_db("up_and_running",$connection);
	if (!$db_select) {
	die("Database selection failed: " . mysql_error());
	}
?>
<html>
<head>
	<title>Databases</title>
</head>
<body>
	<?php
	$result = mysql_query("SELECT * FROM cars", $connection);
	if (!$result) {
	die("Database query failed: " . mysql_error());
	}

	while ($row = mysql_fetch_array($result)) {
		echo $row["make_id"]." ".$row["mileage"]. " " .$row["description"]."<br />";
	}

	?>
</body>

</html>
<?php
mysql_close ($connection);
?>