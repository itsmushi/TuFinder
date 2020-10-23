<?php 
session_start();
if(isset($_SESSION["email"])){
  $userEmail=$_SESSION["email"];
}

?>

<div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+255657308690"><strong>CALL</strong> +255 657 308 690</a>
        
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            
<?php
if(!isset($_SESSION["email"])){
?>


<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">Sign In</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a></li>

<?php
}elseif(isset($_SESSION["email"])){
    ?>

    <a class="btn btn-primary" href="logout.php"> Log Out </a>
     
     
     <?php                  
}

?>

          </ul>
        </div>
      </div>
    </div>
  </div>
