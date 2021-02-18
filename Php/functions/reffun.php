<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Passing Arguments by Reference</h2>
    <?php
        function addFive($num) {
            $num += 5;
        }
        function addSix(&$num) {
            $num += 6;
        }
        $orignum = 10;
        addFive( $orignum );
        echo "Original Value is $orignum<br />"; // 10
        addSix( $orignum );
        echo "Original Value is $orignum<br />"; // 16
    ?>
</body>

</html>