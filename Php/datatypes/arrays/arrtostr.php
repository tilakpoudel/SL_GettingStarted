<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Array to string by implode()</h2>
    <?php
        $arr = array('Hello','World!','Beautiful','Day!');
        echo implode(" ",$arr)."<br>";
        echo implode("+",$arr)."<br>";
        echo implode("-",$arr)."<br>"; 
        echo implode("X",$arr);
    ?>
    <h2>String to array by explode()</h2>
    <?php
        $str = "Hello world. It's a beautiful day.";
        print_r($str);
        echo("<br>");
        print_r (explode(" ",$str));
    ?>
</body>

</html>