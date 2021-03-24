<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Abstract Class</h1>
    <h2>An abstract class is a mix between an interface and a class. It can be define functionality as well as
        interface.

        <li> Classes extending an abstract class must implement all of the abstract methods defined in the abstract
            class.</li>
        <li> An abstract class is declared the same way as classes with the addition of the 'abstract' keyword.</li>
    </h2>
    <?php  
    abstract class a  
    {  
        abstract public function name();  
        abstract public function faculty();  
        public function college(){
            echo "nepathya colege";
        }
        public function sum($a,$b){
            $sum = 10+20;

            echo $sum;
            // echo "nepathya colege";
        }
    }  
    class b extends a  
    {  
        public function name()  
        {  
            echo "Nepathya <br>";  
        }  
        public function faculty()  
        {  
            echo "BCA <br>";     
        }  
        public function college(){
            echo "sky colege <br>";
        }

        public function sum($a,$b){
        $sum = $a+$b;
        
        echo $sum;
        // echo "nepathya colege";
        }
    }  
    $obj = new b();  
    $obj->name();  
    $obj->faculty();  
    $obj->college();
    $obj->sum();
    ?>
</body>

</html>