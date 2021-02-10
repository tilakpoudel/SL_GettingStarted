<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop</title>
</head>

<body>
    <h2>For loop</h2>
    <?php
        $a = 0;
        $b = 0;
        
        for( $i = 0; $i<5; $i++ ) {
        $a += 10;
        $b += 5;
        }
        
        echo ("At the end of the loop a = $a and b = $b" );
    ?>
    <h2>While loop</h2>
    <?php
        $i = 0;
        $num = 50;
        
        while( $i < 10) {
        $num--;
        $i++;
        }
        
        echo ("Loop stopped at i = $i and num = $num" );
    ?>
    <h4>Do while</h4>
    <?php
        $i = 0;
        $num = 0;
        
        do {
            $i++;
        }
        
        while( $i < 0 );
        echo ("Loop stopped at i = $i" );
    ?>
    <h2>For each</h2>
    <?php
        $array = array( 1, 2, 3, 4, 5);
        
        foreach( $array as $key=>$value ) {
            echo "Value  at $key is $value <br />";
        }
    ?>
</body>

</html>