<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- All Links -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='js/jquery.svg3dtagcloud.min.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Oswald&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='js/jquery.svg3dtagcloud.min.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Oswald&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />

    <script>
      window.requestAnimFrame = (function() {
        return (
          window.requestAnimationFrame ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame ||
          window.oRequestAnimationFrame ||
          window.msRequestAnimationFrame ||
          function(callback) {
            window.setTimeout(callback);
          }
        );
      });

      function init(elemid) {
        let canvas = document.getElementById(elemid),
          c = canvas.getContext("2d"),
          w = (canvas.width = window.innerWidth),
          h = (canvas.height = window.innerHeight);
        c.fillStyle = "rgba(30,30,30,1)";
        c.fillRect(0, 0, w, h);
        return {c:c,canvas:canvas};
      }
      </script>
    <title>Project</title>

</head>

<body>
  <!-- Navbar -->
  <div class="container-fluid" style="margin-bottom: 60px;">
    <div class="row">
    <div class="col-md-12" style="padding: 0px!important;">
    <?php
include "../menu.php";
?>
    </div>
    </div>
    <!-- Navbar -->
  </div>
  <div class="row top-btn" style="margin-left: 65px;">

    <a href="../Register/index.php" class="btn btn-primary">Register <i class="fas fa-arrow-right"></i></a>

    <a href="../Login/index.php" class="btn btn-primary">Login <i class="fas fa-arrow-right"></i></a>

  </div>
  <!-- Canvas -->
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-12" style="padding: 0px!important;">
     <canvas id="canvas" style="width: 100%!important;"></canvas>
  <script src="main.js"></script>
     </div>
   </div>
 </div>
 <!-- Canvas -->

 <!-- Main Header -->
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-6" style="padding: 0px!important;">
     <div data-aos="fade-right">
                <div class="main-heading">
                  <h1><span style="font-size: 50px; color: #f6be30; font-family: 'Lobster'; font-weight: 600;"> Programming Website</span></h1>
                  <br>
                  <h1><span style="font-size: 50px;color: #f6be30; font-family: 'Lobster'; font-weight: 600;">Watch, Upload and</span></h1>
                  <br>
                  <h1><span style="font-size: 50px;color: #f6be30; font-family: 'Lobster'; font-weight: 600;">Earn</span></h1>
                  <br>
                  <h4 style="color: white;"> A website where users will be able to register and login and be <br>able to earn points/coins after watching videos.</h4>
                </div>
              </div>
     </div>
     <div class="col-md-6"></div>
   </div>
 </div>
 <!-- Main Header -->

 <!-- Quick Section -->
 <div class="container-fluid">
 <div class="row quick" >
             <div class="col-md-6" style="padding: 0px!important;"> 

                <div data-aos="fade-up" style="width: 100%!important;">
                    <img src="pic1.png" height="320px;" style="width: 100%!important;">

                  </div>
             </div>
             <div class="col-md-6" style="padding: 0px!important;">
                <div class="quick-heading-left">
                    <h1><span style="color: #f6be30; font-family: 'Lobster'; font-weight: 600;"> See Quick</span></h1>
                    <br>
                    <h1><span style="color: #f6be30; font-family: 'Lobster'; font-weight: 600;">Tutorials!</span></h1>
                    <br>
                    <h4 style="font-size: 20px; padding-right: 50px; text-align: justify; color:gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h4>
                  </div>
                  <a href="../Register/index.php" class="btn btn-primary">Join Now <i class="fas fa-arrow-right"></i></a>


             </div>
         </div>
 </div>
 <!-- Quick Section -->

 <!-- Lang Section -->
