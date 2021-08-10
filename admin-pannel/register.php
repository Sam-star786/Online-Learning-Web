
<?php
require_once('conn.php');
if (isset($_POST['sub'])) {
    $uname = $_POST['uname'];
    $fname = $_POST['finame'];
    $lname = $_POST['lname'];
    $ph = $_POST['ph'];
    $em = $_POST['em'];
    $pass = $_POST['pass'];
    $add = $_POST['add'];
   



    $sql="select * from admin where email='$em';";
    $res=mysqli_query($con,$sql);
    if (mysqli_num_rows($res) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($res);
    if($em==$row['email'])
    {
        echo '<script type="text/javascript">
        alert("oops Email Already Exsits");
        window.location = "register.php";
     </script>';
    }
}else { //here you need to add else condition
    $sql = "INSERT INTO `admin`(`username`, `first_name`, `last_name`, `address`, `phone`, `email`, `pass`) VALUES ('$uname', '$fname', '$lname', '$add', '$ph', '$em', '$pass')";
    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript">
    alert("Registerd Successfully");
    window.location = "index.php";
 </script>';
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <title>Register!</title>
</head>

<body>
  <div class="container">
    
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Register</h2>
          </div>
          <div class="card-body">
            <form action="#" method="POST" >
            <div class="mb-4">
                <label for="firstname" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="uname" required />
              </div>
              <div class="mb-4">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="" name="finame" required />
              </div>
              <div class="mb-4">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="password" name="lname" required />
              </div>
              <div class="mb-4">
                <label for="lastname" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="add" required />
              </div>
              <div class="mb-4">
                <label for="lastname" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="ph" name="ph" required />
              </div>
             <div class="mb-4">
                <label for="email" class="form-label">Email Address</label>
                <input type="text" class="form-control" id="password" name="em" required />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="pass" required />
              </div>
              <!-- <div class="mb-4">
                <label for="lastname" class="form-label">Image</label>
                <input type="file" class="form-control" id="ph" name="img" required />
              </div> -->
              


              <div class="d-grid">
                <button type="submit" name="sub" class="btn btn-dark">Create an Account</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script>
    const phoneInputField = document.querySelector("#ph");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>

</body>

</html>