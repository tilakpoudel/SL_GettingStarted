<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Type casting php</title>
</head>

<body>
  <?php 
    $count = 5;
    var_dump($count); // string
    // $count is a string; Output: "5"
    // $count = (string) $count;
    // var_dump($count); // string
    // echo $count ."<br>";
    
    // $count is a float; Output: 5
    // $count = (float) $count;
    // var_dump($count); // float
    // echo $count ."<br>";
    
    // $count is a bool; Output: true
    // $count = (boolean) $count;
    // var_dump($count); // boolean
    // echo $count ."<br>";
    
    // /* $count is an array
    // Output;
    // array(1) {
    //   [0]=>true
    // }
    // */
    $count = (array) $count;
    var_dump($count); // array
    // print $count ;
    
    // /* $count is an object
    // Output;
    // (stdClass)#1 (1) {
    //   [0]=>true
    // }
    // */
    $count = (object) $count;
    var_dump($count); // object
    // print $count ."<br>";
    ?>
</body>

</html>