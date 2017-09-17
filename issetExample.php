<?

$myName = $myOtherName = "Joe";

if( isset( $myName ) )
{
	print( "FOUND the variable! Its value is: " );
	print( $myName );
	print( $myOtherName );
}
else
{
	print( "I could not find the myName variable." );
}


/*
if( isset( $_GET[ "myName" ] ) )
{
	print( $_GET[ "myName" ] );
}
else
{
	print( "I could not find the myName variable." );
}
*/

?>