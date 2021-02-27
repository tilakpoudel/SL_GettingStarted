<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select records</title>
</head>

<body>
    <h3>Select data</h3>
    <?php
        include("conn.php"); // include the data base connection file

        $sql = "SELECT id, firstname, lastname FROM Devotees";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["firstname"]." ".$row["lastname"]."</td>
            </tr>";
            }
            echo "
        </table>";
        } else {
        echo "No data found";
        }
        $conn->close();
    ?>
</body>

</html>