<?php
        // get passed parameter value, in this case, the record ID
        // isset() is a PHP function used to verify if a value is there or not
        $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
        //include database connection
        include("conn.php");
         $sql = "SELECT * FROM user where id=$id";
            $result = $conn->query($sql);
            // echo $result->num_rows;
            $name=$email=$password=$username="";
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $old_name = $row["fullname"];
                $old_email = $row["email"];
                $old_password = $row["user_password"];
                $old_username = $row["username"];
                $id = $row["id"];
            }
            } else {
                echo "record not found";
            }
            $conn->close();
        ?>

<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $usernameErr = $passwordErr= "";
    $name = $email = $gender = $password = $username = "";

  // check the input data 
    function test_input($data) {
      $data = trim($data); //  trim removes whitespace and other predefined characters from both sides of a string.
      $data = stripslashes($data); // stripslashes() function removes backslashes
      $data = htmlspecialchars($data); // htmlspecialchars() function converts some predefined characters to HTML entities.
      return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        //check password length 
        if (strlen ($name) > 40) {  
          $nameErr = "Name cannot be more than 40 character.";  
        }  
      }
      
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check that the e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
        
      if (empty($_POST["username"])) {
        $usernameErr = "UserName is required";
      }
      else {
        $username = test_input($_POST["username"]);  
          // check if name only contains letters and number  
          if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {  
              $usernameErr = "Username can contain alphabet and number";  
          }
      }

      if (empty($_POST["password"])) {
        $passwordErr = "Password is required.";
      } else {
        $password = test_input($_POST["password"]);
        //check password length 
        if (strlen ($password) < 8) {  
          $passwordErr = "Password must be more than 8 character.";  
        }
      
      }

      // if there is no error then save data to database
      if(empty($nameErr)  && empty($emailErr)  && empty($usernameErr)  && empty($passwordErr) ){
        // echo "no error";
        include("conn.php");
        // $sql = "INSERT INTO user (fullname,email,username,password)
        // VALUES ($name,$email,$username,$password)";
        $sql = "UPDATE user SET fullname=$name, email=$email,username=$username,user_password=$password  WHERE id=$id";

         if ($conn->query($sql) === TRUE) {
            echo "Record updated Succcessfully <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // // prepare and bind
        // $stmt = $conn->prepare("INSERT INTO user (fullname, email, username,user_password) VALUES (?,?,?,?)");
        // $stmt->bind_param("ssss",$name,$email,$username,$password);
        
        // // set parameters and execute
        // $name = $name;
        // $email = $email;
        // $username = $username;
        // $password = $password;
        // $stmt->execute();
        // echo "Records updated successfully";
        $conn->close();
        //   header("Location: list.php");
        // exit();
      }
      // else{
      //   echo "some error";
      // }
    }

?>

    <center>
        <div style="text-align: center; width:50% ; display: flex; justify-content: left;">
            <fieldset style="border: 2px solid black">
                <legend> Register </legend>
                <p><span class="error">* required field</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]. "?id={$id}");?>">
                    Name:
                    <input type="text" name="name" value="<?php echo $old_name?>">
                    <span class="error">* <?php echo $nameErr;?></span>
                    <br><br>
                    E-mail: <input type="text" name="email" value="<?php echo $old_email;?>">
                    <span class="error">* <?php echo $emailErr;?></span>
                    <br><br>
                    UserName: <input type="text" name="username"
                        value="<?php echo htmlspecialchars($old_username, ENT_QUOTES);  ?>">
                    <span class="error"><?php echo $usernameErr;?></span>
                    <br><br>
                    Password: <input type="text" name="password" minlength="8" value="<?php echo $old_password?>">
                    <span class="error"><?php echo $passwordErr;?></span>
                    <br><br>
                    <button>Update</button>
                </form>
            </fieldset>
        </div>
    </center>
    <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";

?>

</body>

</html>