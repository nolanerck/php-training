<?
	$conn = new mysqli( "localhost", "root", "root", "MusicApp" );

	if( $_POST[ "RockBandID" ] == "" )
	{
		$sql = "INSERT INTO tblRockBands( BandName, Genre ) VALUES ( '{$_POST[ "BandName" ]}', '{$_POST[ "Genre" ]}' )";
	}
	else
	{
		$sql = "UPDATE tblRockBands 
				SET BandName = '{$_POST["BandName"]}', 
				    Genre = '{$_POST["Genre"]}' 
				WHERE RockBandID = {$_POST["RockBandID"]}";

	}

	if( $_POST[ "BandName" ] != "" )
	{
		$conn->query( $sql );
	}

	$conn->close();
?>

<script>
	location.href = "listRockBands.php";
</script>