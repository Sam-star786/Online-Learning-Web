<?php
session_start();
if(!isset($_SESSION['id'])){
  header("location:../login/index.php");
}
if(isset($_GET['edit_id'])){
  $edit_id = $_GET['edit_id'];
 }

// Fetching data from DB to show
  require_once('../backend/conn.php');
  $sql = mysqli_query($con, "SELECT * FROM user WHERE id = {$_SESSION['id']}");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_array($sql);

    $fname = $row['first_name'];
    $lname = $row['last_name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $pass = $row['pass'];
    $address = $row['address'];
    // $image = $row['image'];
    $course = $row['course'];
    $fb = $row['facebook'];
    $insta = $row['instagram'];
    $tw = $row['twitter'];
    $git = $row['github'];
    $web = $row['website'];
   
  }
// Updating data into db
if(isset($_POST['update'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $add = $_POST['add'];
  $ph = $_POST['ph'];
  $course = $_POST['course'];
  $em = $_POST['em'];
  $pass = $_POST['pass'];
  $web = $_POST['web'];
  $git = $_POST['git'];
  $fb = $_POST['fb'];
  $tw = $_POST['tw'];
  $fname = $_POST['fname'];
  $insta = $_POST['insta'];

  $sql = mysqli_query($con, "UPDATE `user` SET `first_name`= '$fname',`last_name`= '$lname',`phone`= '$ph',`email`= '$em',`pass`= '$pass',`address`= '$add',`facebook`= '$fb',`instagram`= '$insta',`twitter`= '$tw',`github`= '$git',`website`= '$web',`course`= '$course' WHERE id = {$_SESSION['id']}");
  if($sql){
    echo '<script type="text/javascript">
  alert("Profile Updated");
  window.location = "../user profile page_/index.php";
</script>';
}else{
  echo '<script type="text/javascript">
  alert("Data not Updated");
  window.location = "../user profile page_/edit.php";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <title>Edit Profile</title>
</head>

<body>
<div class="container-fluid" style="margin-bottom: 70px;">
    <div class="row">
    <?php 
      include("../menu.php");
  ?>
    </div>
  </div>
  <div class="container">
    
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Edit Profile</h2>
          </div>
          <div class="card-body">
            <form action="" method="POST" >
              <div class="mb-4">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="username" name="fname"  value="<?php echo $fname;?>" required />
              </div>
              <div class="mb-4">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="password" name="lname" value="<?php echo $lname;?>" required />
              </div>
              <div class="mb-4">
                <label for="lastname" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="add" value="<?php echo $address;?>" required />
              </div>
              <div class="mb-4">
                <label for="lastname" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="ph" name="ph" value="<?php echo $phone;?>" required />
              </div>
              <div class="mb-4">
                <label for="cars">Courses</label>

                <select class="form-control" name="course" value="<?php echo $course;?>">
                  <option>Web Design</option>
                  <option>Web Development</option>
                  <option>Graphic Design</option>
                  <option>Machine Languages</option>
                </select>
              </div>

              <div class="mb-4">
                <label for="email" class="form-label">Email Address</label>
                <input type="text" class="form-control" id="password" name="em" value="<?php echo $email;?>" required />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="pass" value="<?php echo $pass?>" required />
              </div>
              <!-- <div class="mb-4">
                <label for="lastname" class="form-label">Image</label>
                <input type="file" class="form-control" id="ph" name="img" required />
              </div> -->
              <center>Extra Fields</center>
              <div class="mb-4">
                <label for="lastname" class="form-label">Website</label>
                <input type="text" class="form-control" id="password" name="web" value="<?php echo $web;?>" placeholder="If have?" />
              </div>
              <div class="mb-4">
                <label for="lastname" class="form-label">Git Hub</label>
                <input type="text" class="form-control" id="password" name="git" value="<?php echo $git;?>" placeholder="If have?" />
              </div>
              <div class="mb-4">
                <label for="lastname" class="form-label">Facebook</label>
                <input type="text" class="form-control" id="password" name="fb" value="<?php echo $fb;?>" placeholder="If have?" />
              </div>
              <div class="mb-4">
                <label for="lastname" class="form-label">Twitter</label>
                <input type="text" class="form-control" id="password" name="tw" value="<?php echo $tw;?>" placeholder="If have?" />
              </div>
              <div class="mb-4">
                <label for="lastname" class="form-label">Instagram</label>
                <input type="text" class="form-control" id="password" name="insta" value="<?php echo $insta;?>" placeholder="If have?" />
              </div>




              <div class="d-grid">
                <button type="submit" name="update" class="btn btn-success">Update Profile</button>
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