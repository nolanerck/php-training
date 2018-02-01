<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?
		$myBeatles = array(
								"bass" => "Paul McCartney",
								"electricguitar" => "George Harrison",
								"currentDrummer" => "Ringo Starr",
								"acousticguitar" => "John Lennon",
								"formerDrummer" => "Pete Best", 
								"manager" => "George Martin"
						  );

/*
		print( "Current beatle: " );
		print( $myBeatles[ "currentDrummer" ] );
		print( "Former beatle: " );
		print( $myBeatles[ "formerDrummer" ] );
*/

		foreach( $myBeatles as $key => $c )
		{
			if( $key == "manager" )
			{
				print( "Manager: " );				
			}
			else
			{
				print( "Current Beatle: " );	
			}
			
			print( $c );
			print( "<br>" );
		}		

	?>

</body>
</html>