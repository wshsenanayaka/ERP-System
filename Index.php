<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
session_start();
//$_SESSION['dep_id'] =$_GET['dep_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="logo/logoBhoomiTech.jpg" />
  <title>Bhoomitech - Login</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
    #input_email,#input_password
    {
      width: 100%;
    }
      #login_cont
      {
        padding-top: 10px;
      }
    #logo_img
    {
      padding-left: 20px;
      padding-right: 20px;
    }

  </style>
</head>
<body class="bg-dark">
  <div class="container" id="login_cont">
    <div class="card card-login mx-auto mt-5">
      <center><img src="logo\logoBhoomiTech.jpg" alt="logo" id="logo_img"/></center>
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">User Name or Email</label>
            <input class="form-control" name="email" type="text" aria-describedby="emailHelp" placeholder="Enter User Name or Email" id="input_email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" type="password" placeholder="Password" id="input_password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="register.html">Register an Account</a> -->
        <!--   <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
  <?php
   require 'include/config.php';
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form
        $email = $_POST['email'];

        $password = $_POST['password'];
        $password =md5($password);
      
         $sql ="SELECT * FROM signup WHERE email = '$email' and password = '$password'";
         $result=mysqli_query($conn,$sql);
         $count =mysqli_num_rows($result); // if uname/pass correct it returns must be 1 row

         if($count == 1 )
          {
                 session_regenerate_id();
                 $_SESSION['email'] = $email;
                 session_write_close();
                  header('Location:content/home');
         }
         else
         {
            echo "<script type='text/javascript'>alert('Incorrect Credentials, Try again...');window.location = \"index\"</script>";
         }
   }
?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
