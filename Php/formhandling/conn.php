<?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "bca_db";

    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword,$dbname);
    // print_r($conn);
    // Check connection
    if ($conn->connect_error) {
        die("Db Connection failed: " . $conn->connect_error);
    }else{
        echo" DB Connected successfully <br>";
    }
?>