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


    <div class="row header">
      <div class="col-md-6" style="margin-top: -100px;">
        <div class="txt">
          <h1 style="font-weight: 700; color: #36DE75;">Register Here
          </h1>

          <div class="wrapperf">
            <div class="words">
              <span class="animate">Learn</span>
              <span class="animate">Coding</span>
              <span class="animate">Coins</span>
              <span class="animate">Quizes</span>
              <span class="animate">Tutorials</span>
            </div>
          </div>
          <h1><span></span></h1>
        </div>
        <form action="../backend/register.php" method="POST">
          <div class="mb-4">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="username" name="fname" required />
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
            <label for="cars">Courses</label>

            <select class="form-control" name="course">
              <option>UI & UX</option>
              <option>C</option>
              <option>C++</option>
              <option>HTML 5, CSS 3, Bootstrap</option>
              <option>javaScript</option>
              <option>PHP</option>
              <option>MySql</option>
              <option>Laravel</option>
              <option>Java</option>
              <option>Graphic Designing</option>
              <option>Android , IOS Development</option>
            </select>
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
          <center>Extra Fields</center>
          <div class="mb-4">
            <label for="lastname" class="form-label">Website</label>
            <input type="text" class="form-control" id="password" name="web" placeholder="If have?" />
          </div>
          <div class="mb-4">
            <label for="lastname" class="form-label">Git Hub</label>
            <input type="text" class="form-control" id="password" name="git" placeholder="If have?" />
          </div>
          <div class="mb-4">
            <label for="lastname" class="form-label">Facebook</label>
            <input type="text" class="form-control" id="password" name="fb" placeholder="If have?" />
          </div>
          <div class="mb-4">
            <label for="lastname" class="form-label">Twitter</label>
            <input type="text" class="form-control" id="password" name="tw" placeholder="If have?" />
          </div>
          <div class="mb-4">
            <label for="lastname" class="form-label">Instagram</label>
            <input type="text" class="form-control" id="password" name="insta" placeholder="If have?" />
          </div>


          <center> I Agree with the<a href="" style="text-decoration: none;">Terms and Conditions! </a></center>


          <div class="d-grid">
            <button type="submit" name="sub" class="btn btn-primary" style="margin-bottom: 20px;">Create an Account</button>
          </div>
        </form>

      </div>
      <div class="col-md-6">

        <img src="./university.svg" class="vert-move" style="margin-top: 100px;">
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