<?
	$movieTitle = "Top Gun";

	function displayCredits( $myMovieTitle, $actorName )
	{
		//global $movieTitle;
		print( "Now showing: <span class=\"movie\">{$myMovieTitle}</span><br>" );
		print( "Staring: <span class='actor'>{$actorName}</span> <br>" );
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.movie
		{
			color: green;
		}

		.actor
		{
			font-family: Verdana;
			color: blue;
		}
	</style>
</head>
<body>

	<h2>My Favorite Movies</h2>
	<?
		displayCredits( $movieTitle, "Tom Cruise" );
		displayCredits( "Singles", "Campbell Scott" );
	?>

	<script>
		alert( "thanks for using our movie app!" );
	</script>

	<button id="getMyActors">Get My Actors</button>

	<div>(c) BAVC PHP Class 2018</div>

</body>
</html>