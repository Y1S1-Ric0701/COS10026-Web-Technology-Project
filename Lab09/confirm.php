<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rohirrim Booking</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Rohirrim Booking Form" />
	<meta name="keywords"    content=" " />
	<title>Rohirrim Confirmation page</title>
</head>

<body>
	<h1>Rohirrim Ranch Tours</h1>
	<h2>Tour Booking Confirmation page</h2>

	
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Rohirrim_Tour";

	//Create Connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Check Connection
	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$food = $_POST['food'];

	$sql = "INSERT INTO R_Book (firstname, lastname, age, food)
			VALUES ('$firstname', '$lastname', '$age', '$food')";

	mysqli_query($conn, $sql);
	mysqli_close($conn);
?>

<form id="Confirmform">
	<fieldset>
		<legend>Booking Details</legend>
		 <p>Welcome <?php echo $firstname; echo ' '; echo $lastname; ?></p>
		 <p>Your booking is on the following package(s):</p>
		 <p>Age: <?php echo $_POST['age']; ?></p>
		 <p>Meal preferences: <?php echo $_POST['food']; ?></p>
		 <p>Number of travellers: <?php echo $_POST['partySize']; ?></p>
	</fieldset>
</form>
	
</body>
</html>