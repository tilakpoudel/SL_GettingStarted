<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hello php</h1>
    <?php
        echo nl2br(".............. variables...........\n"); // line break
        $name = "bca 4";
        echo("type of variable is ".gettype($name) ."<br>");
        echo("before unset ".gettype($name)."<br>");

        // unset($name); // destroy variable
        // echo nl2br("after unset ".$name."\n");

        // $4bca = "hello"; // invalid variable name

        print("== vs === "."<br>");

        // Variable contains integer value
        $x = 'test';
        
        // Vatiable contains string value
        $y = true;
        
        // Compare $x and $y
        print("x is :".$x."(".gettype($x).")"."<br>");
        print("y is :".$y."(".gettype($y).")"."<br>");
        if ($x == $y)
        echo 'Same content';
        else
        echo 'Different content';



        // echo nl2br(".............. $ var vs $$ var...........\n"); 
        // echo nl2br("<h2>PHP $ and $$ Variables \n
        // The $ var (single dollar) is a normal variable with the name var that stores any value like string, integer, float, etc.
        
        // The $ $ var (double dollar) is a reference variable that stores the value of the $ variable inside it.</h2>");

        // $x = "bca";  
        // $$x = 2074;  
        // echo "value of $ x = ".  $x."<br/>";  
        // echo "value of $ $ x = ".$$x."<br/>";  
        // echo "value from reference ie $x = ". $bca;

        // echo nl2br(".............. php super global ...........\n");
        // echo $_SERVER['SERVER_NAME']."</br>";
        // var_dump($_SERVER);

    ?>
</body>

</html>