<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract class</title>
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
    abstract class Animal  
    {  
        public $name;  
        public $age;  
        public function Describe()  
        {  
            return $this->name . ", " . $this->age . " years old";      
        }  
        abstract public function Greet();  
    }  
    class Dog extends Animal  
    {  
        public function Greet()  
            {  
                return "Woof!";      
            }  
          
            public function Describe()  
            {  
                return parent::Describe() . ", and I'm a dog!";      
            }  
    }  
    $animal = new Dog();  
    $animal->name = "Bob";  
    $animal->age = 7;  
    echo $animal->Describe();  
    echo $animal->Greet();  
    ?>
</body>

</html>