<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Break</title>
</head>

<body>
    <h2>Break Statement</h2>
    <p>The PHP break keyword is used to terminate the execution of a loop prematurely.</p>
    <?php
        $i = 0;
        
        while( $i < 10) {
            $i++;
            if( $i == 3 )break;
        }
        echo ("Loop stopped at i = $i" );
    ?>
    <h2>Continue</h2>
    <p>The PHP continue keyword is used to halt the current iteration of a loop but it does not terminate the loop.</p>
    <?php
        $array = array( 1, 2, 3, 4, 5);
        
        foreach( $array as $value ) {
        if( $value == 3 )continue;
        echo "Value is $value <br />";
        }
    ?>
</body>

</html>