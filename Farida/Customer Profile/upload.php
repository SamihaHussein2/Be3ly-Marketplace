<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="test";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 ?>
<?php
if(isset($_POST['submit'])&& isset($_FILES['image']))
{
  echo "<pre>";
  print_r($_FILES['image']);
  echo "</pre>";

  $img_name=$_FILES['image']['name'];
  $img_size=$_FILES['image']['size'];
  $tmp_name=$_FILES['image']['tmp_name'];
  $error=$_FILES['image']['error'];

  if($error==0){
    if ($img_size>325000){
      $err="Your image is too large";
      header("Location: upload-image.php?error=$err");
    }
    else {
     $img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
     $img_ex_lc=strtolower($img_ex);

     $allowed_exs=array("jpg","jpeg","png");
     if(in_array($img_ex_lc, $allowed_exs))
     {
       $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
       $img_upload_path='img/'.$new_img_name;
       move_uploaded_file($tmp_name, $img_upload_path);

       //Insert into Database
      $sql="INSERT INTO images(image_url) VALUES('$new_img_name')";
      mysqli_query($conn,$sql);
      header("Location: view.php");

     }
     else{
       $err="You can't upload files of this type";
       header("Location: upload-image.php?error=$err");
     }
    }
  }
  else{
    $err="Unknown error occured!";
    header("Location: upload-image.php?error=$err");
  }
}

 ?>
