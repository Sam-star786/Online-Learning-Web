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

    <title>Login!</title>
  </head>
  <body>
    <div class="container">
      
    
    <div class="row header">
      <div class="col-md-6" style="margin-top: -100px;">
        <div class="txt"> 
<h1 style="font-weight: 700; color: #36DE75;">Login Here
</h1>

<div class="wrapperf">
  <div class="words">
      <span>Learn</span>
      <span>Coding</span>
      <span>Coins</span>
      <span>Quizes</span>
      <span>Tutorials</span>
  </div>
</div><h1><span></span></h1>       
        </div>
        <form method="POST" action="../backend/login.php">
                <div class="mb-4">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="username" name="em" required />
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="pass" required />
                </div>
                <div class="mb-4">
                  <input type="checkbox" class="form-check-input" id="remember" />
                </div>
                <center> <a href="" style="color: black; text-decoration: none;">Create Account!</a></center>
               

                <div class="d-grid">
                  <button type="submit" name="sub" class="btn btn-primary">Login</button>
                </div>
              </form>

      </div>
      <div class="col-md-6">

        <img src="./university.svg" class="vert-move" style="margin-top: 100px;">
      </div>

    </div>
    </div>





  </body>
</html>
