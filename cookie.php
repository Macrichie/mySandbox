<?php 
	setcookie(test, 0, time()+(60*60*24*7));

	setcookie(mytest, 0, time()+(60*60*24*7));
	echo $_COOKIE['mytest']; 
?>
<!doctype html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>

	<strong>Remember: setting cookies MUST happen before HTML is set.</strong><br />
	<strong>Unless outputbuffering is turned ON.</strong>	


</body>

</html>