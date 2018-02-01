<?
	include "inc/rockBandsUtils.php";

	//print_r( $_POST );

	updateBand( $_POST[ "BandName" ],
	            $_POST[ "Genre" ],
	            $_POST[ "YearFormed" ],
	            $_POST[ "RockBandID" ] );

	header( "Location: rockBands.php" );
?>