<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?
/*	$myAge = 3;

	if( $myAge == 1 )
	{
		print( "1 year olds go in room 111" );
	}
	else if( $myAge == 2 )
	{
		print( "2 year olds go in room B5" );
	}
	else if( $myAge == 3 )
	{
		print( "3 year olds go in room 76" );
	}
	else if( $myAge == 4 )
	{
		print( "4 year olds go upstairs" );
	}
	else if( $myAge == 5 )
	{
		print( "5 year olds are in the green office." );
	}
	else
	{
		print( "Sorry that kid is too old." );
	}
*/

	$myAge = 2;

	switch( $myAge )
	{
		case 1: print( "1 year olds go in room 111" );
				break;

		case 2: print( "2 year olds go in room B5" );
		        break;

		case 3: print( "3 year olds go in room 76" );
				break;

		case 4: print( "4 year olds go upstairs" );
				break;

	 	case 5: print( "5 year olds are in the green office." );
	 			break;
	}

?>

</body>
</html>