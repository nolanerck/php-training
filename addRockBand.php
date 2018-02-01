<?
	include "inc/siteHeader.php";
?>

	<h2>Add New Band</h2>

	<form name="frmBand" id="frmBand" method="post" action="saveBand.php">

		<div>
			<label for="BandName">Band Name:</label>
			<input type="text" name="BandName" id="BandName">
		</div>

		<div>
			<label for="Genre">Genre:</label>
			<input type="text" name="Genre" id="Genre">
		</div>

		<div>
			<label for="YearFormed">Year Formed:</label>
			<input type="number" name="YearFormed" id="YearFormed">
		</div>

		<div>
			<input type="submit" name="btnSaveBand" id="btnSaveBand" value="Save Band">
		</div>

	</form>

<?
	include "inc/siteFooter.php";
?>
