<?php
    //set the servername, username and password
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Rohirrim_Tour";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS R_Book (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,  
        lastname VARCHAR(30) NOT NULL,
        age INT(2),
        food TEXT,
        size INT(2)
    )";

    if ($conn->query($sql) === TRUE) {
        if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
            echo "Table R_Book created successfully";
        }
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // Close connection
    $conn->close();
?>