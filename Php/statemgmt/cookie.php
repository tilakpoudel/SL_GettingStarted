<?php  
    setcookie("batch", "BCA 2074",time()+1*60*60);  //expire after 1 hrs 
    setcookie("name", "BalaRam");  //expire after 1 hrs
    // setcookie("name","",time()-3600) // delete cookie by setting time earlier than current time
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
            echo "<br/>Cookie Value: Batch  " . $_COOKIE["batch"];  
            echo "<br />Name: " . $_COOKIE["name"];
        }  
    ?>
    <br>
    <a href="https://github.com/tilakpoudel/SL_GettingStarted">Get Codes</a>
</body>

</html>