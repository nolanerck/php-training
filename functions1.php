<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?
/*
	$test1 = 99;
	$test2 = 89;
	$test3 = 100;

	$theAverage = ( $test1 + $test2 + $test3 ) / 3;
	print( "The average score is:{$theAverage}" );

	$test1 = 65;
	$test2 = 71;
	$test3 = 100;
	
	$theAverage = ( $test1 + $test2 + $test3 ) / 3;
	print( "The average scroe is:{$theAverage}" );

	$test1 = 11;
	$test2 = 66;
	$test3 = 100;
	
	$theAverage = ( $test1 + $test2 + $test3 ) / 3;
	print( "The average scroe is:{$theAverage}" );

	$test1 = 11;
	$test2 = 66;
	$test3 = 100;
	
	$theAverage = ( $test1 + $test2 + $test3 ) / 3;
	print( "The average scroe is:{$theAverage}" );
*/

	function getAverage( $t1, $t2, $t3 )
	{
		$theAverage = ( $t1 + $t2 + $t3 ) / 3;

		print( "The average score is: " . $theAverage . "<br>" );
	}

	getAverage( 99, 89, 100 );

	getAverage( 65, 71, 100 );
	getAverage( 11, 66, 100 );
	getAverage( 51, 16, 100 );

?>


</body>
</html>