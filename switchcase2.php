<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?
		$musician = "pete";

		$formattedMusician = strtolower( $musician );

		switch( $formattedMusician )
		{
			case "john":	print( "John plays acoustic guitar." );
							break;

			case "paul":	print( "Paul plays bass guitar." );
							break;

			case "eric":	
			case "george":	print( ucfirst( $formattedMusician ) . " plays electric guitar." );
							break;

			case "pete":
			case "ringo":	
							if( $formattedMusician == "pete" )
							{
								print( "Fun fact: Pete was better looking than Paul and John.<br>" );
							}

							print( ucfirst( $formattedMusician ) . " plays drums." );
							break;

			default: 	print( "That is not a Beatle." );
						break;	
		}
	?>

</body>
</html>