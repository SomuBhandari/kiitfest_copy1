<!DOCTYPE html>

<?php
include "./sql.php";
$sql = new sql();
?>
<?php include "trac.php"; ?>
<html lang="en">
<head>

	<script type="text/javascript" src="//cdn.wishpond.net/connect.js?merchantId=1465714&writeKey=d6bcd5978f87" async></script>





  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="theme-color" content="#2e1832">
  <link rel="icon" sizes="192x192" href="img/kfLogoTopLeft.png">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>KIITFEST 5.0</title>

  <!--Bootstrap 4.2-->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!--Local css-->
  <link rel="stylesheet" href="css/common.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <!--Local js-->
  <script src="js/TimelineLite.min.js"></script>
  <script src="js/TweenMax.min.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106122426-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106122426-5');
</script>




</head>
<body>

  <div class="background ">
    <div class="sliding-bg"></div>
    <div id="tint" class="overlay home"></div>
    <div id="blackTint" class="overlay black"></div>
  </div>

  <!--Header-->
  <header class="header">
    <ul class="navContainer">
      <li class="expand">
        <svg class="hamburger" viewBox="0 0 100 100">
          <line class="line l1" x1="15" y1="29" x2="85" y2="29" />
          <line class="line l2" x1="15" y1="46" x2="85" y2="46" />
          <line class="line l3" x1="15" y1="63" x2="85" y2="63" />
        </svg>
      </li>
      <li><a class="nav-button" href="#home">Home</a></li>
      <li><a class="nav-button" href="#guest-section">Guests</a></li>
      <li><a class="nav-button" href="#about">About</a></li>
      <li><a class="nav-button" href="#events">Events</a></li>
      <li><a class="nav-button" href="#contactUs">Contact Us</a></li>
      <?php
          if($sql->isLogin()==1) {
              echo '<li><a href="events/checkout.php">Checkout  <i class="fas fa-shopping-cart"></i></a></li>';
              echo '<li><a href="logout.php">Logout   <i class="fas fa-sign-out-alt"></i></a></li>';
          } else {
              echo '<li><a class="button" href="signup.php">Register  <i class="fas fa-user-plus"></i></a></li>';
              echo '<li><a class="button" href="login.php">Log In   <i class="fas fa-sign-in-alt"></i></a></li>';
          }
      ?>
    </ul>
  </header>






  <!--Logo-->
  <section id="home" >
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center ">

      <div class="row w-100 d-flex justify-content-center align-items-center">
        <div class="col-lg-9 col-md-12 col-sm-12">

          <!-- Animated Logo -->
          <div class="images">
            <img alt="center" class="center" src='img/Logo/center.png' />
            <img alt="greenText" class="greenText" src='img/Logo/greenText.png' />
            <img alt="innertri" class="innerTri" src='img/Logo/innertri.png' />
            <img alt="lower" class="lower" src='img/Logo/lower.png' />
            <img alt="mainText" class="mainText" src='img/Logo/mainText.png' />
            <img alt="middle" class="middle" src='img/Logo/middle.png' />
            <img alt="upper" class="upper" src='img/Logo/upper.png' />
          </div>

          <h2 class="date"> 15th Feb - 17th Feb<br> 2019 </h2>

          <!-- Countdown -->
          <!-- <div class="countdown mt-auto"> -->
            <!-- <div class="countdown__days">
              <div class="number"></div>
              <span class="time">Days</span>
            </div> -->
            <!-- <div class="countdown__hours">
              <div class="number"></div>
              <span class="time">Hours</span>
            </div> -->
            <!-- <div class="countdown__minutes">
              <div class="number"></div>
              <span class="time">Minutes</span>
            </div> -->
           <!--  <div class="countdown__seconds">
              <div class="number"></div>
              <span class="time">Seconds</span>
            </div> -->
          <!-- </div> -->


        </div>
      </div>




  






      <!-- KIIT/KISS Logo -->
      <a href="https://kiit.ac.in"><img class="kiitLinkLogo" src="img/Logo/kiitLogo.png"></a>
      <a href="https://kiss.ac.in"><img class="kissLinkLogo" src="img/Logo/kissLogo.png"></a>

    </div>
  </section>

      <br>
      <center> <h1> FEST FEVER </h1> </center>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <center> <iframe width="100%" height="690px
        " scrolling="no" src="https://walls.io/h3iif"></iframe> </center>
    </div>
  </div>
</div>

