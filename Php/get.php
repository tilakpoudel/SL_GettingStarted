<?php
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
    <h1>Access session </h1>
    <?php
            // Echo session variables that were set on previous page
            echo "College  " . $_SESSION["college_name"] . ".<br>";
            echo "Address" . $_SESSION["college_address"] . ".";
        ?>
    <h1>$_GET</h1>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        Last Name: <input type="text" name="lastname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
          // collect value of input field
          $name = $_GET['fname'];
          $lname = $_GET['lastname'];
          if (empty($name)) {
            echo "Name is empty";
          } else {
            echo $name , $lname;
          }
        }
        ?>
</body>

</html>