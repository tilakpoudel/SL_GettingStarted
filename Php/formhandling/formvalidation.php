<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php form validation</title>
    <style>
        .error {
            color: #FF0001;
        }

        #registration_form {
            /* text-align: center; */
            background-color: #99bf5b;
            padding: 50px;
        }
    </style>
</head>

<body>
    <?php  
    // define variables to empty values  
    $nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
    $name = $email = $mobileno = $gender = $website = $agree = "";  
      
    //Input fields validation  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
          
    //String Validation  
        if (empty($_POST["name"])) {  
             $nameErr = "Name is required";  
        } else {  
            $name = input_data($_POST["name"]);  
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                    $nameErr = "Only alphabets and white space are allowed";  
                }  
        }  
          
        //Email Validation   
        if (empty($_POST["email"])) {  
                $emailErr = "Email is required";  
        } else {  
                $email = input_data($_POST["email"]);  
                // check that the e-mail address is well-formed  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                    $emailErr = "Invalid email format";  
                }  
         }  
        
        //Number Validation  
        if (empty($_POST["mobileno"])) {  
                $mobilenoErr = "Mobile no is required";  
        } else {  
                $mobileno = input_data($_POST["mobileno"]);  
                // check if mobile no is well-formed  
                if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
                $mobilenoErr = "Only numeric value is allowed.";  
                }  
            //check mobile no length should not be less and greator than 10  
            if (strlen ($mobileno) != 10) {  
                $mobilenoErr = "Mobile no must contain 10 digits.";  
                }  
        }  
          
        //URL Validation      
        if (empty($_POST["website"])) {  
            $website = "";  
        } else {  
                $website = input_data($_POST["website"]);  
                // check if URL address syntax is valid  
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {  
                    $websiteErr = "Invalid URL";  
                }      
        }  
          
        //Empty Field Validation  
        if (empty ($_POST["gender"])) {  
                $genderErr = "Gender is required";  
        } else {  
                $gender = input_data($_POST["gender"]);  
        }  
      
        //Checkbox Validation  
        if (!isset($_POST['agree'])){  
                $agreeErr = "Accept terms of services before submit.";  
        } else {  
                $agree = input_data($_POST["agree"]);  
        }  
    }  
    function input_data($data) {  
      $data = trim($data);  // trim removes whitespace and other predefined characters from both sides of a string.
      $data = stripslashes($data);  // stripslashes() function removes backslashes
      $data = htmlspecialchars($data);  // htmlspecialchars() function converts some predefined characters to HTML entities.
      return $data;  
    }  
    ?>

    <div id="registration_form">
        <h2>Registration Form</h2>
        <span class="error">* required field </span>
        <br><br>
        <form method="post" action="<?php echo($_SERVER["PHP_SELF"]); ?>">
            Name:
            <input type="text" name="name">
            <span class="error">* <?php echo $nameErr; ?> </span>
            <br><br>
            E-mail:
            <input type="text" name="email">
            <span class="error">* <?php echo $emailErr; ?> </span>
            <br><br>
            Mobile No:
            <input type="text" name="mobileno">
            <span class="error">* <?php echo $mobilenoErr; ?> </span>
            <br><br>
            Website:
            <input type="text" name="website">
            <span class="error"><?php echo $websiteErr; ?> </span>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other
            <span class="error">* <?php echo $genderErr; ?> </span>
            <br><br>
            Agree to Terms of Service:
            <input type="checkbox" name="agree">
            <span class="error">* <?php echo $agreeErr; ?> </span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
            <br><br>
        </form>

        <?php  
            if(isset($_POST['submit'])) {  
                if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "" && $agreeErr == "") {  
                    echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
                    echo "<h2>Your Input:</h2>";  
                    echo "Name: " .$name;  
                    echo "<br>";  
                    echo "Email: " .$email;  
                    echo "<br>";  
                    echo "Mobile No: " .$mobileno;  
                    echo "<br>";  
                    echo "Website: " .$website;  
                    echo "<br>";  
                    echo "Gender: " .$gender;  
                } else {  
                    echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
                }  
            }  
            ?>
    </div>
</body>

</html>