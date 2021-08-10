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
  <div class="container-fluid">
  <?php 
      include("../menu.php");
  ?>
    <div class="row main-header">
      <div class="col-md-1">
        <img src="question.svg" height="30px;" style="margin-left: 60px; ">

      </div>
      <div class="col-md-1">
        <h6>Questions</h6>
        <h3 style="color: gray;">25</h3>
      </div>
      <div class="col-md-1">
        <img src="diamond.svg" height="30px;" style="margin-left: 60px;">

      </div>
      <div class="col-md-2">
        <h6>Total Points</h6>
        <h3 style="color: gray;">800pt</h3>
      </div>
    </div>
  </div>
  <div class="container">

    <div class="row" style="padding-top:4%">
      <div class="col-md-8">
        <h6 style="color:black; background-color: whitesmoke; padding-bottom: 5px;">Question 2 of 25</h6>
      </div>
      <div class="col-md-4">
        <h6 style="color:black; background-color: whitesmoke; padding-bottom: 5px; padding-top: 10px;">Time to Complete</h6>
      </div>

    </div>
    <div class="row main-header-2">

      <div class="col-md-7">
        <div class="text-box">
          <h3>Step by Step
          </h3>
          <hr>
          <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae
              rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint
              totam velit. Enim.

            </b></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur consequuntur dignissimos
            dolorem dolores eaque error eum excepturi fugit in iste laboriosam, libero maiores neque officiis omnis,
            pariatur possimus, quidem quo quod recusandae rem repudiandae rerum saepe sequi suscipit tempora? A aperiam
            autem deleniti distinctio ea expedita facere fugiat, fugit iure labore laboriosam laudantium nam neque nihil
            numquam, obcaecati, quam quibusdam ratione recusandae rem sapiente sed veritatis voluptas? Accusantium et
            laborum minima perferendis praesentium vel. Aliquid architecto, aspernatur autem blanditiis consequuntur
            debitis, ducimus eaque eos in iste nisi pariatur quidem rem sapiente tempora, tenetur vitae. Dolorem quae
            quo recusandae similique?

          </p>
        </div>
      </div>
      <div class="col-md-1" style="background-color: whitesmoke;"></div>
      <div class="col-md-4">
        <div class="text-box-2" style="padding-top: 25px;">
          <div class="row">
            <div class="col-md-4">
              <center> 0
                <br>
                <h6>Hours</h6>
              </center>
            </div>
            <div class="col-md-4">
              <center> 0
                <br>
                <h6>Hours</h6>
              </center>
            </div>
            <div class="col-md-4">
              <center> 0
                <br>
                <h6>Hours</h6>
              </center>
            </div>
          </div>
        </div>

        <div class="text-box-3">
          <div class="row">
            <h6 style="color:black; padding-bottom: 20px;">Questions</h6>
            <div class="row">
              <div class="col-sm-2">
                <img src="1.png" height="43px;">
              </div>
              <div class="col-sm-10">
                <a href="#">
                  Dolores explicabo mollitia nisi perspiciatis quas. Itaque.
                </a>
              </div>
            </div>
            <div class="row" style="padding-top: 15px;">
              <div class="col-sm-2">
                <img src="1.png" height="43px;">
              </div>
              <div class="col-sm-10">
                <a href="#">
                  Dolores explicabo mollitia nisi perspiciatis quas. Itaque.
                </a>
              </div>
            </div>
            <div class="row" style="padding-top: 15px;">
              <div class="col-sm-2">
                <img src="1.png" height="43px;">
              </div>
              <div class="col-sm-10">
                <a href="#">
                  Dolores explicabo mollitia nisi perspiciatis quas. Itaque.
                </a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
  <div class="container">
    <div class="row main-header-3" style="margin-top: 4%;" >
      <h6 style="color:black; padding-top: 13px;">Your Answer</h6>
        <div class="col-md-7">
          <div class="text-box">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Aspernatur corporis deserunt dolorum eos nulla
              </label>

            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Aspernatur corporis deserunt dolorum eos nulla
              </label>

            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Aspernatur corporis deserunt dolorum eos nulla

              </label>

            </div>

          </div>

          <br>
          <div style="margin-left: 54%; margin-bottom: 5%;">
          <button type="button" class="btn btn-primary">Save Question</button>
          <button type="button" class="btn btn-primary">Next Question</button>
        </div>

      </div>
<div class="col-md-5">
  <img src="clock.svg" style="z-index: 1; height: 120px; margin-left: 40%;">

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