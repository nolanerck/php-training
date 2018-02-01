<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?
		$age = 15;

		do
		{
			print( "You are not old enough to enter this club.<br>" );
			$age++;
		}
		while( $age < 18 );

		print( "Goodbye" );
	?>

</body>
</html>