<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php static</title>
</head>

<body>
    <h4>Stati membersc</h4>
    <h4>
        <li>Static properties can be called directly - without creating an instance of a class.</li>
        <li> A class can have both static and non-static properties. A static property can be accessed from a method in
            the
            same
            class using the self keyword and double colon (::): </li>
        <li>To access a static property use the class name, double colon (::), and the property name:</li>
    </h4>

    <?php 
    /* Use static function as a counter */
      
    class solution { 
          
        static $count; 
          
        public static function getCount() { 
            return ++self::$count; // use self to access static member inside class.
        } 
    } 
      
    solution::$count = 1; 
      
    for($i = 0; $i < 5; ++$i) { 
        echo "before ".solution::$count; 
        echo 'The next value is: '.  
        solution::getCount() ; 
        echo "after ".solution::$count;
        echo"<br>";
    } 
      
    ?>
    <h3>Static method</h3>
    <h4>Static methods can be called directly - without creating an instance of the class first.</h4>
    <?php 
    /* Use of static method in PHP */
      
    class A { 
          
        public function test($var = "Hello World") { 
            $this->var = $var; 
            return $this->var; 
        } 
    } 
      
    class B { 
        public static function test($var) { 
            $var = "This is static"; 
            return $var; 
        } 
    } 
      
    // Creating Object of class A 
    $obj = new A(); 
      
    echo $obj->test('$obj->test This is non-static');  
    echo "\n"; 
    echo B::test('B::test This is fafstatic');  
      
    ?>
</body>

</html>