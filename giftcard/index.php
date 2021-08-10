<?php
session_start();
if(!isset($_SESSION['id'])){
  header("location:../login/index.php");
}
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
}
if(isset($_GET['coin'])){
    $user_coin = $_GET['coin'];
}
// Fetchin Data from DB
require_once('../backend/conn.php');


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Gift</title>
   
  </head>
  <body style="background: linear-gradient(90deg, rgba(74, 30, 243, 1) 28%, rgba(146, 57, 224, 1) 60%);">
    <div class="container-fluid">
        <div class="row">
            <?php 
            $sql = "SELECT * FROM coupon";
            $result = $con->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $id = $row['id'];  
                $img = $row['img'];
                $title = $row['title'];
                $coin = $row['coin'];
                $coupon = $row['coupon'];
            
            ?>
            <div class="col-md-4">
           <div class="card" style="background-color: white; margin-top: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <img src="../admin-pannel/image/<?php echo $img?>" width="100%" height="300px" alt="">
                <div class="card-body">
                   <h2><?php echo $title?></h2>
                   <h3><?php echo $coin?> <span style="color: gray; font-size:20px">coin</span></h3>
                   <a href="calculate.php?card=<?php echo $id?>&card_coin=<?php echo $coin?>&user_id=<?php echo $user_id?>&user_coin=<?php echo $user_coin?>&code=<?php echo $coupon?>" class="btn btn-success" style="float: right;">Radeem Gift</a>
                </div>
           </div>
            </div>
            <?php 
              }
            } else {
              echo "0 results";
            }
            ?>
            
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>






