<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
</head>
<body>

<h2>Sign Up Form</h2>

<form name="frmSignup" method="post" action="processForm2.php">

	<div>
		First Name:
		<input type="text" name="firstName" />
	</div>
	<div>
		Last Name:
		<input type="text" name="lastName" />
	</div>
	<div>
		Age:
		<input type="number" name="age" />
	</div>

	<input type="submit" name="btnSubmit" value="Save My Form" />

	<input type="submit" name="btnDelete" value="Delete My Entry" />

</form>

</body>
</html>