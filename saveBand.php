<?
	//print $_POST[ "BandName" ];

	//print_r( $_POST );

	include "inc/rockBandsUtils.php";

	saveBand( $_POST[ "BandName" ], 
			  $_POST[ "Genre" ], 
			  $_POST[ "YearFormed" ] );

//	header( "Location: rockBands.php" );
?>

<script>location.href = "rockBands.php";</script>