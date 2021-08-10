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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <title>Quiz Detail Page!</title>
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
<div class="container-fluid" style="margin-bottom: 60px;">
    <div class="row">
    <?php 
      include("../menu.php");
  ?>
    </div>
  </div>
  <div class="container-fluid">
    
    <div class="container">
      <div class="row" style="margin-top: 8%;">
        <h2>All Tutorials</h2>

        <div class="container mx-auto mt-4">
          <div class="row">
          <?php
                        require_once('../backend/conn.php');
                        $sql = mysqli_query($con, "SELECT * FROM video WHERE stat = 'approved'");
                        if (mysqli_num_rows($sql) > 0) {
                          while($row = mysqli_fetch_array($sql)){
                          
                        ?>

            <div class="col-md-4">
              <div class="card" style="width: 18rem;">

                <video src="../image/<?php echo $row['video']?>" controls ></video>
                <div class="card-body" style="background-color: #6e0fb3;">
                  <h5 class="card-title"><?php echo $row['title']?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['username']?></h6>
                  
                  <p class="card-text"><?php echo substr($row['descript'],0,30); ?>...</p>
                  <p style="color:gray"><?php echo $row['category']?></p>
                  <a href="../Tutorial Detail Page/index.php?video_id=<?php echo $row['id']?>" class="btn mr-2"><i class="fas fa-link"></i> Details</a>
                  <a href="../categories/index.php" class="btn "><i class="fab fa-github"></i> Categories</a>
                  <!-- <center> <a href="../user_tutorial/index.php" style="margin-top: 5%; margin-right: 7%;" class="btn "><i class="fab fa-github"></i> View Tutorial</a>
                  </center> -->

                </div>
              </div>
            </div>
            <?php } 
            }else{
              echo '<h1>No Video Available</h1>';
            }?>
            
            

            
            
            

            
            
            

            
           
           
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Site footer -->
    <?php
    include("../footer.php");
    ?>
  </div>
</body>

</html>