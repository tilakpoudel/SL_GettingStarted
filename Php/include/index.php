<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #registration_form {
            /* text-align: center; */
            background-color: #99bf5b;
            padding: 50px;
        }
    </style>
</head>

<body>
    <?php include 'header.php';?>
    <h1>Welcome to my home page!</h1>
    <div id="registration_form">
        <h2>Registration Form</h2>
        <span class="error">* required field </span>
        <br><br>
        <form method="post" action="<?php echo($_SERVER["PHP_SELF"]); ?>">
            Name:
            <input type="text" name="name" placeholder="input name">
            <span class="error">* <?php echo $nameErr; ?> </span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
            <br><br>
        </form>
    </div>
    <?php include 'footer.php';?>

</body>

</html>