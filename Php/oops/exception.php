<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>exception</title>
</head>

<body>
  <?php
    //create function with an exception
    function checkNum($number) {
      if($number>1) {
        throw new Exception("Value must be 1 or below");
      }
      
      return true;
    }
    function divide($a,$b) {
      if($b === 0){
        throw new Exception("Cannot divide by 0");
      }
      $d = $a/$b;

    return $d;
    }
    
    //trigger exception in a "try" block
    try {
      // checkNum(3);
      //If the exception is thrown, this text will not be shown
      echo 'If you see this, the number is 1 or below <br>';
      $res = divide(10,0);
      echo $res;
    }
    //catch exception
    catch(Exception $e) {
      echo 'Message: ' .$e->getMessage()."<br>";
    }

    finally{
      echo"finally i am here";
    }

   ?>
</body>

</html>