<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?
/*		$test1 = 99;
		$test2 = 89;
		$test3 = 100;

		$theAverage = ( $test1 + $test2 + $test3 ) / 3;
		print( "The average score is: {$theAverage}<br>" );

		$test1 = 65;
		$test2 = 71;
		$test3 = 100;

		$theAverage = ( $test1 + $test2 + $test3 ) / 3;
		print( "The average score is: {$theAverage}<br>" );		

		$test1 = 11;
		$test2 = 66;
		$test3 = 100;

		$theAverage = ( $test1 + $test2 + $test3 ) / 3;
		print( "The average score is: {$theAverage}<br>" );		
*/

		function getAverage( $t1, $t2, $t3 )
		{
			$theAverage = ( $t1 + $t2 + $t3 ) / 3;
			$theAverage = number_format( $theAverage, 2 );
			print( "The average score is: {$theAverage} <br> " );
		}

		getAverage( 99, 89, 100 );
		getAverage( 65, 71, 100 );
		getAverage( 11, 66, 100 );

	?>

</body>
</html>