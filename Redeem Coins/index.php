<?php
session_start();
if (!isset($_SESSION['id'])) {
  
  header("location:../login/index.php");
}

// Selecting total coins
require_once('../backend/conn.php');
$sql="SELECT * FROM user WHERE id = {$_SESSION['id']}";

$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result))
{ 
   $coin = $row['point'];
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="…">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="style.css" rel="stylesheet" type="text/css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


  <title>Redeem Coins</title>
  <style>
    .header li a {
    color: black!important;
}

.header li a:hover {
    color: white!important;
}
  </style>
</head>

<body>
  <div class="container-fluid" style="margin-bottom: 70px;">
    <div class="row">
      <?php
      include("../menu.php");
      ?>
    </div>
  </div>
  <section id="content" class="container">

    <!-- Begin .page-heading -->
    <h2>Redeem Coins</h2>

    <div class="row gutters-sm">
      <div class="col-sm-6 mb-3">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="d-flex align-items-center mb-3">Your Videos</h4>
            <?php
            $sql = "SELECT * FROM video WHERE stat = 'approved' AND user_key = {$_SESSION['id']}";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {


            ?>
                <p><?php echo $row['title']; ?></p>

            <?php
              }
            } else {
              echo "0 results";
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="d-flex align-items-center mb-3">Your Coins </h6>

            <img src="dollar.png" height="40%;" class="animate__rubberBand" style="margin-left: 26.5%;">
            <center>
              <h1 style="padding-top: 20px;"><?php echo $coin;?></h1>
            </center>
            <center> <a href="../giftcard/index.php?user_id=<?php echo $_SESSION['id']?>&coin=<?php echo $coin?>" class="btn btn-primary">Redeem Coins</a>
            </center>

           

          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <div class="row">
    <!-- Site footer -->
    <?php
    include("../footer.php");
    ?>
  </div>
</body>

</html>