<?php
   $filename = "test.txt";
   $file = fopen( $filename, "a+" ); // open in append mode
   
   if( $file == false ) {
      echo ( "Error in opening new file" );
      exit();
   }
   fwrite( $file, "hello bca classs\n" );
   fclose( $file );
?>
<html>

<head>
   <title>Writing a file using PHP</title>
</head>

<body>

   <?php
         $filename = "test.txt";
         $file = fopen( $filename, "r" ); // open in read mode
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename ); // get file size
         $filetext = fread( $file, $filesize ); // read the content
         
         fclose( $file );
         
         echo ( "File size : $filesize bytes <br>" );
         echo ( "$filetext <br>" );
         echo("file name: $filename");
      ?>

</body>

</html>