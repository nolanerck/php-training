<?
	include "inc/siteHeader.php";

	$conn = new mysqli( "localhost", "root", "root", "test" );

	$sql = "SELECT BandName, Genre, YearFormed, MusicianName, Instrument 
			FROM RockBands 
			LEFT OUTER JOIN Musicians
				ON RockBands.RockBandID = Musicians.RockBandID
			ORDER BY BandName";

	$result = $conn->query( $sql );

?>

	<h2>Bands and Members!</h2>

<?
	while( $row = $result->fetch_assoc() )
	{
		print( "Band Name: " );
		print( $row[ "BandName" ] );
		print( "<br>" );

		print( "Genre: " );
		print( $row[ "Genre" ] );
		print( "<br>" );	

		print( "Year Formed: " );
		print( $row[ "YearFormed" ] );
		print( "<br>" );		

		print( "Musician Name: " );
		print( $row[ "MusicianName" ] );
		print( "<br>" );		

		print( "Instrument: " );
		print( $row[ "Instrument" ] );
		print( "<br>" );		
	}

	
?>


<?
	include "inc/siteFooter.php";
?>