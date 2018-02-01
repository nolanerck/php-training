<?

	include "inc/rockBandsUtils.php";

	deleteBand( $_GET[ "RockBandID" ] );

	header( "Location: rockBands.php" );
?>