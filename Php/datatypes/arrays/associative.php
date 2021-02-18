<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Associative Array</h3>
    <?php
        $age = array("Ram"=>"35","sita"=>"35", "Hari"=>"37", "Shyam"=>"43","Ram1"=>"45","sandip"=>"25","sandeep"=>"35",);
        echo "Ram is " . $age['Ram'] . " years old. <br>";

        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    ?>
</body>

</html>