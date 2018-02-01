<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?
		$theAverage = 104;

		function getAverage( $t1, $t2, $t3 )
		{
			$theAverage = ( $t1 + $t2 + $t3 ) / 3;
			print( "<br>The average score is: " . $theAverage );

			return $theAverage;
		}

		$theAverage = getAverage( 78, 91, 99 );

		print( "<br>The average is STILL: " . $theAverage );

		$newAnswer = getAverage( 5, 25, 91 );

		print( "<br>The average is STILL: " . $newAnswer );

	?>

</body>
</html>