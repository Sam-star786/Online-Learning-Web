<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <link href="style.css" rel="stylesheet" type="text/css">
    <title>About Us</title>
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

    <div class="container-fluid">
    <div class="container-fluid" style="margin-bottom: 60px;">
    <div class="row">
    <?php 
      include("../menu.php");
  ?>
    </div>
  </div>
      <div class="row">
        <div class="about-section">
          <div class="inner-container" style="background-color: #6e0fb3;">
            <h1>About Us</h1>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
            <div class="skills">
              <span>Web Design</span>
              <span>Photoshop & Illustrator</span>
              <span>Coding</span>
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
</div>

  </body>
</html>
