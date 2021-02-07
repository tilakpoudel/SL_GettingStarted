<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Php Strings</h1>
    <?php   
        $name = "nepathya";
        echo ("Length of $name = ".strlen($name));
    ?>
    <h2>The strpos() function is used to search for a string or character within a string.

        If a match is found in the string, this function will return the position of the first match. If no match is
        found, it
        will return FALSE.
    </h2>
    <?php
        echo ("strpos of: Hello world! , world <br>");
       echo strpos("Hello world!","world");
       echo ("<br>........<br>");
       echo strtolower($name);
       echo("<br> To upper case <br>");
       echo strtoupper($name);
       echo("<br> Reverse of $name is :".strrev($name));
    //    strrev()
    ?>
    <br>
    <?php   
        $company = "BootwalR&D";  
        //both single and double quote statements will treat different  
        echo "Hello $company";  
        echo "</br>";  
        echo 'Hello $company';
        echo "</br>";
        echo 'Hello'. $company;
    ?>

</body>

</html>