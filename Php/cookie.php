<?php
session_start();
?>
<!DOCTYPE html>
<?php
$cookie_name = "my_college";
$cookie_value = "Nepathya College";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>

<body>
    <h1>Access session </h1>
    <?php
        // Echo session variables that were set on previous page
        echo "College :" . $_SESSION["college_name"] . ".<br>";
        echo "Address :" . $_SESSION["college_address"] . ".<br>";
    ?>
    <h1>Cookie</h1>
    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>

    <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>

</html>