<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?
/*
	$name1 = "John";
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
/*
	$myBeatles = array( "John", "Paul", "George", "Ringo", "Pete" );

	print( $myBeatles[ 0 ] );
	print( $myBeatles[ 1 ] );
	print( $myBeatles[ 2 ] );
	print( $myBeatles[ 3 ] );
	print( $myBeatles[ 4 ] );
*/

	$myBeatles = array( "John", 
						"Stewart Sutcliffe",
						"Paul",
						"Cynthia Lennon", 
						"George", 
						"Ringo", 
						"Pete", 
						"Billy", 
						"Eric",
						"George Martin", 
						"Geoff Emerick" );

	for( $i = 0; $i < count( $myBeatles ); $i++ )
	{
		print( "<strong>" );
		print( $myBeatles[ $i ] );
		print( "</strong>" );
		print( "<br>\n" );
	}

	for( $i = 0; $i < count( $myBeatles ); $i++ )
	{
		print( "<u><em>" );
		print( $myBeatles[ $i ] );
		print( "</em></u>" );
		print( "<br>\n" );
	}

	foreach( $myBeatles as $m )
	{
		print( $m );
		print( "<br>" );
	}

?>

</body>
</html>