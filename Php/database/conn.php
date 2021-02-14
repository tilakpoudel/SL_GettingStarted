<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bca_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    // print_r($conn);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo"Connected successfully <br>";
    }
?>