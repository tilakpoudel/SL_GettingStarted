<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
      echo nl2br(".............. $ var vs $$ var...........\n"); 
        echo nl2br("<h2>PHP $ and $$ Variables \n
        The $ var (single dollar) is a normal variable with the name var that stores any value like string, integer, float, etc.
        
        The $ $ var (double dollar) is a reference variable that stores the value of the $ variable inside it.</h2>");

        $x = "bca";  
        $$x = "a2074";  
        $$$x = "b2021";
        echo "value of $ x = ".  $x."<br/>";  // prints bca
        echo "value of $ $ x = ".$$x."<br/>";  // prints 2074
        echo "value from reference ie $x = ". $bca."<br>"; // prints 2074
        echo "value from triple reference ie = ". $a2074.""; // prints 2074
    ?>
</body>

</html>