<div class="container-fluid">
<div class="row lang" style="padding-top: 12%; padding-bottom: 7%; color: white; background-color: #6e0fb3; " id="serv">
             <div class="col-md-6" style="padding: 0px!important;">
                <div class="quick-heading-left" style="padding-left: 22px;">
                    <h1><span style="color: white; font-family: 'Lobster';"> Languages We Offer</span></h1>
                    <br>
                    <h4 style="font-size: 20px; text-align: justify;">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h4>
                  </div>
             </div>
             <div class="col-md-6" style="padding: 0px!important;">
                <script>

                    $( document ).ready( function() {

                        var entries = [

                            { label: 'Dev Blog', url: 'http://niklasknaack.blogspot.de/', target: '_top' },
                            { label: 'Flashforum', url: 'http://www.flashforum.de/', target: '_top' },
                            { label: 'jQueryScript.net', url: 'http://www.jqueryscript.net/', target: '_top' },
                            { label: 'Javascript-Forum', url: 'http://forum.jswelt.de/', target: '_top' },
                            { label: 'JSFiddle', url: 'https://jsfiddle.net/user/NiklasKnaack/fiddles/', target: '_top' },
                            { label: 'CodePen', url: 'http://codepen.io/', target: '_top' },
                            { label: 'three.js', url: 'http://threejs.org/', target: '_top' },
                            { label: 'WebGLStudio.js', url: 'http://webglstudio.org/', target: '_top' },
                            { label: 'JS Compress', url: 'http://jscompress.com/', target: '_top' },
                            { label: 'TinyPNG', url: 'https://tinypng.com/', target: '_top' },
                            { label: 'Can I Use', url: 'http://caniuse.com/', target: '_top' },
                            { label: 'URL shortener', url: 'https://goo.gl/', target: '_top' },
                            { label: 'HTML Encoder', url: 'http://www.opinionatedgeek.com/DotNet/Tools/HTMLEncode/Encode.aspx', target: '_top' },
                            { label: 'Twitter', url: 'https://twitter.com/niklaswebdev', target: '_top' },
                            { label: 'deviantART', url: 'http://nkunited.deviantart.com/', target: '_top' },
                            { label: 'Gulp', url: 'http://gulpjs.com/', target: '_top' },
                            { label: 'Browsersync', url: 'https://www.browsersync.io/', target: '_top' },
                            { label: 'GitHub', url: 'https://github.com/', target: '_top' },
                            { label: 'Shadertoy', url: 'https://www.shadertoy.com/', target: '_top' },
                            { label: 'Starling', url: 'http://gamua.com/starling/', target: '_top' },
                            { label: 'jsPerf', url: 'http://jsperf.com/', target: '_top' },
                            { label: 'Foundation', url: 'http://foundation.zurb.com/', target: '_top' },
                            { label: 'CreateJS', url: 'http://createjs.com/', target: '_top' },
                            { label: 'Velocity.js', url: 'http://julian.com/research/velocity/', target: '_top' },
                            { label: 'TweenLite', url: 'https://greensock.com/docs/#/HTML5/GSAP/TweenLite/', target: '_top' },
                            { label: 'jQuery', url: 'https://jquery.com/', target: '_top' },
                            { label: 'jQuery Rain', url: 'http://www.jqueryrain.com/', target: '_top' },
                            { label: 'jQuery Plugins', url: 'http://jquery-plugins.net/', target: '_top' },

                        ];

                        var settings = {

                            entries: entries,
                            width: 480,
                            height: 480,
                            radius: '65%',
                            radiusMin: 75,
                            bgDraw: true,
                            bgColor: '#6e0fb3',
                            opacityOver: 1.00,
                            opacityOut: 0.05,
                            opacitySpeed: 6,
                            fov: 800,
                            speed: 0.3,
                            fontFamily: 'Oswald, Arial, sans-serif',
                            fontSize: '15',
                            fontColor: 'white',
                            fontWeight: 'normal',//bold
                            fontStyle: 'normal',//italic
                            fontStretch: 'normal',//wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded
                            fontToUpperCase: true,
                            tooltipFontFamily: 'Oswald, Arial, sans-serif',
                            tooltipFontSize: '11',
                            tooltipFontColor: '#fff',
                            tooltipFontWeight: 'normal',//bold
                            tooltipFontStyle: 'normal',//italic
                            tooltipFontStretch: 'normal',//wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded
                            tooltipFontToUpperCase: false,
                            tooltipTextAnchor: 'left',
                            tooltipDiffX: 0,
                            tooltipDiffY: 10

                        };

                        //var svg3DTagCloud = new SVG3DTagCloud( document.getElementById( 'holder'  ), settings );
                        $( '#holder' ).svg3DTagCloud( settings );

                    } );

                </script>
                    <div id='holder' style=" position: relative; top:-70px; width: 100%!important;"></div>

             </div>

         </div>
</div>
 <!-- Lang Section -->
 <!-- learn coding -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="padding: 0px!important; text-align: center; margin-top: 20px;">
    <div data-aos="zoom-in">
                      <h1 style="color: #f6be30; font-family: 'Lobster'; font-weight: 600;">
                        Learn Coding and Upload Easily: </h1>
                    </div>
                    <div class="">
                  <a href="../Login/index.php" class="btn btn-primary">Login <i class="fas fa-arrow-right"></i></a>

                    <br>
                    </div>
    </div>
  </div>
