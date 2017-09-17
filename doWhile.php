<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?

	$age = 55;

	do
	{
		print( "You are not old enough to enter this club." );
		print( "Sorry, try again when you're older." );

		$age++;
	}
	while( $age < 18 );

	print( "goodbye." );

?>

</body>
</html>