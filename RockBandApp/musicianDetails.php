<?
	include "inc/siteHeader.php";

	include "inc/musicianUtils.php";

	$result = getMusicianDetails( $_GET[ "MusicianID" ] );
	$rsltMusician = $result->fetch_assoc();

//	print_r( $rsltMusician );
?>

	<div id="musicianDetails">
		<div>Name: <?= $rsltMusician[ "MusicianName" ]; ?></div>
		<div>Instrument: <?= $rsltMusician[ "Instrument" ]; ?></div>
		<div>RockBandID: <?= $rsltMusician[ "RockBandID" ]; ?></div>
		<div>MusicianID: <?= $rsltMusician[ "MusicianID" ]; ?></div>
	</div>

<?
	include "inc/siteFooter.php";
?>