<body>
<?php
include 'mathfunctions.php';
    $num = 5;
        if (isPositiveInteger($num)) {
            echo "<p>", $num, "! is ", factorial ($num), ".</p>";
        }
        else {
            echo "<p>Please enter a positive integer.</p>";
        }
    echo "<p><a href='../Task 2/factorial.html>Return to the Entry Page</a></p>"
?>
<body>