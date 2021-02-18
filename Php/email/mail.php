<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Email in php</title>
</head>

<body>
   <h2>Sending Email throught php mail() function.</h2>
   <?php  
    //    ini_set("sendmail_from", "poudell.tilakk@gmail.com");  
       $to = "poudell.tilakk@gmail.com";//change receiver address  
       $subject = "This is subject";  
       $message = "This is simple text message from php mail.";  
       $header = "From:tilak.poudel.314@gmail.com \r\n";  
      
       $result = mail($to,$subject,$message,$header);  
    //    $result = mail("tilak.poudel.314@gmail.com","My subject",$message);

      
       if( $result == true ){  
          echo "Message sent successfully...";  
       }else{  
          echo "Sorry, unable to send mail...";  
       }  
    ?>
</body>

</html>