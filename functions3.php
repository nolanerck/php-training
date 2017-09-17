<?
	$favoriteColor = "purple";


	function drawInfo( $myColor )
	{
		$favoriteColor = $myColor;
		print( "<br>Your favorite color is: " . $favoriteColor );
	}

	drawInfo( "yellow" );

	print( "Your NEW favorite color is: " . $favoriteColor );

?>