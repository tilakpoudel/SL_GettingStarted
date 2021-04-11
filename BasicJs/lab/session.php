<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
</head>

<body>
  <h1>Set sessions</h1>
  <?php
// Set session variables
$_SESSION["favcolor"] = "krishna";
$_SESSION["favanimal"] = "cow";
echo "Session variables are set.";
?>
</body>

</html>