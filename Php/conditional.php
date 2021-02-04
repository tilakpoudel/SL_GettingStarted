<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional</title>
</head>

<body>
    <h1>Conditional Statements</h1>
    <h2>IF .. ELSE</h2>
    <?php
        $d = date("D");
        echo ("Today is ".$d ."<br>");
        if ($d == "Fri")
        echo "Have a nice weekend!";
        
        elseif ($d == "Sun")
        echo "Have a nice Sunday!";
        
        else
        echo "Have a nice day!";
    ?>
    <h2>Switch Stament</h2>
    <?php
        switch ($d){
            case "Mon":
               echo "Today is Monday";
               break;
            
            case "Tue":
               echo "Today is Tuesday";
               break;
            
            case "Wed":
               echo "Today is Wednesday";
               break;
            
            case "Thu":
               echo "Today is Thursday";
               break;
            
            case "Fri":
               echo "Today is Friday";
               break;
            
            case "Sat":
               echo "Today is Saturday";
               break;
            
            case "Sun":
               echo "Today is Sunday";
               break;
            
            default:
               echo "Wonder which day is this ?";
         }
    ?>
</body>

</html>