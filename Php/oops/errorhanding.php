<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error handling</title>
</head>

<body>
    <?php
    //error handler function
    function customError($errno, $errstr) {
      echo "<b>Error:</b> [$errno] $errstr<br>";
      echo "Ending Script";
      die();
    }
    
    //set error handler
    set_error_handler("customError");
    
    //trigger error
    $test=2;
    if ($test>=1) {
      trigger_error("Value must be 1 or below");
    }
    ?>
</body>

</html>