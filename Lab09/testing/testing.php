<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking Page</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Rohirrim Booking Form" />
	<meta name="keywords"    content=" " />
	<title>Rohirrim Confirmation page</title>
</head>
	
<body>
	<h1>Rohirrim Booking Page</h1>

<table border="1">
	<tr>
		<th>No</th>
		<th width = "150px">Name</th>
		<th width = "80px">Food</th>
	</tr>


<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Rohirrim_Tour";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM R_Book";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) { // checking row results
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {	 	
?>

<tr>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["firstname"]. "" . $row["lastname"]; ?></td>
	<td><?php echo $row["food"]; ?></td>
</tr>
	
<?php
		}
	} else {
		echo "0 results";
	}
	mysqli_close($conn);
?>
</table>
</body>
</html>