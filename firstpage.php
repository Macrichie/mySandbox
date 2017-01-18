<!doctype html>
<html>
<head>
	<title>First Page</title>
</head>
<body>
	<?php
	$link_text = "<Click> & you'll see";
	?>
	<a href="secondpage.php?name=<?php urlencode("Olakunle Makanjuola"); ?>&id=33">Next
	<?php
	echo htmlspecialchars($link_text);
	?>
	</a> 
 
</body>

</html>