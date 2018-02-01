<?
	function getAllRockBands()
	{
		$conn = new mysqli( "localhost", "root", "root", "test" );

		$sql = "SELECT * FROM RockBands ORDER BY BandName";

		$result = $conn->query( $sql );

		return $result;
	}

	function getBandDetails( $myBandID )
	{
		$conn = new mysqli( "localhost", "root", "root", "test" );

		$sql = "SELECT * FROM RockBands WHERE RockBandID = {$myBandID}";

		$result = $conn->query( $sql );

		return $result;
	}

	function saveBand( $myBandName, $myGenre, $myYearFormed )
	{
		$conn = new mysqli( "localhost", "root", "root", "test" );

		$sql = "INSERT INTO RockBands ( BandName, Genre, YearFormed ) VALUES ( '{$myBandName}', '{$myGenre}', {$myYearFormed} )";

		$result = $conn->query( $sql );		
	}

	function updateBand( $myBandName, $myGenre, $myYearFormed, $myRockBandID )
	{
		$conn = new mysqli( "localhost", "root", "root", "test" );

		$sql = "UPDATE RockBands 
		           SET BandName = '{$myBandName}', 
					   Genre = '{$myGenre}', 
					   YearFormed = {$myYearFormed} 
				WHERE RockBandID = {$myRockBandID}";

		$result = $conn->query( $sql );		
	}

	function deleteBand( $myRockBandID )
	{
		$conn = new mysqli( "localhost", "root", "root", "test" );

		$sql = "DELETE FROM RockBands WHERE RockBandID = {$myRockBandID}";

		$result = $conn->query( $sql );		
	}

?>