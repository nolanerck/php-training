<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?
		$myBeatles = array(
								"bass" => array( 
													"name" => "Paul McCartney",
													"age" => 71,
													"OtherBands" => "Wings,The Fireman"
								     			),

								"drums" => array(
													"name" => "Ringo Starr",
													"age" => 64
												  ),

								"guitars" => array( 
													"name" => "George Harrison",
													"age" => 65,
													"OtherBands" => "The Traveling Wilburys"
												  )
						  );

		foreach( $myBeatles as $currentBeatle )
		{
			print( $currentBeatle[ "name" ] );
			print( "<br>" );
			print( $currentBeatle[ "age" ] );
			print( "<br>" );

			if( $currentBeatle[ "OtherBands" ] != "" )
			{
				print( "He also played with: " );
				print( $currentBeatle[ "OtherBands" ] );
				print( "<br>" );			
			}
		}
		
	?>

</body>
</html>