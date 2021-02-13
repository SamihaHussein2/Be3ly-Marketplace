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
include "upload.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/CustomerPhoto.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>Customer Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>Welcome User</h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->

      <div class="text-center">
        <?php
          $sql="SELECT*FROM images WHERE id=9";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res)>0) {
            while ($images=mysqli_fetch_assoc($res)){  ?>
              <div class="alb">
            <img src="img/<?=$images['image_url']?>" style="width:300px;border-radius: 200%; border-color: #242484">
           </div>
      <?php  }  }?>
        <h6>Upload a different photo?</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>

        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active" ><a data-toggle="tab" href="#home"  style="color:#242484;">Edit Profile</a></li>
                <li><a data-toggle="tab" href="#messages" style="color:#242484;">Message History</a></li>
                <li><a data-toggle="tab" href="#settings" style="color:#242484;">Order History</a></li>
              </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="first_name"><h4>First Name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" title="Enter your first name">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last Name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" title="Enter your last name">
                          </div>
                      </div>

                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" title="Enter your phone number">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" title="Enter your mobile number">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="Enter your email.">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="email"><h4>Address</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="Address" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password" title="Password">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password" title="Confirm Password">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right" type="submit" style="background-color:#d12626;border-color:#242484;"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>

                            </div>
                      </div>
              	</form>

              <hr>

             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">

               <h2></h2>

               <hr>


             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">


                  <hr>

              </div>

              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

</html>
