<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB Tables</title>
</head>

<body>
    <h3>Create table</h3>
    <?php
        include('conn.php'); // connect to database
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "bca_db";

        // // Create connection
        // $conn = new mysqli($servername, $username, $password, $dbname);
        // // Check connection
        // if ($conn->connect_error) {
        // die("Connection failed: " . $conn->connect_error);
        // }

        // sql to create table
        $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        $conn->close();
    ?>

</body>

</html>