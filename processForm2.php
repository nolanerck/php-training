<?

	print( "Hello, " . $_POST[ 'firstName' ] . " " . $_POST[ 'lastName' ] );
	print( "<br>" );
	print( "Your age is " . $_POST[ 'age' ] );

	if( isset( $_POST[ "btnSubmit" ] ) )
	{
		print( "User was saved successfully." );
	}
	else if( isset( $_POST[ "btnDelete" ] ) )
	{
		print( "user was DELETED from the system." );
	}

?>