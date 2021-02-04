<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>$GLOBAL Variable</h1>
    <?php
        // $x = 75;
        // $y = 25;
        
        // function addition() {
        //     // $x =1;
        //     // $y =1;
        //     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        //     // $r= $x+$y;
        //     // echo($r."<br>");
        // }
        
        // addition();
        // echo $z;
    ?>
    <h1>$_SERVER Variable</h1>
    <?php
        print_r($_SERVER);
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
    ?>
</body>

</html>