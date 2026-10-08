<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking Page</title>
    <meta charset="utf-8"/>
    <meta name="description" content="Rohirrim Booking Form" />
    <meta name="keywords" content=" " />
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

            //Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            $sql = "SELECT * FROM R_Book";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0 ) {
                //output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["firstname"] . " " . $row["lastname"] . "</td>";
                    echo "<td>" . $row["food"] . "</td>";
                    echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>