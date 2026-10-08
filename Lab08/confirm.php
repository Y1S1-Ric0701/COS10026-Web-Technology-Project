<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>

<body>
    <h1>Rohirrim Ranch Tours</h1>
    <h2>Tour Booking Confirmation page</h2>

    <fieldset>
        <legend>Booking Details</legend>
        <?php
            $firstname = $lastname = $book = $species = $age = $partySize = $meal = "";

            if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['book']) || empty($_POST['species']) || empty($_POST['age']) || empty($_POST['partySize'])) {
                header("Location: error.php");
                exit;
            }

            if (isset($_POST['firstname'])) {
                $firstname = $_POST['firstname'];
            } 

            if (isset($_POST['lastname'])) { 
                $lastname = $_POST['lastname']; 
            }
            if (isset($_POST['book'])) { 
                $book = $_POST['book']; 
            }
            if (isset($_POST['species'])) { 
                $species = $_POST['species']; 
            }
            if (isset($_POST['age'])) { 
                $age = $_POST['age']; 
            }
            if (isset($_POST['partySize'])) { 
                $partySize = $_POST['partySize']; 
            }
            if (isset($_POST['food'])) {
                $food = $_POST['food'];
            }

            echo "<p>Welcome $firstname $lastname</p>";
            echo "<p>Your booking is on the following package(s):</p>";
            echo "<p>" . implode(" and ", $book) . "</p>";
            echo "<p>Species: $species</p>";
            echo "<p>Age: $age</p>";
            echo "<p>Meal preferences: $food</p>";
            echo "<p>Number of travellers: $partySize</p>";
        ?>
    </fieldset>

</body>
</html>
