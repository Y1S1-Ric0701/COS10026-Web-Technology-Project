<?php
    //set the servername, username and password
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Create connection
    $conn = new mysqli($servername, $username, $password);

    //Create database
    //mysql query
    $sql = "CREATE DATABASE IF NOT EXISTS Rohirrim_Tour";
    if ($conn->query($sql) === TRUE) {
        if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
            echo "Database created successfully";
        }
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
?>