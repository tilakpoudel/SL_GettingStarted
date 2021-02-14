<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>
</head>

<body>
    <h3>Insert Data into table</h3>
    <?php
        include("conn.php");
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";

        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            echo "New record created successfully. Last inserted ID is: " . $last_id."<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // insert multiple records
        // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        // VALUES ('John', 'Doe', 'john@example.com');";
        // $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
        // VALUES ('Mary', 'Moe', 'mary@example.com');";
        // $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
        // VALUES ('Julie', 'Dooley', 'julie@example.com')";
        
        // if ($conn->multi_query($sql) === TRUE) {
        // echo "New records created successfully <br>";
        // } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        // prepare and bind
        // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
        // $stmt->bind_param("sss", $firstname, $lastname, $email);
        
        // // set parameters and execute
        // $firstname = "tilak";
        // $lastname = "poudel";
        // $email = "tilak@example.com";
        // $stmt->execute();
        
        // $firstname = "Mary1235";
        // $lastname = "Moe1235";
        // $email = "mary1235@example.com";
        // $stmt->execute();
        
        // $firstname = "Julie";
        // $lastname = "Dooley";
        // $email = "julie@example.com";
        // $stmt->execute();
        
        // echo "New records created successfully";
        
        // $stmt->close();

        $conn->close();
    ?>
</body>

</html>