<br><br>

  <div id="guest-section" class="container-fluid">
  	<center><h1> Guests </h1></center>
    <div class="col-md-12" >
  	<div class="row">
  		<div class="col-lg-3" style="padding: 5px">
  			<center> <img width="auto" src="/img/AR.jpg" class="img-responsive"> </center>
        <br><center><p> Armaan Malik </p></center>
  		</div>
  		<div class="col-lg-3" style="padding: 5px">
  			<center><img width="auto" src="/img/PR.jpg" class="img-responsive"> </center>
        <br><center><p> Prayag Mehta (LOST STORIES)</p></center>
  		</div>
  		<div class="col-lg-3" style="padding: 5px">
  			<center> <img width="auto" src="/img/v3.png" class="img-responsive"> </center>
        <br><center><p> Sunit Tondon </p></center>
  		</div>
  		<div class="col-lg-3" style="padding: 5px">
  			<center> <img width="auto" src="/img/v4.png" class="img-responsive"> </center>
        <br><center><p> Prakash Iyer </p></center>
  		</div>
  	</div></div>
  </div>
  

  <!--KiiTFest Intro Video-->
  <section id="about">
    <div class="container-fluid h-100">
      <div class="row justify-content-between align-items-center px-5 h-100">

        <!--Intro Body-->
        <div class="mt-5 col-lg-5 col-sm-12">
          <h1 class="heading">About KiitFest</h1>
          <p class="body">
          KIITFEST is a “Contest of Contests” that encompasses all cultural and technical events into one forum that we are about to bring forth “KIITFEST 5.0”. KIITFEST is an ever-expanding universe of glory and greatness, where fun and games meet battles and battles become wars, where we put the sparkle in the air and glitz in the land and where we make the stars shine. </p>
          <p class="body">
          This February, we aim to bring enthusiastic participation, eminent personalities and nights limed with entertainment and hysterical fun. KIITFEST has managed to attain a huge audience in the country and a participation of around 25000 students from all across the country stands a testimony to this. The techno cultural fest is packed with more than 100 events this year, with experts and dignitaries from various fields coming down to adjudicate the events. </p>
        </div>

        <!--Intro Video-->
        <div class="col-lg-6 col-sm-12 embed-responsive embed-responsive-16by9 align-self-center">
          <iframe width="1280" height="720" src="https://www.youtube.com/embed/Op7SHPDHwdI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> 

      </div>
    </div>
  </section>


  <!--Events -->
  <section id="events">
    <div class="container-fluid h-100">
      <div class="row justify-content-center align-items-center h-100">

        <div class="col-md-3 col-sm-8 d-flex flex-column justify-content-center align-items-center event tech">
          <div id="blackTint" class="event-overlay blue"></div>
          <h2 class="title">Technical</h2>
              <p class="body">"A small step. A giant leap for mankind."</p>
              <p class="body"> A hub for all denizens and enthusiasts of Technology who believe that they can mould this world into a better place to be a part of. A click is what matters!</p>
          <a href="./technical.php"><button class="event-button" >See Events</button></a>
        </div>
        <div class="col-md-3 col-sm-8 d-flex flex-column justify-content-center align-items-center event cul">
          <div id="blackTint" class="event-overlay pink"></div>
          <h2 class="title">Cultural</h2>
              <p class="body">"Imagination and Ideas are ever-expanding and immortal."</p>
              <p class="body"> A cue for all aspirants who are imaginative, creative and artisans to amalgamate and be a part to. So, dance and sway to the tunes of glory. We are open.</p>
          <a href="./cultural.php"><button class="event-button"> See Events</button>
</a>        </div>
        <div class="col-md-3 col-sm-8 d-flex flex-column justify-content-center align-items-center event quiz">
          <div id="blackTint" class="event-overlay yellow"></div>
          <h2 class="title">QuizFest</h2>
              <p class="body">"My mind rebels at stagnation."</p>
              <p class="body"> And with that witty thought in mind, your curiosity is satiated. The Quiz Carnival is back to churn your neurons with questions and answers that would determine the best. Be a part!</p>
          <a href="./quizfest.php"><button class="event-button">See Events</button></a>
        </div>

      </div>
    </div>
  </section>

  <section>
    <div class="sponsorContainer">
      <h1 class="text-white">Our Partners</h1>
      <div class="sponsorGrid">
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/redfm.png" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/sports salon.png" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/maitre.png" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/kha.jpg" alt="">
        </a>


        <a class="img" href="#">
          <img class="sponsor" src="img/brands/brc.png" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/zevar.jpg" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/sc.jpg" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/swiggy.png" alt="">
        </a>

        <a class="img" href="#">
          <img class="sponsor" src="img/brands/VLogo.png" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/redbull.png" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/cc.png" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/9th Bistro.png" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/bmw.jpg" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/jlr.jpg" alt="">
        </a>
        <a class="img" href="#">
          <img class="sponsor" src="img/brands/js.jpg" alt="">
        </a>
      </div>
    </div>
  </section>


  <!--Contact Us-->
  <section id="contactUs">
    <div class="mapouter">

      <div class="gmap_canvas">
        <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=ksac%20bhubaneshwar&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>

      <div class="row contact-info">
        <div class="col-md-4 col-xs-12 text-md-left text-xs-center">
          <h3 class="">Phone</h3>
          <p class="text-dark">
            General Info: +91 9123782010<br>
            Technical Support: +91 7781957003<br>
            Sponsorship: +91 7683979698<br>
          </p>
        </div>
        <div class="col-md-4 col-xs-12 text-md-center text-xs-center">
          <h3>Address</h3>
          <p class="text-dark">
            KIIT STUDENT ACTIVITY CENTRE,<br>
            KIIT Deemed to be University<br>
            Patia<br>
            Bhubaneswar - 751024
          </p>
        </div>
        <div class="col-md-4 col-xs-12 text-md-right text-xs-center">
          <h3>E-mail</h3>
          <p class="text-dark">kiit.fest@kiit.ac.in</p>
        </div>
      </div>
    </div>
  </section>

  <!--
  <div class="popup">
    <img src="img/KF POSTER 1.jpg">
    <i class="fas fa-times close"></i>
  </div>
  -->
  
  <script src="js/common.js"></script>
  <script src="js/index.js"></script>



  <script type="text/javascript" data-cfasync="false">
  (function(W,i,s,e,P,o,p){W['WisePopsObject']=P;W[P]=W[P]||function(){
  (W[P].q=W[P].q||[]).push(arguments)},W[P].l=1*new Date();o=i.createElement(s),
  p=i.getElementsByTagName(s)[0];o.async=1;o.src=e;p.parentNode.insertBefore(o,p)
  })(window,document,'script','//loader.wisepops.com/get-loader.js?v=1&site=LPvdD6Arvr','wisepops');
</script>



</body>
</html>