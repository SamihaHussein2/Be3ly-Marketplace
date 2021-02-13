<?php
include "upload.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Photo</title>
  </head>
  <body>
    <a href="upload-image.php">Re-upload&#8592;</a>
    <?php
      $sql="SELECT*FROM images ORDER BY id DESC";
      $res = mysqli_query($conn,$sql);

      if (mysqli_num_rows($res)>0) {
        while ($images=mysqli_fetch_assoc($res)){  ?>
          <div class="alb">
        <img src="img/<?=$images['image_url']?>" style="width:100px;border-radius: 200%; border-color: #242484">
       </div>
  <?php  }  }?>

  </body>
</html>
