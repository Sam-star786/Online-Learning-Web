<?php
session_start();
if(!isset($_SESSION['id'])) {
  header("location:index.php");
}
require_once('conn.php');
if(isset($_POST['upload'])){
    $file_name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_destination = "image/" . $file_name;
    
    $title = $_POST['title'];
    $coin = $_POST['coin'];
    $coupon = $_POST['coupon'];

    if (move_uploaded_file($temp_name, $file_destination)) {
        $sql = "INSERT INTO `coupon`(`img`, `title`, `coin`, `coupon`) VALUES ('$file_name', '$title', '$coin', '$coupon')";

if ($con->query($sql) === TRUE) {
  echo '<script type="text/javascript">
    alert("Gift Card Added");
    window.location = "send_gift.php";
 </script>';
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Profile Photo | Upload</title>
    <style>
        body {
            background-color: lavender;
        }

        .img-box {
            width: 100%;
            background-color: white;
            padding: 20px;
            margin-top: 200px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="img-box">
                    <form action="#" method="POST" enctype="multipart/form-data">
                    <h2 style="text-align: center;">Make a Gift card</h2><br>
                       <div class="form-group">
                            <lable>Select Gift Image</lable>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Gift Title</lable>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Enter Coin Prize</lable>
                            <input type="text" name="coin" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Enter Coupon Code</lable>
                            <input type="text" name="coupon" class="form-control">
                        </div>
                        <input style="margin-top:10px" class="btn btn-outline-success btn btn-block" type="submit" name="upload" value="Make Card">


                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>