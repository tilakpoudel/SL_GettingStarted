<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overiding</title>
</head>

<body>
    <h1>overriding</h1>
    <?php 
    // PHP program to implement  
    // function overriding 
      
    // This is parent class 
    class P { 
          
        // Function greet of parent class 
        function greet() { 
            echo " hello from Parent"; 
        } 
    } 
      
    // This is child class 
    class C extends P { 
          
        // Overriding greet method 
        function greet() { 
            echo "\n hello from Child"; 
        } 
    } 
      
    // Reference type of parent 
    $p = new P; 
      
    // Reference type of child 
    $c= new C; 
      
    // print Parent 
    $p->greet(); 
      
    // Print child 
    $c->greet(); 
    ?>
</body>

</html>