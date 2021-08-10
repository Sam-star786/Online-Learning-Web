<?php
session_start();
require_once('conn.php');

if (isset($_POST['sub'])) {
    $em = $_POST['em'];
    $pass = $_POST['pass'];

    $sql = mysqli_query($con, "SELECT * FROM `admin` WHERE email = '$em' AND pass = '$pass'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_array($sql);
        $_SESSION['id'] = $row['id'];

        header("location:dashboard.php");

    } else {
        echo '<script type="text/javascript">
    alert("Your Email or Password is wrong!");
    window.location = "index.php";
 </script>';
    }
}




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Login!</title>
  </head>
  <body>
    <div class="container">
   
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card shadow">
            <div class="card-title text-center border-bottom">
              <h2 class="p-3">Login</h2>
            </div>
            <div class="card-body">
            <center> <img src="https://st2.depositphotos.com/1104517/11965/v/600/depositphotos_119659092-stock-illustration-male-avatar-profile-picture-vector.jpg" width="100" class="img-circle" alt="Cinque Terre"></center>  
              <form method="POST" action="#">
                <div class="mb-4">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="username" name="em" required />
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="pass" required />
                </div>
                <div class="mb-4">
                  <input type="checkbox" class="form-check-input" id="remember" />
                  <label for="remember" class="form-label">Remember Me</label>
                </div>
               
               

                <div class="d-grid">
                  <button type="submit" name="sub" class="btn btn-dark">Login</button><br>
                  <center> <a href="" style="text-decoration: none;">Forgot Password? </a></center>
                <center> <a href="register.php" style="color: black; text-decoration: none;">Create Account!</a></center>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>





  </body>
</html>
