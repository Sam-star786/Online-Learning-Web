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

    <title>User Profile Page</title>
  </head>
  <body>
    <section id="content" class="container">
    <?php 
      include("../menu.php");
  ?>
        <!-- Begin .page-heading -->
        <div class="page-heading">
            <div class="media clearfix">
              <div class="media-left pr30">
                <a href="#">
                  <img class="media-object mw150" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                </a>
              </div>                      
              <div class="media-body va-m">
                <h2 class="media-heading">Hamza Iqbal
                  <small> - Student</small>
                </h2>
           
              </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-4">
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-star"></i>
                  </span>
                  <span class="panel-title"> Billing</span>
                </div>
                <div class="panel-body pn">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name on Invoice</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Address">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Country</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Country">
                  </div>
                  <button type="button" class="btn btn-primary">Update Billing</button>
                  <button type="button" class="btn btn-primary">Add Credit Card </button>

                </div>

              </div>
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-trophy"></i>
                  </span>
                  <span class="panel-title"> My Courses</span>
                </div>
                <div class="panel-body pb5">
               <b>  <span class="label label-warning mr5 mb10 ib lh15">Default</span></b> 
<br>             
<b>  <span class="label label-warning mr5 mb10 ib lh15">Default</span></b> 
<br>
<b>  <span class="label label-warning mr5 mb10 ib lh15">Default</span></b> 

                </div>
              </div>
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-pencil"></i>
                  </span>
                  <span class="panel-title">My Skills </span>
                </div>
                <div class="panel-body pb5">
    
                  <h6>Experience</h6>
    
                  <h4>Facebook Internship</h4>
                  <p class="text-muted"> University of Missouri, Columbia
                    <br> Student Health Center, June 2010 - 2012
                  </p>
    
                  <hr class="short br-lighter">
    
                  <h6>Education</h6>
    
                  <h4>Bachelor of Science, PhD</h4>
                  <p class="text-muted"> University of Missouri, Columbia
                    <br> Student Health Center, June 2010 through Aug 2011
                  </p>
    
                  <hr class="short br-lighter">
    
                  <h6>Accomplishments</h6>
    
                  <h4>Successful Business</h4>
                  <p class="text-muted pb10"> University of Missouri, Columbia
                    <br> Student Health Center, June 2010 through Aug 2011
                  </p>
    
                </div>
              </div>
            </div>
            <div class="col-md-8">
    
              <div class="tab-block">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#tab1" data-toggle="tab">Manage Account</a>
                  </li>
       
                </ul>
                <div class="tab-content p30" style="height: 730px;">
                  <div id="tab1" class="tab-pane active">
           <div class="container" style="padding: 15px;">
  <form>
    <div class="row" style="padding: 15px;">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">First Name</label>
          <input type="text" class="form-control" placeholder="" id="first">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="last">Last Name</label>
          <input type="text" class="form-control" placeholder="" id="last">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row" style="padding: 15px;">
      <div class="col-md-12">

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="email">
        </div>
      </div>
      <!--  col-md-6   -->
</div>
<div class="row" style="padding: 15px;">
      <div class="col-md-12">

        <div class="form-group">
          <label for="phone">Website </label>
          <input type="Website" class="form-control" id="phone" placeholder="phone">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row" style="padding: 15px;">
      <div class="col-md-12">

        <div class="form-group">
          <label for="email">Change Password</label>
          <input type="text" class="form-control" id="email" placeholder="email">
        </div>
      </div>
      <!--  col-md-6   -->

      <!--  col-md-6   -->
    </div>
    <!--  row   -->


  
<div class="row"  style="padding: 10px;">
      <label>
        <input type="checkbox" value="Sure!" id="newsletter"> Sure! Subscribe to our Newsletter
      </label>
  
      <div class="checkbox">
    </div>
  </div>

    <button type="submit" class="btn btn-primary"  >Save Changes</button>
  </form>
</div>
                    </div>
             
              
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
