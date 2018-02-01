<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?
/*		$myAge = 3;

		if( $myAge == 1 )
		{
			print "1 year olds go in room 111";
		}
		else if( $myAge == 2 )
		{
			print( "2 year olds go in room 85" );
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
			print( "5 year olds go in the green office." );
		}
		else
		{
			print( "Sorry that child is too old." );
		}
*/		
		$myAge = 9;

		switch( $myAge )
		{
			case 1: print( "1 year olds go in room 111" );
					break;

			case 2: print( "2 year olds go in room 55" );
					break;

			case 3: print( "3 year olds go in room 76" );
					break;

			case 4: print( "4 year olds go upstairs." );
					break;

			case 5: print( "5 year olds go in the green office." );
					break;

/*			case 6:
			case 7:
			case 8:
			case 9:
			case 10: print( "kids 6 thru 10 can go play in the gym." );
					 break;
*/

			case $myAge >= 6 || $myAge <= 10: print( "kids 6 thru 10 can go play in the gym." );
					 						  break;	 

			default: print( "Sorry that child is too old." );
					 break;
		}


	?>

</body>
</html>