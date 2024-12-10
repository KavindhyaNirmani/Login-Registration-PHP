<?php
    // DB connection parameters
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "123456";
    $database = "kavee";

    // Connect
    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if(!$conn){
        die("Connection Failed : ".mysqli_connect_error());
    }else {
        echo "Database Connection Successful!";
    }
?>
