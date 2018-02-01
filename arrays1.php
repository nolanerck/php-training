<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?
/*		$name1 = "John";
		$name2 = "Paul";
		$name3 = "George";
		$name4 = "Ringo";
		$name5 = "Pete";

		print( $name1 );
		print( $name2 );
		print( $name3 );
		print( $name4 );
		print( $name5 );
*/

		// var myBeatles = [ "John", "Paul", "George", "Ringo", "Pete" ]; /* JavaScript array */
/*		$myBeatles = array( "John", "Paul", "George", "Ringo", "Pete" );

		print( $myBeatles[ 0 ] );
		print( $myBeatles[ 1 ] );
		print( $myBeatles[ 2 ] );
		print( $myBeatles[ 3 ] );
		print( $myBeatles[ 4 ] );
*/

		$singers = array( "Lorde", 
						  "Cindy Lauper", 
						  "Kesha", 
						  "Beyonce", 
						  "Cinder Block", 
						  "Taylor Swift", 
						  "Madonna", 
						  "Adele" );

/*		for( $i = 0; $i < count( $singers ); $i++ )
		{
			print( "<strong>Current singer</strong>: " . $singers[ $i ] );
			print( "<br>" );
		}
*/

		foreach( $singers as $s )
		{
			print( "<strong>Current singer</strong>: {$s}" );
			print( "<br>" );
		}


	?>

</body>
</html>