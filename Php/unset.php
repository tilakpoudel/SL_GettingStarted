<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unset</title>
</head>

<body>
    <?php 
        $my_var='Hello User';
        echo " before unset : ".$my_var;
        echo"\n";
        unset($my_var);
        echo "after unset : " .$my_var;
    ?>
</body>

</html>