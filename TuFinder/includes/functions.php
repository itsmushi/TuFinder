<?php

function authenticate_user($username, $password){
    global $conn;
    //write query
    $sql ="SELECT * FROM `registration`";
    //get results
    
    $flag=false;
    
    $results = mysqli_query($conn,$sql);
    
    while($data = mysqli_fetch_assoc($results)){
      
      if( $data["email"]==$username && password_verify($password, $data["password"])) {
        $flag=true;
        break;
      }
    }

    if($flag){
        return $data["email"]; //so as to be assigned to the session
      }else{
        return false;
      }
      
      }
      
    
    function confirm_query($result_set){
        if(!$result_set){
            die("Database Query failed");
           }
         }

         

function check_login(){
    if(!isset($_SESSION["email"]) ){
      
      redirect("index.php");
    }
  }
  function redirect($location){
    header("Location: $location");
    exit;
  }
    

?>