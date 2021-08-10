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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <title>User Dashboard </title>
  </head>
  <body>
    <div class="container">
    <?php 
      include("../menu.php");
  ?>
      <div class="main-body">
      
            <!-- Breadcrumb -->
       <h2>Dashboard</h2>
            <!-- /Breadcrumb -->
      
            <div class="row gutters-sm">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                      <div class="mt-3">
                        <h4>Hamza</h4>
                        <p class="text-secondary mb-1">Full Stack Developer</p>
                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                        <center><a href="../Edit User Profile Page/index.html">Edit Profile</a></center>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mt-3">
                  <h3 style="padding:10px; ">                  Certificates
                  </h3>
                  <div class="row" style="margin-left: 8px;  margin-bottom: 40px;">
                    <div class="col-md-3">
                      <img src="certificate.png" height="50px;">
                    </div>
                    <div class="col-md-3">
                      <img src="certificate.png" height="50px;">
                    </div>
                    <div class="col-md-3">
                      <img src="certificate.png" height="50px;">
                    </div>
                    <div class="col-md-3">
                      <img src="certificate.png" height="50px;">
                    </div>
                  </div>
                </div>

                <div class="card mt-3">
                  <h3 style="padding:10px;">                  Rewards
                  </h3>
                  <div class="row" style="margin-left: 4px;  margin-bottom: 40px;">
                    <div class="col-md-2">
                      <img src="medal.png" height="50px;">
                    </div>
                    <div class="col-md-2">
                      <img src="medal.png" height="50px;">
                    </div>
                    <div class="col-md-2">
                      <img src="medal.png" height="50px;">
                    </div>
                    <div class="col-md-2">
                      <img src="medal.png" height="50px;">
                    </div>
                    <div class="col-md-2">
                      <img src="medal.png" height="50px;">
                    </div>
                
                  </div>
                </div>
                <div class="card mt-3">
                  <h3 style="padding:10px;">                  Subscription
                  </h3>
              <h6 style=" padding-left: 4%;">Your subscription ends on 25 February 2015	

              </h6>
              <button type="button" class="btn btn-primary" style="width: 40%; margin-left: 30%; margin-bottom: 7%;">Upgrade</button>

                </div>
              </div>
              <div class="col-md-8">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
Hamza Iqbal                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        fip@jukmuh.al
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        (239) 816-9029
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Mobile</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        (320) 380-4539
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        Bay Area, San Francisco, CA
                      </div>
                    </div>
            
                  </div>
                </div>
  
                <div class="row gutters-sm">
                  <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                      <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3">Courses </h6>
                        <p>Your recent courses

                        </p>
                        <small>Web Design</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Website Markup</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>One Page</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Mobile Template</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Backend API</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                      <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3">Qizzes </h6>
                        <p>Your recent performance

                        </p>
                        <ol class="list-group list-group-numbered">
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold"><a href="#">Title of quiz goes here?</a></div>
                              Course <a href="#">Basics of HTML</a>
                            </div>
                            <span class="badge bg-primary rounded-pill">14
                              <br>
                              Good
                            </span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold"><a href="#">Title of quiz goes here?</a></div>
                              Course <a href="#">Basics of HTML</a>
                            </div>
                            <span class="badge bg-primary rounded-pill">7
                              <br>
                              Bad
                            </span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold"><a href="#">Title of quiz goes here?</a></div>
                              Course  <a href="#">Basics of HTML</a>
                            </div>
                            <span class="badge bg-primary rounded-pill">67
                              <br>
                              Great
                            </span>
                          </li>
                        </ol>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 mb-3">
                    <div class="card h-100">
                      <div class="card-body">
                        <h4 class="d-flex align-items-center mb-3">Forum Activity
                        </h4>
                        <p>Latest forum topics & comments



                        </p>
                        <div class="container">
                          <div class="row">
                            <div class="col-md-10>
                              <ul class="list-group">
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                  <div class="flex-column">
                                    Don Quixote 
                                    <p><small>Can someone help me with AngularJS?</small></p>
                                    <p>Topic: AngularJS   By: Adrian Demian</p>
                                    <span class="badge badge-info badge-pill" style="color: black;"> 2 Copies in Stock</span>
                                  </div>
                                  <div class="image-parent">
                                      <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="img-fluid" alt="quixote" style="border-radius: 70%;">
                                  </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                  <div class="flex-column">
                                    Don Quixote 
                                    <p><small>Can someone help me with AngularJS?</small></p>
                                    <p>Topic: AngularJS   By: Adrian Demian</p>
                                    <span class="badge badge-info badge-pill" style="color: black;"> 2 Copies in Stock</span>
                                  </div>
                                  <div class="image-parent">
                                      <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="img-fluid" alt="quixote" style="border-radius: 70%;">
                                  </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                  <div class="flex-column">
                                    Don Quixote 
                                    <p><small>Can someone help me with AngularJS?</small></p>
                                    <p>Topic: AngularJS   By: Adrian Demian</p>
                                    <span class="badge badge-info badge-pill" style="color: black;"> 2 Copies in Stock</span>
                                  </div>
                                  <div class="image-parent">
                                      <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="img-fluid" alt="quixote" style="border-radius: 70%;">
                                  </div>
                                </a>
                              </ul>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
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
