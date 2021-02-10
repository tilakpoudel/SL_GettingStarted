<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Resources</h2>
    <?php
        $fp = fopen("null.php", "r"); // create file resource object reference
        var_dump($fp);
        echo get_resource_type($fp) . "\n";
        fclose($fp); // clear the resource object reference
    ?>
</body>

</html>