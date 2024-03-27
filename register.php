<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
  body {
    margin: 0;
    padding: 0;
    background-color: #17a2b8;
    height: 100vh;
  }
  #login .container #login-row #login-column #login-box {
    margin-top: 120px;
    max-width: 600px;
    height: auto;
    border: 1px solid #9C9C9C;
    background-color: #EAEAEA;
  }
  #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
  }
  #login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -85px;
  }
</style>

<?php
    $con = mysqli_connect('localhost','root','','mystore') or die('Unable To connect');
  session_start();
  if(isset($_POST['submit'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $contact_no = $_POST['contact_no'];
      $address = $_POST['address'];

      $sql = "INSERT INTO users (username, password, email, phone, address) VALUES ('$username', '$password', '$email',$contact_no,'$address')";

      if(mysqli_query($con, $sql)){
          header("Location:index.php");
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
      }
   
  }
 


?>


<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Register With KitchenAid</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Register</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="contact_no" class="text-info">contact_no:</label><br>
                                <input type="text" name="contact_no" id="contact_no" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="Address" class="text-info">Address:</label><br>
                                <input type="text" name="address" id="address" class="form-control" required="">
                            </div>
                            <div class="form-group">
                               
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