</div>
 <!-- Learn Coding -->

 <!-- See Tutorials  -->
 <div class="container" style="margin-top: 70px;">
   <div class="row">
     <div class="col-md-6" style="padding: 0px!important;">
    
                    <img src="pic2.jpg" height="350px;" class="pic2" style="width: 100%!important; margin-left: -50px!important;">
             
    </div>
     <div class="col-md-6" style="padding: 0px!important;">
     <div class="quick-heading-left">
                    <h1><span style="color: #f6be30; font-family: 'Lobster'; font-weight: 600;"> See Tutorials </span></h1>
                    <br>
                    <h4 style="font-size: 20px; text-align: justify; padding-right: 25px; color:gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h4>
                  </div>
    </div>
   </div>
 </div>

 <!-- See Tutorials -->
 <!-- We got coverd -->
 <div class="container-fluid" style="background-color: #6e0fb3; padding: 80px; margin-top: 70px;">
   <div class="row">
     <div class="col-md-12" style="padding: 0px!important; text-align: center;">
     <div data-aos="flip-up">
                  <h1 style="font-family: 'Lobster'; color: white;">
                    We’ve Got You Covered
                  </h1>
                </div>
    </div>
   </div>
   <div class="row">
     <div class="col-md-3" style="padding: 0px!important; ">
     <div class="card" style="width: 18rem; height: 23rem;">
                            <center>
                          <img src="key.png" width="50px;" alt="..." style="margin-top: 9px;">
                            </center>
                        <div class="card-body">
                          <h5 class="card-title">CIn Depth Tutorials</h5>
                          <p class="card-text">We provide you with in-depth tutorials on programming which you can follow along easily and learn efficiently.</p>
                          <a href="../My Tutorials/index.php" class="btn btn-primary" style="margin-top: 25%; background-color: #f03188; border:none;">Learn Now</a>
                        </div>
                      </div>
    </div>
     <div class="col-md-3" style="padding: 0px!important; ">
     <div class="card" style="width: 18rem; height: 23rem;">
                            <center>
                          <img src="cone.png" width="50px;" alt="..." style="margin-top: 9px;">
                            </center>
                        <div class="card-body">
                          <h5 class="card-title">Test Your Knowledge</h5>
                          <p class="card-text">Challenge yourself with fun quizzes along the way as you learn. We provide each quiz to be fun and intuitive! </p>
                          <a href="../My Tutorials/index.php" class="btn btn-primary" style="margin-top: 25%; background-color: #f03188; border:none;">Quiz Yourself</a>
                        </div>
                      </div>
    </div>
     <div class="col-md-3" style="padding: 0px!important; ">
     <div class="card" style="width: 18rem; height: 23rem;">
                            <center>
                          <img src="world-wide-web.png" width="50px;" alt="..." style="margin-top: 9px;">
                            </center>
                        <div class="card-body">
                          <h5 class="card-title">Live Webex Tutorials</h5>
                          <p class="card-text">We hold weekly live webex calls in which we walk you through the topic and ease your questions away!</p>
                          <a href="../Live Session/index.php" class="btn btn-primary" style="margin-top: 25%; background-color: #f03188; border:none;">View Live Sessions</a>
                        </div>
                      </div>
    </div>
     <div class="col-md-3" style="padding: 0px!important; ">
     <div class="card" style="width: 18rem; height: 23rem;">
                            <center>
                          <img src="chat.png" width="50px;" alt="..." style="margin-top: 9px;">
                            </center>
                        <div class="card-body">
                          <h5 class="card-title">Ask Us!</h5>
                          <p class="card-text">Have any extra questions for us and our team? We would love to help you in your next coding adventure, ask away!</p>
                          <a href="../Contact Us/index.php" class="btn btn-primary" style="margin-top: 25%; background-color: #f03188; border:none;">Ask a Question</a>
                        </div>
                      </div>
    </div>
   </div>
 </div>


 <!-- We got coverd -->

 <!-- Our Mission -->
<div class="container" style="margin-top: 70px;">
  <div class="row">
    <div class="col-md-6" style="padding: 0px!important;">
    <div class="quick-heading-right-1">
                    <h1><span style="color: #f6be30; font-family: 'Lobster'; font-weight: 600;"> Our Mission: </span></h1>
                    <br>
                    <h4 style="color:gray ; font-size: 20px; padding-left: 10px; text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h4>
                  </div>
                  <a href="../Register/index.php" class="btn btn-primary gtn">Get Started <i class="fas fa-arrow-right"></i></a>
  </div>
    <div class="col-md-6" style="padding: 0px!important;">
    <div data-aos="zoom-in" style="width: 100%!important;">
                    <img src="pic3.png" height="400px;" class="pic3" style="margin-left: 50px; width: 100%!important;">
                  </div>
  </div>
  </div>
</div>

 <!-- Our Mission -->

    
<div class="row" style="margin-top: 10%;" id="feedback">
    <!-- Site footer -->

 <?php
include "../footer.php";
?>
</div>



   <script>
    AOS.init();
  </script>
</body>

</html>