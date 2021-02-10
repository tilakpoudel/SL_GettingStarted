<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Handling</title>
</head>

<body>
    <h2>File handling in php.</h2>
    <?php
        $filename = "test.txt";
        $file = fopen( $filename, "r" ); // open the file in read mode
        
        if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
        }
        
        $filesize = filesize( $filename ); // get the size of file
        $filetext = fread( $file, $filesize ); // read the content of file
        fclose( $file ); // close file
        
        echo ( "File size : $filesize bytes" );
        echo ( "<pre>$filetext</pre>" );       
    ?>
</body>

</html>