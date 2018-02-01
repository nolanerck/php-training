<?
	include "inc/siteHeader.php";
?>

<?
	include "inc/musicianUtils.php";

	$result = getAllMusicians();

	print ( "<ul>" );

	while( $row = $result->fetch_assoc() )
	{
		$curMusician = $row[ "MusicianID" ];

		print( "<li>" );
		print( "<a href='musicianDetails.php?MusicianID={$curMusician}'>" );
		print( $row[ "MusicianName" ] );
		print( "</a>" );
		print( "</li>" );
	}

	print( "</ul>" );
?>


<?
	include "inc/siteFooter.php";
?>
