<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Custom Exception</title>
</head>

<body>
  <?php
    class customException extends Exception {
      public function errorMessage() {
        //error message
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
        .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errorMsg;
      }
    }
    
    $email = "someoneexample@abc.com";
    
    try {
      //check if
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //throw exception if email is not valid
        throw new customException($email);
      }
      //check for "example" in mail address
      // echo strpos($email, "example");
      if(strpos($email, "example") > 0) {
        throw new Exception("$email is an example e-mail");
      }
    }
    
    catch (customException $e) {
      echo $e->errorMessage();
    }
    
    catch(Exception $e) {
      echo $e->getMessage();
    }
    ?>
</body>

</html>