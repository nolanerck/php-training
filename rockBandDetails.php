<?
	include "inc/siteHeader.php";

	include "inc/rockBandsUtils.php";

	$result = getBandDetails( $_GET[ "RockBandID" ] );

	$rsltBand = $result->fetch_assoc();

//	print_r( $rsltBand );
?>

	<form name="frmBand" id="frmBand" method="post" action="updateBand.php">

		<div>
			<label for="BandName">Band Name:</label>
			<input type="text" name="BandName" id="BandName" value="<? print $rsltBand[ "BandName" ]; ?>">
		</div>

		<div>
			<label for="Genre">Genre:</label>
			<input type="text" name="Genre" id="Genre" value="<? print $rsltBand[ "Genre" ]; ?>">
		</div>

		<div>
			<label for="YearFormed">Year Formed:</label>
			<input type="number" name="YearFormed" id="YearFormed" value="<?= $rsltBand[ "YearFormed" ]; ?>">
		</div>

		<div>
			RockBandID: <?= $rsltBand[ "RockBandID" ]; ?>
			<input type="hidden" name="RockBandID" id="RockBandID" value="<?= $rsltBand[ "RockBandID" ]; ?>">
		</div>

		<div>
			<input type="submit" name="btnSaveBand" id="btnSaveBand" value="Save Band">
		</div>

	</form>


<?
	include "inc/siteFooter.php";
?>