<?php
// session_start();

require_once("includes/db.php");
require_once("includes/functions.php")

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
  <link href="css/styles2.css" rel="stylesheet">
  
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

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Tutors</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
       
      </div>
    </div>
  </div>
</section>
<!-- /page title -->


<!-- teachers -->
<section class="section">
  <div data-ref="mixitup-target" class="container">
    <div class="row">
      <div class="col-12">
        <!-- teacher category list -->
        <ul class="list-inline text-center filter-controls mb-5">
          <li class="list-inline-item m-3 text-uppercase" data-filter=".math">Math</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".science">Science</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".socialstudies">Social Studies</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".arts">Arts</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".businessstudies">Business Studies</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".language">Language</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".others">Others</li>
        </ul>
      </div>
    </div>
    <!-- teacher list -->
    <div class="row tichersList" data-ref="mixitup-container">
      <!-- teacher -->


      <!-- loading teachers from database  -->


<?php
$_SESSION["rowToStart"]=0;

if(!isset($_SESSION["email"])){
  $sql = "SELECT * FROM registration WHERE status='Tutor' LIMIT 6 OFFSET 0";
}else{//if user is logged in and is a teacher then dont display him in the list
  
  $userEmail=$_SESSION["email"];
  if(isset($_GET["st"]) && isset($_SESSION["sts"])){//user now has selected to just filter whether parents or students only and he/she is a teacher  coz otherwise would not get that session[sts] 
                                                //also to prevent one who could just enter url and put the get parameter manually
    $st=$_GET["st"];
    $_SESSION["sts"]=$st;
    $sql = "SELECT * FROM registration WHERE status='$st' AND email !='$userEmail' LIMIT 6 OFFSET 0";
  }else{
    unset($_SESSION["sts"]);//so that when  going to load more it doesnt consider session sts
    $sql = "SELECT * FROM registration WHERE status='Tutor' AND email !='$userEmail' LIMIT 6 OFFSET 0";
  }
  
}

$result = mysqli_query($conn, $sql);
confirm_query($result);


//$string = str_replace(' ', '', $string);

$subjects = array("offsetedValue","science", "math","socialstudies", "arts", "businessstudies", "language","others");

while($row = mysqli_fetch_assoc($result)) {
  ?>
  <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 <?php

 
  $arrSub=[$row["subject1"],$row["subject2"],$row["subject3"]];
  
  //for adding classes of subjects
  for($i=0;$i<count($arrSub);++$i){
    $str=$arrSub[$i];
    $str = str_replace(' ', '', $str);
    $str=strtolower($str);
    // if($i==0){
    //   $x=$str;
    // }
    
   if( array_search($str,$subjects,true) ){
    echo " ";
      echo $str;
   }

  }

  $arrSub=[];
 
  ?> ">
  
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="<?php
          
          if($row["profilePicture"]==null){//profile picture  is not set display default picture
            echo "images/teachers/profileDefault.png";
          }else{
                echo $row["profilePicture"];
              } 
                            
              ?>" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.php?k=<?php echo $row["email"]; ?>" class="<?php
            //condition for allow people logged in to visit teachers profiles
              if(!isset($_SESSION["email"])){
                echo "link-disabled";
              }
            ?> ">
              <h4 class="card-title"><?php echo $row["status"]; ?></h4> 
            </a>
            <p><?php echo $row["name"]; ?></p>
            <ul class="list-inline">
              <li class="list-inline-item"><?php echo $row["subject1"];   ?></li>
              <li class="list-inline-item"><?php echo $row["subject2"];   ?></li>
              <li class="list-inline-item"><?php echo $row["subject3"];   ?></li>
            </ul>
          </div>
        </div>
      </div>

  <?php


}
$_SESSION["rowToStart"]=6;

?>


      <!-- teacher -->
      <!-- <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 businessstudies">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/teachers/teacher-2.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Clark Malik</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div> -->
     
     
    </div>
    <button class="btn btn-primary loadMore">Load More </button>
  </div>
</section>
<!-- /teachers -->

<!-- footer -->
<footer>

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
            <a href="https://TuFinder.com">TuFinder.com</a> . All Rights Reserved.</p>
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
<script src="js/script2.js"></script>
</body>
</html>