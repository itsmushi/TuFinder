

<div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="index.php"> <h2 class="section-title text-white">TuFinder</h2></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.php">About</a>
            </li>
           
            <li class="nav-item @@blog dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tutors
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="teacher.php">Tutors</a>
              <?php if(isset($_SESSION["email"])){
                    $userEmail=$_SESSION["email"];
                    require_once("includes/db.php");
                    require_once("includes/functions.php");
                    $sql = "SELECT * FROM registration WHERE email='$userEmail' LIMIT 1";

                    $result = mysqli_query($conn, $sql);
                    confirm_query($result);
                    
                    while($row = mysqli_fetch_assoc($result)) {
                        if($row["status"]=="Tutor"){
                          $_SESSION["sts"]="Tutor"; //one will get this session only when he/she is tutor and has clicked the buttons so we will check this before showing students or parents
                                                    //also to prevent one who could just enter url and put the get parameter manually
                          ?>
                            <a class="dropdown-item" href="teacher.php?st=Student">Students</a>
                            <a class="dropdown-item" href="teacher.php?st=Parent">Parents</a>
                            <div class="dropdown-divider"></div>
                          <?php
                        }
                  } } ?>
             
            </div>
                
            </li>
            
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
            
            <!-- display when the user log in -->
            <?php
            if(isset($_SESSION["email"])){
              ?>
               <li class="nav-item @@profile">
              <a class="nav-link" href="teacher-single.php?k=<?php echo $userEmail; ?>">PROFILE</a>
            </li>
            <?php
            }

            ?>
           
          </ul>
        </div>
      </nav>
</div>


