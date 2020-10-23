<?php
// session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TuFinder</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>



<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <?php

require_once("includes/topHeader.php");
?>


  <!-- navbar -->


  <div class="navigation w-100">
    <?php
    require_once("includes/navigation.php");

    ?>
  </div>


</header>
<!-- /header -->


<!-- Modal for login and signup is here -->
<?php

require_once("includes/loginSignUP.php");
?>

<!-- Modal -->




<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Connect with Tutors Easily </h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">For Inperson or online Tutoring with proffessional or peer Tutors.</p>
           
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Whatever the subject,we can help.</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Sign Up as a Parent/Student/Tutor to enjoy our servicess</p>
        </div>
      </div>
      <!-- slider item -->
    <!--  <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">To inspire and empower students is our mission</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Join Tufinder to take your academic potential to a whole new level.</p>
        </div>
      </div>
    </div>
  </div>-->
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/banner/banner-feature.jpg" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Mission</h3>
            <p>Inspire and empower students to reach their full potential academically as well as socially and economically in the near future.</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Vision</h3>
            <p>To have a number of reliable experts in the country in the near Future.
            </p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Achievements</h3>
            <p>We've been able to reach a number of students that benefit alot from the system.
              </p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Objectives</h3>
            <p>Help students perform well academically yet help teachers expand their source of income.
          </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">About Us</h2>
        <p> TuFinder helps you find the best private tutors near you in any subject.Contact a professional tutor to start in person
            or online tutoring.Sign up  as a parent/tutor/student.Create your Account and edit your profile by providing more
             description about yourself.Connect with professional and peer tutors online and take your basic skills to a whole new level.
            </p>
        <p> Whatever the subject we can help.Wherever you are,our services are accessible.Our services are for everyone.Parents,students and Tutors.</p>
        <a href="about.html" class="btn btn-primary-outline">Explore More</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/hero-bg.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>

<section class="section bg-cover" data-background="images/backgrounds/success-story.jpg">
  <div class="container">
    <div class="row">
     
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">Why Us</h2>
          <p>With Tufinder there is a wide choice of Tutors whether for online or in person tutoring and also the whole process of connecting with a Tutor is simple,quick and straight forward.</p>
          <p>You can contact as many tutors as you like and select the perfect Tutor for yourself or for your group.</p>
           <a href="teacher.html" class="btn btn-primary-outline">Find a Tutor</a>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- news -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <center><h2 class="section-title">See What's New</h2></center>
      </div>
    </div>
    <div class="row justify-content-center">
 
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/banner/advert2.jpg" alt="Post thumb">
      <div class="card-body">
      
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">August 28, 2020</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">By Dorice D. </li>
        </ul>
       
          <h4 class="card-title">Beginning of Grade Seven Exams.</h4>
     
        <p class="card-text"></p>
      
      </div>
    </div>
  </article>
 
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/banner/advert1.jpg" alt="Post thumb">
      <div class="card-body">
       
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">August 13, 2020</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">By Angie Joe</li>
        </ul>
       
          <h4 class="card-title">Graduation Ceremony at St.Anne-Marie Primary .</h4>
      
        <p class="card-text"></p>
     
      </div>
    </div>
  </article>

  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/banner/advert3.jpg" alt="Post thumb">
      <div class="card-body">
       
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">August 24, 2020</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">By Alex Pitt</li>
        </ul>
       
          <h4 class="card-title">Orientation Program for the new students</h4>
 
     
      </div>
    </div>
  </article>
</div>
  </div>
</section>


<!-- footer -->
<
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright  
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            ©  <a href="https://Tufinder.com">TuFinder.com</a> . All Rights Reserved.</p>
        </div>
       
      </div>
    </div>
  </div>
 
</footer>

<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>
  


<!-- incorrect password -->
<?php

if(isset($_SESSION["message"])){
  ?>
<script>
alert("email/password incorrect");
</script>

  <?php
  unset($_SESSION['message']);   //to avoid unnecessary incorrect password alerts when one gaveup login in
}
?>

</body>
</html>
