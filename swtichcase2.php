<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?
	$musician = "ringo";

	$formattedMusician = strtolower( $musician );

	switch( $formattedMusician )
	{
		case "eric": 
		case "george": print( "{$musician} plays electric guitar." );
					   break;

		case "john": print( "{$musician} plays acoustic guitar" );
					 break;

		case "paul": print( "{$musician} plays bass." );
					 break;

	    case "pete":
		case "ringo": 
				      if( $formattedMusician == "pete" )
				      {
				      	print( "Fun fact: Pete was better looking than Paul and John." );
				      }

					  print( "{$musician} plays drums." );
					  break;

		default: print( "{$musician} is not a Beatle." );
				 break;
	}


?>

</body>
</html>