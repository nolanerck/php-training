<?
	if( isset( $_GET[ "RockBandID" ] ) )
	{
		$conn = new mysqli( "localhost", "root", "root", "MusicApp" );

		$sql = "SELECT * FROM tblRockBands WHERE RockBandID = {$_GET[ "RockBandID" ]}";

		$result = $conn->query( $sql );

		$rsltRockBand = $result->fetch_assoc();

		$currentBandName = $rsltRockBand[ "BandName" ];
		$currentGenre    = $rsltRockBand[ "Genre" ];

		$currentRockBandID = $_GET[ "RockBandID" ];
	}
	else
	{
		$currentBandName = "";
		$currentGenre = "";
		$currentRockBandID = "";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Band Details</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
<h2>Band Details</h2>

<a href="listRockBands.php">List All Bands</a>

<form name="frmBand" id="frmBand" method="post" action="saveBand.php">

	<input type="hidden" name="RockBandID" value="<? print $currentRockBandID; ?>" />

	<div>
		Band Name:
		<input type="text" class="requiredField" name="BandName" value="<? print $currentBandName; ?>" />
	</div>

	<div>
		Genre:
		<input type="text" name="Genre" value="<? print $currentGenre; ?>" />
	</div>

	<input type="submit" name="btnSaveBand" value="Save Band" />

</form>

<script>
	$(document).ready( function()
	{
		$( "#frmBand" ).on( "submit", function()
		{	
			var bSubmit = true;

			$( ".requiredField" ).each( function()
			{
				if( $(this).val() == "" )
				{
					alert( "you forgot a required field" );
					bSubmit = false;
				}
			});

			return bSubmit;
		});
	});
</script>

</body>
</html>