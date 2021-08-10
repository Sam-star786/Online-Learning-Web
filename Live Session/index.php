<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="…">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="style.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <title>Live Session</title>
    <style>
      .header li a {
    color: black!important;
}

.header li a:hover {
    color: white!important;
}
    </style>
</head>

<body class="hm-gradient">
<div class="container-fluid" style="margin-bottom: 70px;">
    <div class="row">
    <?php 
      include("../menu.php");
  ?>
    </div>
  </div>
    <section id="content" class="container">
    
        <!-- Begin .page-heading -->
        <h2>Live Session </h2>

        <div class="row">
            <div class="col-md-4">

                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-icon">
                            <i class="fa fa-trophy"></i>
                        </span>
                        <span class="panel-title"> Teacher Name</span>
                    </div>
                    <div class="panel-body pb5">
                        <span class="label label-warning mr5 mb10 ib lh15">
                            <b>Teacher Information</b><br>
                            <ul>
                                <li>distracted by </li>
                                <li>distracted by </li>
                                <li>distracted by </li>
                                <li>distracted by </li>
                            </ul>
                            <b>Lecture Information</b><br>

                            distracted by the readable content of a page when looking
                            at its layout. The point of using Lorem Ipsum is that it ha
                        </span>
                    </div>
                </div>

            </div>
            <div class="col-md-8">

                <div class="tab-block">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab1" data-toggle="tab">Live Sessions </a>
                        </li>

                    </ul>
                    <br>
                    <div class="ratio ratio-4x3">
                        <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                <br>
                <center>
                <div class="col-md-6">
                    <!-- DIRECT CHAT PRIMARY -->
                    <div class="box box-primary direct-chat direct-chat-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Direct Chat</h3>
                  
                        <div class="box-tools pull-right">
                          <span data-toggle="tooltip" title="" class="badge bg-light-blue" data-original-title="3 New Messages">3</span>
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                            <i class="fa fa-comments"></i></button>
                          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                          <!-- Message. Default to the left -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                              <span class="direct-chat-name pull-left">Alexander Pierce</span>
                              <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="https://bootdey.com/img/Content/user_1.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
                  
                          <!-- Message to the right -->
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                              <span class="direct-chat-name pull-right">Sarah Bullock</span>
                              <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="https://bootdey.com/img/Content/user_2.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              You better believe it!
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
                        </div>
                        <!--/.direct-chat-messages-->
                  
                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                          <ul class="contacts-list">
                            <li>
                              <a href="#">
                                <img class="contacts-list-img" src="https://bootdey.com/img/Content/user_1.jpg">
                  
                                <div class="contacts-list-info">
                                      <span class="contacts-list-name">
                                        Count Dracula
                                        <small class="contacts-list-date pull-right">2/28/2015</small>
                                      </span>
                                  <span class="contacts-list-msg">How have you been? I was...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                              </a>
                            </li>
                            <!-- End Contact Item -->
                          </ul>
                          <!-- /.contatcts-list -->
                        </div>
                        <!-- /.direct-chat-pane -->
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <form action="#" method="post">
                          <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                                  <button type="submit" class="btn btn-primary btn-flat">Send</button>
                                </span>
                          </div>
                        </form>
                      </div>
                      <!-- /.box-footer-->
                    </div>
                    <!--/.direct-chat -->
                  </div>
                </center>
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