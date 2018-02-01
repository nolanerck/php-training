<?

	function getAllMusicians()
	{
		$conn = new mysqli( "localhost", "root", "root", "test" );

		$sql = "SELECT * FROM Musicians ORDER BY MusicianName";

		$result = $conn->query( $sql );

		return $result;
	}

	function getMusicianDetails( $myMusicianID )
	{
		$conn = new mysqli( "localhost", "root", "root", "test" );

		$sql = "SELECT * FROM Musicians WHERE MusicianID = {$myMusicianID}";

		$result = $conn->query( $sql );

		return $result;
	}

?>