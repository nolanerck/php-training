<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?
/*
	$myAge = 45;

	print "My Age is {$myAge}<br>";

	if( $myAge == 21 )
	{
		print "Happy birthday! Welcome to the club!<br>";
	}

	print "My Age is {$myAge}";
*/
?>

<?
	print "<br>Logical Operators Demo<br>";

	$isRegistered = true;
	$hasParkingPermit = true;

/*	if( $isRegistered == true )
	{
		if( $hasParkingPermit == true )
		{
			print( "Thank you for regstering for school and paying for parking!" );
		}
		else
		{
			print( "thank you for registering for school and walking to save the environment." );
		}
	}
*/

	if( $isRegistered && $hasParkingPermit && $paidTuition && $livesIntheDistrict )
	{
		print( "Thank you for regstering for school and paying for parking!" );
	}


?>




</body>
</html>