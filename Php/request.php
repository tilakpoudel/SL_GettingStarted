<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>$_REQUEST</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    Last Name: <input type="text" name="lastname">
    <input type="submit">
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
      $name = $_REQUEST['fname'];
      $lname = $_POST['lastname'];
      if (empty($name)) {
        echo "Name is empty";
      } else {
        echo $name , $lname;
      }
    }
    ?>
</body>

</html>