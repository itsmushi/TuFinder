<?php
session_start();
require_once("includes/db.php");
require_once("includes/functions.php");




if(isset($_POST["login"])){
  
$username=$_POST["loginEmail"];
$password=$_POST["loginPassword"];
    $email=authenticate_user($username, $password); //use this to store in an session
    if($email){// user verfied
        $_SESSION["email"]=$email;
        unset($_SESSION['message']);
        echo "you are logged in";
        echo $email;
        header("Location: index.php"); 

    }
    else{
      $_SESSION["message"]="not logged in";
      $_SESSION["failedToSignin"]="yes";
          header("Location: index.php"); 
           
        }
}elseif(isset($_POST["signup"])){
  print_r($_POST);
  $signupName=$_POST["signupName"];
  $signupAs=$_POST["SignupAs"];
  $subject=$_POST["Subject"];
  $signupPhone=$_POST["signupPhone"];
  $signupEmail=$_POST["signupEmail"];
  $signupPassword=$_POST["signupPassword"];
  $signupPassword=password_hash( $signupPassword, PASSWORD_DEFAULT);
  

 $sql=" INSERT INTO registration (email, name, password, status,contact, subject1) VALUES ( '$signupEmail', '$signupName', '$signupPassword', '$signupAs','$signupPhone', '$subject'); ";
$rs=mysqli_query($conn,$sql);
confirm_query($rs);

$_SESSION["email"]= $signupEmail;
header("Location: index.php?k={$signupEmail}"); 
}elseif(isset($_POST["updateProfile"])){
  print_r($_POST);
//   $signupName=$_POST["signupName"];
//   $signupAs=$_POST["SignupAs"];
if(isset($_POST["Subject1"])){$subject1=$_POST["Subject1"];}
if(isset($_POST["Subject2"])){$subject2=$_POST["Subject2"];}
if(isset($_POST["Subject3"])){$subject3=$_POST["Subject3"];}
if(isset($_POST["bio"])){$bio=$_POST["bio"];}

//   $signupPhone=$_POST["signupPhone"];
//   $signupEmail=$_POST["signupEmail"];
   $signupPassword=$_POST["signupPassword"];
   $signupPassword=password_hash( $signupPassword, PASSWORD_DEFAULT);
  $signupEmail= $_SESSION["email"];
  $sql=" UPDATE registration SET subject1='$subject1', subject2='$subject2', subject3='$subject3',bio='$bio', password='$password' WHERE email='$signupEmail' ";
//  $sql=" INSERT INTO registration (email, name, password, status, subject1) VALUES ( '$signupEmail', '$signupName', '$signupPassword', '$signupAs', '$subject'); ";
 $rs=mysqli_query($conn,$sql);
confirm_query($rs);

// $_SESSION["email"]= $signupEmail;
 header("Location: teacher-single.php?k={$signupEmail}"); 
}elseif(isset($_POST["changePicture"])){
  $signupEmail= $_SESSION["email"];
  
  $file=$_FILES;
  //print_r($file["file"]);
  $file=$file["file"];

$fileName=$file["name"];
$fileType=$file["type"];
$fileTempName=$file["tmp_name"];
$fileError=$file["error"];
$fileSize=$file["size"];

$fileExt=explode(".",$fileName);
$fileActualExt=strtolower(end($fileExt));
$allowed=["jpg","jpeg","png"];
if(in_array($fileActualExt,$allowed)){
  if($fileError===0){
    if($fileSize<10000000){
      $imageFullName=$fileName.".".uniqid("",true).".".$fileActualExt;
      $fileDestination="images/profilePictures/". $imageFullName;

      move_uploaded_file($fileTempName,$fileDestination);
      
      $sql=" UPDATE registration SET profilePicture='$fileDestination' WHERE email='$signupEmail' ";
      //  $sql=" INSERT INTO registration (email, name, password, status, subject1) VALUES ( '$signupEmail', '$signupName', '$signupPassword', '$signupAs', '$subject'); ";
       $rs=mysqli_query($conn,$sql);
      confirm_query($rs);
      header("Location: teacher-single.php?k=$signupEmail");
      //code
    }else{
      //"file is too big";
      $_SESSION["error"]="Picture too large, choose another";
      header("Location: teacher-single.php?k=$signupEmail");
  
    }
  }else{
    //echo "You had an error";
    $_SESSION["error"]="Please choose another picture";
    header("Location: teacher-single.php?k=$signupEmail");  
  }
  
}else{
  //echo "file uploaded is not correct";
  $_SESSION["error"]="Please choose another picture2";
  header("Location: teacher-single.php?k=$signupEmail");
  
}



}

//print_r($conn);
?>