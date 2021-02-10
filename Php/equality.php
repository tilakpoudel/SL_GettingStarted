<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>== vs ===</h1>
    <?php
        print("== vs === "."<br>");

        // Variable contains integer value
        $x = 10;
        // Variable contains float value
        $y = 10.0;

        // Compare $x and $y
        print("x is :".$x."(".gettype($x).")"."<br>");
        print("y is :".$y."(".gettype($y).")"."<br>");
        if ($x == $y)
            echo 'Same content <br> ';
        else
            echo 'Different content <br>';
        
        echo("..................<br>");

        // Variable contains integer value
        $a = 10;
        // Vatiable contains string value
        $b = '10';
        
        // Compare $a and $b
        print("a is :".$a."(".gettype($a).")"."<br>");
        print("b is :".$b."(".gettype($b).")"."<br>");
        if ($a == $b)
        echo 'Same content <br>';
        else
        echo 'Different content<br>';

        echo("..................<br>");
        
        
        $a = 10;
        
        $b = true;
        
        // Compare $a and $b
        print("a is :".$a."(".gettype($a).")"."<br>");
        print("b is :".$b."(".gettype($b).")"."<br>");
        if ($a == $b)
        echo 'Same content<br>';
        else
        echo 'Different content <br>';

        echo("..................<br>");
        
        
        $a = 0;
        
        $b = false;
        
        // Compare $a and $b
        print("a is :".$a."(".gettype($a).")"."<br>");
        print("b is :".$b."(".gettype($b).")"."<br>");
        if ($a == $b)
        echo 'Same content<br>';
        else
        echo 'Different content <br>';

        echo("..................<br>");
                
        // Variable contains integer value
        $a = 0;
        // Vatiable contains string value
        $b = false;
        
        // Compare $a and $b
        print("a is :".$a."(".gettype($a).")"."<br>");
        print("b is :".$b."(".gettype($b).")"."<br>");
        if ($a == $b)
        echo 'Same content<br>';
        else
        echo 'Different content <br>';

        echo("..................<br>");
                
        // Variable contains integer value
        $a = '';
        // Vatiable contains string value
        $b = false;
        
        // Compare $a and $b
        print("a is :".$a."(".gettype($a).")"."<br>");
        print("b is :".$b."(".gettype($b).")"."<br>");
        if ($a == $b)
        echo 'Same content<br>';
        else
        echo 'Different content <br>';
    ?>
</body>

</html>