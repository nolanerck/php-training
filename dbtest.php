<?
	$conn = new mysqli( "localhost", "root", "root", "test" );

	//print_r( $conn );

	$sql = "SELECT * FROM RockBands ORDER BY BandName";

	$result = $conn->query( $sql );

	//print_r( $result );

	while( $row = $result->fetch_assoc() )
	{
		print( $row[ "BandName" ] );
		print( $row[ "Genre" ] );
		print( $row[ "YearFormed" ] );
		print( "<br>" );
	}
?>