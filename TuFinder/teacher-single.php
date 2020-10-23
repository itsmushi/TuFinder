<?php 
// session_start();
require_once("includes/db.php");
require_once("includes/functions.php");

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
    check_login();

    

  $getEmail=$_GET["k"];   //the link that redirect to this page should incude get request with k=signupemail

$userEmail=$_SESSION["email"];


    ?>
  </div>

</header>
<!-- /header -->
<!-- Modal -->
<?php

require_once("includes/loginSignUP.php");
?>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="teacher.html">Tutor</a></li>
        
        </ul>
       
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teacher details -->
<?php

  $sql = "SELECT * FROM registration WHERE email='$getEmail' LIMIT 1";

$result = mysqli_query($conn, $sql);
confirm_query($result);

while($row = mysqli_fetch_assoc($result)) {
  $tempRow=$row;
?>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-5">
        <img class="img-fluid w-100" src="<?php
          
          if($row["profilePicture"]==null){//profile picture  is not set display default picture
            echo "images/teachers/profileDefault.png";
          }else{
                echo $row["profilePicture"];
              } 
                            
              ?>" alt="teacher">
        <a class=" btn btn-primary " href="#" data-toggle="modal" data-target="#changePicture">Change Picture</a>
      </div>
      <div class="col-md-6 mb-5">
        <h3><?php echo $row["name"];  ?></h3>
     
       
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h4 class="mb-4">CONTACT INFO:</h4>
            <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="mailto:johndoe@email.com"><i class="ti-email mr-2"></i><?php echo $row["email"]; ?></a></li>
              <li class="mb-3"><a class="text-color" href="callto:+120345876"><i class="ti-mobile mr-2"></i><?php echo $row["contact"] ; ?></a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-facebook mr-2"></i><?php echo $row["name"];  ?></a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-twitter-alt mr-2"></i><?php echo $row["name"];  ?></a></li>
            
            </ul>
          </div>
          <div class="col-md-6">
            <h4 class="mb-4">SUMMARY OF SUBJECTS</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><?php echo $row["subject1"];  ?></li>
              <li class="mb-3"><?php echo $row["subject2"];  ?></li>
              <li class="mb-3"><?php echo $row["subject3"];  ?></li>
            </ul>
          </div>
          <div class="col-12">
        <h4 class="mb-4">BIOGRAPHY</h4>
        <p class="mb-5"><?php echo $row["bio"];  ?></p>
      </div>
<?php 
} // mysqli_free_result($result);
 ?>

      <?php
        if($_SESSION["email"]==$getEmail){
          ?>
           <a class=" btn btn-primary " href="#" data-toggle="modal" data-target="#editProfile">Edit Profile</a>
           <?php
        }
      ?>
 
        </div>
      </div>
      
    </div>
   
  </div>

</section>

<?php
 $subjects=["Math","Science","Social Studies","Arts","Business Studies","Language","Others"];
?>

<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-1 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Edit Profile</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="loginAndSignup.php" method="post" class="row">
                       
                    <div class="col-12">
                        <select name="Subject1" id="category" class="form-control mb-3" value="first" >
                           <option disabled="disabled" selected="selected">First Subject</option>
                           <?php  
                              for($i=0;$i<count($subjects);$i++){
                                ?>
                                    <option <?php if($tempRow["subject1"]==$subjects[$i]){echo "selected";} ?> ><?php echo $subjects[$i];   ?></option>
                                <?php  } ?>
                          
                        </select>
                      </div>
                      <div class="col-12">
                        <select name="Subject2" id="category" class="form-control mb-3" >
                           <option disabled="disabled" selected="selected">Second Subject</option>
                           <?php  
                              for($i=0;$i<count($subjects);$i++){
                                ?>
                                    <option <?php if($tempRow["subject2"]==$subjects[$i]){echo "selected";} ?> ><?php echo $subjects[$i];   ?></option>
                                <?php  } ?>
                        </select>
                      </div>
                      <div class="col-12">
                        <select name="Subject3" id="category" class="form-control mb-3" >
                           <option disabled="disabled" selected="selected">Third Subject</option>
                           <?php  
                              for($i=0;$i<count($subjects);$i++){
                                ?>
                                    <option <?php if($tempRow["subject3"]==$subjects[$i]){echo "selected";} ?> ><?php echo $subjects[$i];   ?></option>
                                <?php  } ?>
                        </select>
                      </div>
                      <div class="col-12">
                            <input type="textbox" class="form-control mb-3" id="bio" name="bio" value="<?php echo $tempRow["bio"];  ?>">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="New Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" name="updateProfile" value="updateProfile" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
</div>

<div class="modal fade" id="changePicture" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-1 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Change Picture</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="loginAndSignup.php" id="thiss" method="post" enctype="multipart/form-data" class="row">
                    <div class="col-12">
                           <input type="file" name="file">
                        </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn-primary" name="changePicture" value="Change Picture" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



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


<!-- when incorrect image uploaded -->
<?php

if(isset($_SESSION["error"])){
  // echo $_SESSION["error"];
  ?>
<script>
alert("Not updated, please choose another picture");
</script>

  <?php
  unset($_SESSION['error']);   //to avoid unnecessary incorrect password alerts when one gaveup login in
}
?>


</body>
</html>