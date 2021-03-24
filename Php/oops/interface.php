<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>interface</h1>
    <?php  
        interface i1  
        {  
            public function fun1();  
        }  
        interface i2  
        {  
            public function fun2();  
        }  
        interface product{
            function setName();
            function setPrice();
        }
    class cls1 implements i1,i2,product 
    {  
        function fun1()  
        {  
            echo "hello  <br>";  
        }  
        function fun2()  
        {  
            echo "how are you ? <br>";  
        }  
        function setName()
        {
        echo "my product name is set <br>";
        }
        function setPrice()
        {
        echo "my product price is 200 <br>";
        }

    }  
    $obj= new cls1();  
    $obj->fun1();  
    $obj->fun2();  
    $obj->setName();
    $obj->setPrice();
      
    ?>
</body>

</html>