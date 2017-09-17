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

	print( "The average score is: " . $theAverage );
}

getAverage( 78, 91, 99 );

print( "<br>The average is STILL: " . $theAverage );

print( "T1 is $t1" );

?>


</body>
</html>