<!DOCTYPE html>
<html>
<head>
	<title>URL Variables</title>
</head>
<body>

	<?
		//print( "Hello, " . $myName );

		print( "Hello, " . $_GET[ "myName" ] );

		print( "<br>" );

		print( "Welcome to " . $_GET[ "className" ] . " class" );

		print( "<br>" );

		print( "Your teacher is " . $_GET[ "teacherName" ] );

	?>


</body>
</html>