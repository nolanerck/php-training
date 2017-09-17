<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?

	$myBeatles = array(
						"bass" => "Paul McCartney",
						"electricguitar" => "George Harrison",
						"drums" => "Ringo Starr",
						"acousticguitar" => "John Lennon",
						"lectricguitar" => "Eric Clapton"
					  );


	print( $myBeatles[ "electricguitar" ] );
	print( $myBeatles[ "Electricguitar" ] );

?>

</body>
</html>