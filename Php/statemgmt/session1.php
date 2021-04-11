<?php  
session_start();  
?>
<html>

<body>
    <?php  
        $_SESSION["class"] = "BCA 4th sem";  // set session
        $_SESSION["college"] = "NEpathya College";  // set session
        echo "Session information are set successfully.<br/>";  
    ?>
    <a href="session2.php">See Session Values</a>
</body>

</html>