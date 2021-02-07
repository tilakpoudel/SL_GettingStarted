<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>php array functions</h1>
    <h2>The array_chunk() function splits an array into chunks of new arrays.</h2>
    <?php
        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
        print_r(array_chunk($age,2,true));
        // outputs
        // Array ( [0] => Array ( [Peter] => 35 [Ben] => 37 ) [1] => Array ( [Joe] => 43 [Harry] => 50 ) )
    echo("<br>");
        echo("Size of array ".count($age)."<br>");
        echo("Size of array ".sizeof($age)."<br>");
    ?>
    <h2>
        The array_diff() function compares the values of two (or more) arrays, and returns the differences.
    </h2>
    <?php
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"green","g"=>"blue");
    
    $result=array_diff($a1,$a2);
    print_r($result);
    // Array ( [d] => yellow )
    ?>
    <h2>The array_intersect() function compares the values of two (or more) arrays, and returns the matches.</h2>
    <?php
        $result=array_intersect($a1,$a2);
         print_r($result);
    // Array ( [a] => red [b] => green [c] => blue )
    ?>

    <h2>The array_merge() function merges one or more arrays into one array.</h2>
    <?php
        $a1=array("red","green");
        $a2=array("blue","yellow");
        print_r($a1);
        print_r($a1);
        echo"<br>";
        echo"Array merged: ";
        print_r(array_merge($a1,$a2));
    ?>

    <h2>The array_search() function search an array for a value and returns the key.</h2>
    <?php
        $a=array("a"=>"red","b"=>"green","c"=>"blue");
        echo array_search("red",$a);
    ?>
    <h2>The array_slice() function returns selected parts of an array.</h2>
    <?php
        $a=array("red","green","blue","yellow","brown");
        print_r(array_slice($a,2));
    ?>
    <h2>The PHP sort( ) function is used to sort the array elements in ascending order.</h2>
    <?php
        $guitars = array("classical", "acoustic", "electric");  
        sort($guitars);  
        print_r($guitars);
    echo "<h2>The PHP rsort( ) function is used to sort the array elements in descending order</h2>";
        rsort($guitars);
        print_r($guitars);
    ?>

    <h2>The arsort() function sorts an associative array in descending order, according to the value.</h2>

    <?php
            $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
            arsort($age);
            echo"Descending order <br>";
            foreach($age as $x=>$x_value)
            {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
            }
            echo "<h2>The asort() function sorts an associative array in Ascending order, according to the value.</h2>";
            asort($age);
            echo"Ascending order <br>";
            foreach($age as $x=>$x_value)
            {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
            }

            echo "<h2>Use the krsort() function to sort an associative array in descending order, according to the key.</h2>";
            ksort($age);
            echo"Sort by key Ascending order <br>";
            foreach($age as $x=>$x_value)
            {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
            }

    ?>


</body>

</html>