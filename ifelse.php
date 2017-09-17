<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?
	$myAge = 2;

	if( $myAge < 21 )
	{
		print "Sorry you are not allowed in.";
		print "Come back with a parent please.";

		if( $myAge <= 5 ) 
		{
			print "Kids 5 and under are free!";
		}
	}
	else if( $myAge == 21 )
	{
		print "Happy birthday! enjoy the show!";
	}
	else if( $myAge >= 65 )
	{
		print "You qualify for a senior discount.";
	}
	else
	{
		print "Welcome to the show!";
	}


?>


</body>
</html>