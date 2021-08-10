
<style>
  body {
    margin: 0;
    font-family: Helvetica, sans-serif;
    background-color: #f4f4f4;
  }

  a {
    color: #000;
  }

  /* header */

  .header {
    background-color: transparent;
    box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, .1);
    position: fixed;
    width: 100%;
    z-index: 3;
    height: auto!important;
  }

  .header ul {
    margin: 0;
    padding: 0;
    list-style: none;
    overflow: hidden;
    background-color: #fff;
  }

  .header li a {
    display: block;
    padding: 20px 20px;
    text-decoration: none;
    color: #f6be30;
  }

  .header li a:hover,
  .header .menu-btn:hover {
    background-color: #F6BE30;
    color: white;
  }

  .header .logo {
    display: block;
    float: left;
    font-size: 2em;
    padding: 10px 20px;
    text-decoration: none;
  }

  /* menu */

  .header .menu {
    clear: both;
    max-height: 0;
    transition: max-height .2s ease-out;
    background-color: transparent;
  }

  /* menu icon */

  .header .menu-icon {
    cursor: pointer;
    display: inline-block;
    float: right;
    padding: 28px 20px;
    position: relative;
    user-select: none;
  }

  .header .menu-icon .navicon {
    background: #333;
    display: block;
    height: 2px;
    position: relative;
    transition: background .2s ease-out;
    width: 18px;
  }

  .header .menu-icon .navicon:before,
  .header .menu-icon .navicon:after {
    background: #333;
    content: '';
    display: block;
    height: 100%;
    position: absolute;
    transition: all .2s ease-out;
    width: 100%;
  }

  .header .menu-icon .navicon:before {
    top: 5px;
  }

  .header .menu-icon .navicon:after {
    top: -5px;
  }

  /* menu btn */

  .header .menu-btn {
    display: none;
  }

  .header .menu-btn:checked~.menu {
    max-height: 100%;
    transition: all .2s ease-out;
  }

  .header .menu-btn:checked~.menu-icon .navicon {
    background: transparent;
  }

  .header .menu-btn:checked~.menu-icon .navicon:before {
    transform: rotate(-45deg);
  }

  .header .menu-btn:checked~.menu-icon .navicon:after {
    transform: rotate(45deg);
  }

  .header .menu-btn:checked~.menu-icon:not(.steps) .navicon:before,
  .header .menu-btn:checked~.menu-icon:not(.steps) .navicon:after {
    top: 0;
  }
  .header.scrolled {
  background-color: #6e0fb3 !important;
  transition: background-color 200ms linear;
}

  /* 48em = 768px */

  @media (min-width: 48em) {
    .header li {
      float: left;
    }

    .header li a {
      padding: 10px;
      padding-top: 20px;
      height: 68px;
      color: white;
    }

    .header .menu {
      clear: none;
      float: right;
      max-height: none;
    }

    .header .menu-icon {
      display: none;
    }
  }
</style>
<header class="header">
  <a href="" class="logo">CSS Nav</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a href="../homepage/">Home</a></li>
    <li><a href="../User profile page_/index.php">My Profile</a></li>
     <!-- <li><a href="../My Quizzes/index.php">My Quizzes</a></li> -->
     <li><a href="../My Tutorials/index.php">All Tutorials</a></li>
    <li><a href="../user_tutorial/index.php">My Tutorials</a></li>
    <li><a href="../Redeem Coins/index.php">Redeem Coins</a></li>
    <li><a href="../Live Session/index.php">Live Session</a></li>
    <li><a href="../Contact Us/index.php">Contact Us</a></li>
    <li><a href="../AboutUs/index.php">About Us</a></li>
  </ul>
</header> 
  
    <script>
    $(function () {
    $(document).scroll(function () {
      var $nav = $(".header");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });

    </script> 


<!-- <div class="row">
            <div class="col-md-10">
                <input type="checkbox" id="active">
                <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
                <div class="wrapper">
                    <ul>
                        <li><a href="../homepage/">Home</a></li>
                        <li><a href="../User profile page_/index.php">Dashboard</a></li>
                        <li><a href="../My Quizzes/index.php">My Quizzes</a></li>
                        <li><a href="../My Tutorials/index.php">All Tutorials</a></li>
                        <li><a href="../user_tutorial/index.php">My Tutorials</a></li>
                        <li><a href="../Redeem Coins/index.php">Redeem Coins</a></li>
                        <li><a href="../Live Session/index.php">Live Session</a></li>
                        <li><a href="../Contact Us/index.php">Contact Us</a></li>
                        <li><a href="../AboutUs/index.php">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div> -->