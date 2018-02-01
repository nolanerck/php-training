<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?
		$myAge = 45;

/*		print "My age is " . $myAge . " and i will be " 
						   . $myAge . " for the rest of the year.";
*/

//		print "My age is {$myAge} and I will be {$myAge} for the rest of the year."; 
	?>

	<?
		// addition w/ quoted and un-quoted variables.

/*		$testScore = "100";
		$bonusPoint = 5;

		$totalScore = $testScore + $bonusPoint;

		print( "Your combined score is: {$totalScore}" );
*/		
	?>

	<?
		// boolean / logical operators

/*		$isRegistered = true;
		$hasParkingPermit = false;

		if( $isRegistered == true )
		{
			if( $hasParkingPermit == true )
			{
				print( "Thank you for regstering for school and paying for parking." );	
			}
			else
			{
				print( "Thank you for registering and walking to save the environment." );
			}
		}
*/
/*
		$isRegistered = true;
		$hasParkingPermit = false;

		if( $isRegistered == true && $hasParkingPermit == true )
		{
			print( "Thank you for regstering for school and paying for parking." );
		}
		else if( $isRegistered == true || $hasParkingPermit == true )
		{
			print( "Thank you for buying SOMEthing to pay our bills." );

			if( $isRegistered == true )
			{
				print( "Ah! you registered for class!" );
			}
			else if( $hasParkingPermit == true )
			{
				print( "Ah! you paid for parking!" );
			}
		}
*/

		$isRegistered = true;
		$hasParkingPermit = false;
		$paidTuition = false;
		$livesInTheDistrict = false;

		if( ( $isRegistered && !$hasParkingPermit ) || ( $paidTuition && $livesInTheDistrict ) )
		{
			print( "Welcome to school!" );
		}		

	?>




</body>
</html>