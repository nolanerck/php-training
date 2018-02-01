<?
	include "inc/siteHeader.php";
?>

<?
	include "inc/rockBandsUtils.php";

	$result = getAllRockBands();

	print( "<ul>" );

	while( $row = $result->fetch_assoc() )
	{
		$currentBandID = $row[ "RockBandID" ];

		print( "<li>" );
		print( "<a href='rockBandDetails.php?RockBandID={$currentBandID}'>" );
		print( $row[ "BandName" ] );
		print( "</a>" );
		print( "<a class='deletebutton' href='deleteBand.php?RockBandID={$currentBandID}'>Delete</a>" );
		print( "</li>" );
	}

	print( "</ul>" );
?>

<script>
	$(document).ready( function()
	{
		$( "a.deletebutton" ).on( "click", function(event)
		{
			event.preventDefault();
			
			if( confirm( "Are you sure you want to delete that band?" ) )
			{
				var myURL = $(this).attr( "href" );

				location.href = myURL;
			}
		});
	});
</script>


<?
	include "inc/siteFooter.php";
?>
