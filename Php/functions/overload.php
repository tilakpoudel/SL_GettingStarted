<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Function overloading</h2>
    <?php
        function area($r)
        {
            $PI =3.142; 
            return $PI * pow($r, 2);
        }

        // // overload area to calcualte area of rectangle
        //  function area($l,$b)
        // {
        //    return $l*$b;
        // }

        // echo "area of square ".area(3)."<br>";
        // echo "area of rectangle ".area(3,4)."<br>";
    ?>
    <h2>function overloading php 5</h2>
    <?php
       class Shape {
          const PI = 3.142 ;
          function __call($name,$arg){
             if($name == 'area')
                switch(count($arg)){
                   case 0 : return 0 ;
                   case 1 : return self::PI * $arg[0] ;
                   case 2 : return $arg[0] * $arg[1];
                }
          }
       }
       $circle = new Shape();
       echo"area of circle ".  $circle->area(3) ."<br>";
       $rect = new Shape();
       echo "area of rectangle ". $rect->area(8,6)."<br>";
    ?>
</body>

</html>