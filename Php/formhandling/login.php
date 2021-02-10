<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h2, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Get data from form</h3>
    <?php
    print_r($_POST)  ;
    $name=$_POST["name"];//receiving name field value in $name variable  
    $password=$_POST["password"];//receiving password field value in $password variable  
      
    echo "Welcome: $name, your password is: $password";  
    ?>
</body>

</html>