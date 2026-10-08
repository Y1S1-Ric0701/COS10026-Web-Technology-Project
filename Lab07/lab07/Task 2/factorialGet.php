<?php
include '../Task 1/mathfunctions.php';
    if (isset($_GET["number"])) {
        $num = $_GET["number"];
        if (isPositiveInteger($num)) {
            echo "<h1>Factorial</h1>";
            echo "<p>", $num, "! is ", factorial ($num), ".</p>";
        }
        else {
            echo "<p>Please enter a positive integer.</p>";
        }
    }
    echo "<p><a href='factorial.html'>Return to the Entry Page</a></p>"
?>