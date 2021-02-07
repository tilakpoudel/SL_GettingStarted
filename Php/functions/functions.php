<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>functions</title>
</head>

<body>
    <h2>Functions</h2>
    <p>A function is a piece of code which takes one more input in the form of parameter and does some processing and
        returns a value.</p>
    <?php
        /* Defining a PHP Function */
        function writeMessage() {
        echo "Hello welocome to scripting language class..";
        }
        
        /* Calling a PHP Function */
        writeMessage();
    ?>
    <h2>Function with parameter</h2>
    <?php
        function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum";
        }
        
        addFunction(10, 20);
    ?>

    <h2>Default Argument Value</h2>
    <p>You can set a parameter to have a default value if the function's caller doesn't pass it.</p>

    <?php
        function setHeight($minheight = 50) { // default value
            echo "The height is : $minheight <br>";
        }
        
        setHeight(100);
        setHeight(); // will use the default value of 50
        setHeight(500);
        setHeight(80);
    ?>

    <h2>Dynamic Function Calls </h2>
    <p>
        It is possible to assign function names as strings to variables and then treat these variables exactly as you
        would the
        function name itself.
    </p>
    <?php
        function sayHello() {
        echo "Hello<br />";
        }
        
        $function_holder = "sayHello";
        $function_holder();
    ?>

    <h2>Passing Argument by Reference </h2>
    <p>It is possible to pass arguments to functions by reference. This means that a reference to the variable is
        manipulated
        by the function rather than a copy of the variable's value.

        Any changes made to an argument in these cases will change the value of the original variable. You can pass an
        argument
        by reference by adding an ampersand to the variable name in either the function call or the function definition.
    </p>
    <?php
        function addFive($num) {
            $num += 5;
        }
        
        function addSix(&$num) {
            $num += 6;
        }
        
        $orignum = 10;
        addSix( $orignum );
        addFive( $orignum );
        
        echo "Original Value is $orignum<br />";
        
        echo "Original Value is $orignum<br />";
    ?>


</body>

</html>