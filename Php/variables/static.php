<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php  
        function static_var()  
        {  
            static $num1 = 3;       //static variable  
            $num2 = 6;          //Non-static variable  
            //increment in non-static variable  
            $num1++;  
            //increment in static variable  
            $num2++;  
            echo "Static: " .$num1 ."</br>";  
            echo "Non-static: " .$num2 ."</br>";  
        }  
          
    //first function call  
        static_var();   // prints 4,7
      
    //second function call  
        static_var();  // prints 5,7

        //second function call
        static_var(); // prints 5,7
        //second function call
        static_var(); // prints 5,7
        //second function call
        static_var(); // prints 5,7
    ?>
</body>

</html>