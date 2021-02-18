<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select records</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div>
        <h3>User List</h3>
        <?php
        include("conn.php");

        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        echo "<table bo>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Registered</th>
                <th>Operation</th>
            </tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["fullname"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["user_password"]."</td>
                <td>".$row["reg_date"]."</td>
                <td>
                    <a href='delete.php?id={$row["id"]}'>Delete</a>
                    <a href='edit.php?id={$row["id"]}'>Edit</a>
                </td>
            </tr>";
            }
            echo "
        </table>";
        } else {
        echo "0 results";
        }
        $conn->close();
    ?>
    </div>
</body>

</html>