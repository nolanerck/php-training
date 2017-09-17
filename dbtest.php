<?

	$conn = new mysqli( "localhost", "root", "root", "test2" );

//	print_r( $conn );

	$sql = "SELECT * FROM tblTest";

	$result = $conn->query( $sql );

//	print_r( $result );

	while( $row = $result->fetch_assoc() )
	{
		print( $row[ "firstName" ] );
		print( "<br>" );
	}

/*
	$conn = new PDO( "mysql:host=localhost;tst", "admin", "" );

	print_r( $conn );
*/
?>