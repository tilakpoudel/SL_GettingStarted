<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Trait</title>
</head>

<body>
  <h2>PHP - What are Traits? </h2>
  <h4>
    PHP only supports single inheritance: a child class can inherit only from one single parent.

    So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

    Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract
    methods
    that can be used in multiple classes, and the methods can have any access modifier (public, private, or
    protected).</h4>
  <?php
        trait message1 {
          public function msg1() {
            echo "OOP is fun! "; 
          }
        }
        
        trait message2 {
          public function msg2() {
            echo "OOP reduces code duplication!"; 
          }
        }
        
        class Welcome {
          use message1;
        }
        
        class Welcome2 {
          use message1, message2;
        }
        
        $obj = new Welcome();
        $obj->msg1();
        echo "<br>";
        
        
        $obj2 = new Welcome2();
        $obj2->msg1();
        $obj2->msg2();
        ?>
</body>

</html>