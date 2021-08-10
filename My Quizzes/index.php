<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title>Quiz Detail Page!</title>

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
<h2 > List of My Quizzes</h2>
  <ol class="list-group list-group-numbered">
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Quiz 1</div>
<a href="../Quiz Detail Page/index.html">
  Quiz Detail Page
</a>      </div>
      <span class="badge bg-primary rounded-pill">14</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Quiz 1</div>
        Cras justo odio
      </div>
      <span class="badge bg-primary rounded-pill">14</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Quiz 1</div>
        Cras justo odio
      </div>
      <span class="badge bg-primary rounded-pill">14</span>
    </li>
  </ol>
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