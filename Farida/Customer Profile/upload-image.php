<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Upload</title>
    <style media="screen">
      body{
        display:flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height:800px;
        max-width:2000px;

      }
    </style>
  </head>
  <body>
<?php if(isset($_GET['error'])): ?>
  <p><?php echo $_GET['error']; ?></p>
<?php endif ?>
    <form class="" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image" value="">
      <input type="submit" name="submit" value="Upload">
    </form>
  </body>
</html>
