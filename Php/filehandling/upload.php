<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_parts =explode('.',$_FILES['image']['name']);
      $file_ext=strtolower(end($file_parts));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be less than 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>

<body>

   <form action="" method="POST" enctype="multipart/form-data">
      <input type="file" name="image" />
      <input type="submit" />

      <?php
            if(isset($_FILES['image'])){
            ?>
      <ul>
         <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
         <li>File size: <?php echo $_FILES['image']['size'];  ?>
         <li>File type: <?php echo $_FILES['image']['type'] ?>
         <li><img src="./images/peacock.jpg" alt="" height="50px" width="50px"></li>
      </ul>
      <?php }?>

   </form>

</body>

</html>