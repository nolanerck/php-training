<!DOCTYPE html>
<html>
<head>
	<title>My Rock Bands</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

	<h2>My Rock Bands</h2>

	<a href="bandDetail.php">Add New Band</a>

	<table>
		<thead>
			<tr>
				<th>Band Name</th>
				<th>Genre</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
<?
	$conn = new mysqli( "localhost", "root", "root", "MusicApp" );

	$sql = "SELECT * FROM tblRockBands";

	$rsltRockBands = $conn->query( $sql );

	while( $currentBand = $rsltRockBands->fetch_assoc() )
	{
		print( "<tr>" );
		print( "<td>" . $currentBand[ "BandName" ] . "</td>" );
		print( "<td>" . $currentBand[ "Genre" ] . "</td>" );

		print( "<td>" . "<a href='bandDetail.php?RockBandID={$currentBand["RockBandID"]}'>[edit]</a>" . "</td>" );
		print( "<td>" . "<a class='deleteButton' href='deleteBand.php?RockBandID={$currentBand["RockBandID"]}'>[delete]</a>" . "</td>" );

		print( "</tr>\n" );
	}

	$conn->close();
?>

		</tbody>
	</table>

	<script>
		$(document).ready( function()
		{
			$( ".deleteButton" ).on( "click", function()
			{
				if( confirm( "Are you sure you want to delete that?!" ) )
				{
					return true;
				}
				else
				{
					return false;
				}
			});
		});
	</script>


</body>
</html>