<?php  
session_start();  
?>
<html>

<body>
    <?php  
        echo "Welcome to  : ".$_SESSION["class"]." from ".$_SESSION["college"]; 
    ?>
    <br>
    <a href="session3.php">Destroy Session</a>
    <br>
    <a href="session1.php">Set Session</a>
</body>

</html>