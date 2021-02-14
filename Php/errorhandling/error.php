<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Php Error</h1>
    <ul>
        <li> <b>Syntax Error or Parse Error </b><br>
            A syntax error is a mistake in the syntax of source code, which can be done by programmers due to their lack
            of concern
            or knowledge. It is also known as Parse error.
            <?php  
            /*------------------syntax error-------------------*/  
            $college = "nepathya";  
            $faculty = "bca";  
            echo $college;  
            echo $faculty;  
        ?>
        </li>
        <li> <b>Fatal Error </b><br>
            A fatal error is another type of error, which is occurred due to the use of undefined function. The PHP
            compiler
            understands the PHP code but also recognizes the undefined function. This means that when a function is
            called without
            providing its definition, the PHP compiler generates a fatal error.

            <?php  
                /*------------------fatal error-------------------*/  
                function add($f1, $f2) {  
                    $sum = $f1 + $f2;  
                    echo "Addition:" . $sum;  
                }  
                  
                $f1 = 23;  
                $f2 = 56;  
                  
                //call the function that is not defined  
                //Generate fatal error  
                catch_fatal_error();  
                //echo "Fatal Error";     
            ?>
        </li>
        <li>
            <b>Warning Error </b><br>
            A warning is generated when the programmer tries to include a missing file. The PHP function calls that
            missing file
            which does not exist. The warning error does not stop/prevent the execution of the program.

            <?php  
                /*-------------------warning error------------------*/  
                $company = 'bootwal';  
                echo "Warning Error: ";  
                  
                //include a file in the code  
                // include ('jtp.php');      
            ?>
        </li>
        <li>Notice Error <br>
            Notice error is same as warning error. When program contains something wrong, the notice error occurs. But
            it
            allows/continue the execution of the program with a notice error. Notice error does not prevent the
            execution of the
            code. For example - access to undefined variable.
            <?php  
                /*------------------notice error-------------------*/  
                $college = "nepathya";  
                echo $college;  
                echo $address;  
            ?>
        </li>
    </ul>
</body>

</html>