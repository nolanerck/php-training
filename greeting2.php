<!DOCTYPE html>
<html>
	<head>
		<title>Greeting</title>
	</head>
	<body>
		Hello, <br />
		
		<? 
			//print "<strong>" . $_GET[ "firstname" ] . "<br />" . $_GET[ "lastname" ] . "</strong>";
			print "<strong>{$_GET['firstname']}<br />{$_GET['lastname']}</strong>";
		?>
	</body>
</html>