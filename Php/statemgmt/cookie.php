<?php  
setcookie("batch", "BCA 2074");  
?>
<html>

<body>
    <h1>Php Cookies</h1>
    <h4>Note: PHP Cookie must be used before <html> tag.</h4>
    <h5>Note: Refresh page to set cookie..<html> tag.</h5>
    <?php  
        if(!isset($_COOKIE["batch"])) {  
            echo "Sorry, cookie is not found!";  
        } else {  
            echo "<br/>Cookie Value: " . $_COOKIE["batch"];  
        }  
    ?>
</body>

</html>