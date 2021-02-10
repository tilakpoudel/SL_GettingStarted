<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indexed Array</title>
</head>

<body>
    <h2>Indexed Array</h2>
    <?php   
        $bikes = array ("Royal Enfield", "Yamaha", "KTM");  
        var_dump($bikes);   //the var_dump() function returns the datatype and values  
        echo "</br>";  
        echo "Array Element1: $bikes[0] </br>";  
        echo "Array Element2: $bikes[1] </br>";  
        echo "Array Element3: $bikes[2] </br>";  

        echo "<br>";
        Echo "looping in array <br>";

        $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);
        
        for($x = 0; $x < $arrlength; $x++) {
             echo $cars[$x]; echo "<br>" ; 
        }
    ?>
</body>

</html>