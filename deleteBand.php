<?
	$conn = new mysqli( "localhost", "root", "root", "MusicApp" );

	$sql = "DELETE FROM tblRockBands WHERE RockBandID = {$_GET["RockBandID"]}";

	$conn->query( $sql );

	$conn->close();
?>

<script>
	location.href = "listRockBands.php";
</script>
