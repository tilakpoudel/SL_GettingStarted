<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create DB </title>
</head>

<body>
    <h2>Create database with php </h2>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // print_r($conn);
        // Check connection
        if ($conn->connect_error) {
            die(" Connection failed: " . $conn->connect_error);
        }else{
            echo"  Connected successfully <br>";
        }
        
        // Create database
        $sql = "CREATE DATABASE bca_db";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully <br>";
        } else {
            echo "Error creating database: " . $conn->error;
        }
        
        $conn->close();
    ?>
</body>

</html>