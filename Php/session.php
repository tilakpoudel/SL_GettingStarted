<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Set Session</h1>
    <?php
    // Set session variables
    $_SESSION["college_name"] = "nepathya";
    $_SESSION["college_address"] = "janakinagar";
    echo "Session variables are set.";
    print_r($_SESSION);
    ?>
    <?php
    //    session_destroy();
    ?>
</body>

</html>